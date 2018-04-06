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
use App\Mail\Invoice;
use Mail;
use Auth;
use App\Library\Invoice\InvoiceFactory;
use Storage;

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
        elseif(auth()->user()->user_type == 'Supplier') {
            $supplier_id = auth()->user()->company_id;            
            $data['orders'] = PurchaseCoin::where('supplier_id', $supplier_id)->orderBy('id', 'desc')->get();
            // Log::info($supplier_id);
            // Log::info(json_encode($data['orders']));
            return view('purchase_coin.index', $data);
        }else{
            $retailer_id = auth()->user()->company_id;            
            $data['orders'] = PurchaseCoin::where('retailer_id', $retailer_id)->orderBy('id', 'desc')->get();
            Log::info($retailer_id);
            Log::info(json_encode($data['orders']));
            return view('purchase_coin.retailer', $data);            
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
        
        Log::info("-------------Purchase Coin-------------------");
        // Log::info($purchase_coin->items);

        // create invoice pdf file
        $invoice = InvoiceFactory::make();

        // add items
        foreach ($purchase_coin->items as $purchase_item){
            $invoice->addItem($purchase_item->product->name, 
                                $purchase_item->discount, 
                                $purchase_item->quantity, 
                                $purchase_item->product->id);
        }

        $invoice_number = sprintf("%'.05d", $purchase_coin->id);
        $invoice_path = $invoice->number($invoice_number)
                ->tax(5)
                ->notes('Lrem ipsum dolor sit amet, consectetur adipiscing elit.')
                ->customer([
                    'name'      => $purchase_coin->supplier->name,
                    'id'        => '12345678A',
                    'phone'     => $purchase_coin->supplier->phone,
                    'location'  => $purchase_coin->supplier->street_address.' ' .$purchase_coin->supplier->street_code,
                    'zip'       => $purchase_coin->supplier->postal_code,
                    'city'      => ($purchase_coin->supplier->province || ''),
                    'country'   => 'South Africa',
                ])
                ->save('demo', 'invoice.default');
/*
        $invoice_path = InvoiceFactory::make()
                                ->addItem('Test Item', 10.25, 2, 1412)
                                ->addItem('Test Item 2', 5, 2, 923)
                                ->addItem('Test Item 3', 15.55, 5, 42)
                                ->addItem('Test Item 4', 1.25, 1, 923)
                                ->addItem('Test Item 5', 3.12, 1, 3142)
                                ->addItem('Test Item 6', 6.41, 3, 452)
                                ->addItem('Test Item 7', 2.86, 1, 1526)
                                ->number(4021)
                                ->tax(21)
                                ->notes('Lrem ipsum dolor sit amet, consectetur adipiscing elit.')
                                ->customer([
                                    'name'      => 'Èrik Campobadal Forés',
                                    'id'        => '12345678A',
                                    'phone'     => '+34 123 456 789',
                                    'location'  => 'C / Unknown Street 1st',
                                    'zip'       => '08241',
                                    'city'      => 'Manresa',
                                    'country'   => 'Spain',
                                ])
                                ->save('demo', 'invoice.default');
*/                                
        Log::info('-----------------pdf-------------------');
        Log::info($invoice_path);
        Log::info('-----------------pdf end-------------------');

        $purchase_coin->invoice_file = $invoice_path;
        $purchase_coin->invoice_no = sprintf("%'.05d", $purchase_coin->id);
        $purchase_coin->save();

        // notify supplier and retailer
        Mail::to(auth()->user()->email)->send(new Invoice($purchase_coin));
        
        $request->session()->flash('invoice_file', url("/invoices/{$purchase_coin->invoice_no}"));
        return response()->json([
            'success' => true,
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

    public function download($invoice_no){

        // get pdf file path by $invoice_no
        // $invoice_path = 'public/invoices/v4SM7bdVh6NXyVDNHQ2nFiFm09xFNk8dNkoV3jtV.pdf';
        $invoice_path = PurchaseCoin::where('invoice_no', $invoice_no)->first()->invoice_file;
        return Storage::download($invoice_path, 'invoice-#'.$invoice_no.'.pdf');        

        /*
        $file = Storage::disk('local')->get($invoice_path);
        $size = Storage::size($invoice_path);
        return response($file, 200)
                ->header('Content-type', 'application/force-download')
                ->header('Content-Disposition', "attachment; filename=\"invoice-#{$invoice_no}.pdf\"")
                ->header('Content-Length', $size)
                ->header('Connection', 'close');
                // ->header('Content-Transfer-Encoding', 'binary');
                */
                
    }
}
