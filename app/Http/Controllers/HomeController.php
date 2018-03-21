<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
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

        if(auth()->user()->user_type == "Admin")
        {
            $addr = auth()->user()->eth_addr;
            $prev = auth()->user()->eth_prev;
            $keystorage = auth()->user()->eth_keystorage;
            $secretSeed = auth()->user()->eth_secretseed;

            return view('home/admin_dashboard', ['addr' => $addr, 'prev' => $prev, 'keystorage' => $keystorage, 'secretSeed' => $secretSeed]);
        }
        
        if (auth()->user()->user_type == "Supplier")
        {
            
            return view('home/supplier_dashboard');        
        }
        

        return view('home/retailer_dashboard');        
    }
}
