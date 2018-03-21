<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Retailer;
use App\Supplier;
use Log;
use App\PurchaseCoin;
use App\PurchaseItem;

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['retailers'] = Retailer::all();
        $data['supplier'] = Supplier::find(auth()->user()->company_id);
        return view('home/purchase_coin', $data);            
    }

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
    
}
