<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseCoin extends Model
{
    //
    protected $fillable = ['retailer_id', 'supplier_id', 'items_count', 
                            'buy_token', 'fee', 'billedTotal'];      
    
    public function retailer()
    {
        return $this->belongsTo('App\Retailer');
    }                               

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }                               
}
