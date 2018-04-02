<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'affiliate_id', 'referred_by', 'eth_addr', 'eth_prev', 'eth_keystorage', 'eth_secretseed','user_type',
        'company_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }

    public function isAdmin()
    {
        return $this->is_admin;
    }

    public function isCompanyRegistered()
    {
        return !is_null($this->company_id);
    }    
}
