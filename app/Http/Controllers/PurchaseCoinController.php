<?php

namespace App\Http\Controllers;

use Log;
use App\User;
use App\Supplier;
use App\Retailer;
use App\PurchaseItem;
use App\PurchaseCoin;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

use Auth;
class PurchaseCoinController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {        
        if(auth()->user()->isAdmin()){
            $data['orders'] = PurchaseCoin::all();
            return view('purchase_coin.admin', $data);
        }
        else{
            $supplier_id = auth()->user()->company_id;            
            $data['orders'] = PurchaseCoin::where('supplier_id', $supplier_id)->orderBy('id', 'desc')->get();
            Log::info($supplier_id);
            Log::info(json_encode($data['orders']));
            return view('purchase_coin.index', $data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['retailers'] = Retailer::all();
        $data['supplier'] = Supplier::find(auth()->user()->company_id);
        return view('purchase_coin.edit', $data);  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info($request);

        $this->validate($request, [
            'retailer_id'   => 'required|integer',
            'token_total'   => 'required', //AFT
            'fee'           => 'required', //ZAR
            'bill_amount'   => 'required', //ZAR  
            'cart_data'     => 'required'                     
        ]);

        json_decode($request->getContent(), true);

        $cart = $request['cart_data'];
        //check sum
        // to do

        // save db
        
        $purchase_coin = PurchaseCoin::create([
            'retailer_id' => $request['retailer_id'],
            'supplier_id' => auth()->user()->company_id,
            'items_count' => $request['cart_count'],
            'buy_token'   => $request['token_total'],
            'fee'         => $request['fee'],
            'billedTotal' => $request['bill_amount'],
        ]);

        Log::info("--------------------------------");
 

        
        foreach ($cart as $item) {
            $purchase_item = PurchaseItem::create([
                'purchase_coin_id' => $purchase_coin->id,
                'product_id' => $item['item_id'],
                'quantity'  => $item['item_quantity'],
                'discount'  => $item['item_discount'],
            ]);
        }
        
        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PurchaseCoin  $purchaseCoin
     * @return \Illuminate\Http\Response
     */
    public function show(PurchaseCoin $purchaseCoin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PurchaseCoin  $purchaseCoin
     * @return \Illuminate\Http\Response
     */
    public function edit(PurchaseCoin $purchaseCoin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PurchaseCoin  $purchaseCoin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PurchaseCoin $purchaseCoin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PurchaseCoin  $purchaseCoin
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchaseCoin $purchaseCoin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PurchaseCoin  $purchaseCoin
     * @return \Illuminate\Http\Response
     */
    public function approve(Request $request)
    {
        $this->validate($request, [
            'purchase_coin_id' => 'required',
        ]);

        $purchase_coin_id = $request['purchase_coin_id'];
        $trans = PurchaseCoin::find($purchase_coin_id);

        Log::info('-------------------approve-------------------')            ;
        // transfer aft token
        $r_user = User::where('company_id', $trans->retailer_id)->first();
        
        if(!$r_user || !$r_user->eth_addr){ 
            return response()->json([
                'success' => false,
                'message' => 'Failed to send token'
            ], 500);
        }

        $toAddr = $r_user->eth_addr;
        $amount = $trans->buy_token;
        
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => env('TOKEN_API_URL'),
            // You can set any number of default request options.
            'timeout'  => 500.0
        ]);

        $tokenRequestParams = [
            "toAddr" => $toAddr,
            "amount" => (string)$amount,
        ];

        $response = $client->request('POST', 'sendToken', [
            'http_errors' => false,
            'json' => $tokenRequestParams,
        ]);

        if ($response->getStatusCode() == 200) {
            $result = json_decode($response->getBody()->getContents());
            if ($result->success) {    
                $trans->txHash = $result->txHash;
                $trans->save();      

                return response()->json([
                    'success' => true,
                    'txHash' => $result->txHash
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Token API returns fail'
                ], 500);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'cannot reach token API server'
            ], 500);
        }
    }
}
