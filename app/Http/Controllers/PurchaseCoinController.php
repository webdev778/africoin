<?php

namespace App\Http\Controllers;

use Log;
use App\Supplier;
use App\Retailer;
use App\PurchaseItem;
use App\PurchaseCoin;
use Illuminate\Http\Request;

use Auth;
class PurchaseCoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier_id = auth()->user()->company_id;
        $data['orders'] = PurchaseCoin::all();//where('supplier_id', $supplier_id);

        Log::info($supplier_id);
        return view('purchase_coin.index', $data);
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
}
