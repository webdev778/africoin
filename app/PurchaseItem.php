<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseItem extends Model
{
    //
    protected $fillable = ['purchase_coin_id', 'product_id', 'quantity', 
                            'discount'];    
    
    public $timestamps = false;
}
