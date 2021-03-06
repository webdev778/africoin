<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'name', 
                            'logo_file', 
                            'street_address', 
                            'street_code', 
                            'province', 
                            'postal_address', 
                            'postal_code', 
                            'email',
                            'phone',
                            'company_registration_no'];
    
    /**
    * Indicates if the model should be timestamped.
    *
    * @var bool
    */
    public $timestamps = true;
}
