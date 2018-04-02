<?php

namespace App\Http\Controllers;

use App\User;
use App\VerifyUser;
use App\Mail\VerifyMail;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Log;

class RetailerMemberController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }    
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        Log::info('-----------------Register validator---------------------');
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'select2_retailer' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        Log::info('-----------------Register validator1---------------------');
        // $referred_by = $data['referred_by'];
        
        $current = auth()->user();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            // 'affiliate_id' => $data['affiliate_id'],
            // 'referred_by' => $data['referred_by'],
            'eth_addr' => $data['addr'],
            'eth_prev' => $data['prev_key'],
            'eth_keystorage' => $data['keystorage'],
            'eth_secretseed' => $data['secretSeed'],
            'user_type' => 'Retailer',
            'company_id' => $data['select2_retailer']
        ]);
 
        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);
 
        Mail::to($user->email)->send(new VerifyMail($user));
 
        return $current;
    } 
}
