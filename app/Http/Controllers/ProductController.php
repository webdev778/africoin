<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Log;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        
    }

    public function getProductInfoByBarcode(Request $request)
    {
        $this->validate($request, [
            'barcode' => 'required|string',
        ]);

        $barcode = $request['barcode'];
        $product = Product::where('barcode', $barcode)->first();
        return $product->toJson();
    }

    // get product information of retailer
    public function getProductListByRetailer()
    {
        /*
            select products.*, sum(quantity), sum(discount) from
            purchase_coins, purchase_items, products
            where
            purchase_coins.id = purchase_items.purchase_coin_id and
            purchase_items.product_id = products.id and
            retailer_id = 8
            group by products.id
        */
        $retailer_id = auth()->user()->company_id;
        if($retailer_id){
            $data['products'] = DB::table('purchase_coins')
                                ->join('purchase_items', 'purchase_coins.id', '=', 'purchase_items.purchase_coin_id')
                                ->join('products', 'purchase_items.product_id', '=', 'products.id')
                                ->select(DB::raw('products.*, sum(quantity) as quantity, sum(discount) as discount'))
                                ->where('retailer_id', $retailer_id)
                                ->groupBy('products.id')                                
                                ->get();
            Log::info($data['products']);

            return view('product.retailer')->with($data);
        }
    }
}
