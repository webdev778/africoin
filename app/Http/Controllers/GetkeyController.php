<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Auth;

;

class GetkeyController extends Controller
{
    //
    public function getkey(){

        $addr = auth()->user()->eth_addr;
        $prev = auth()->user()->eth_prev;
        $keystorage = auth()->user()->eth_keystorage;
        $secretSeed = auth()->user()->eth_secretseed;
        // echo ($addr);
        return Response()->json(['addr'=>$addr, 'prev'=>$prev, 'keystorage'=>$keystorage, 'secretSeed'=>$secretSeed]);
    }
}
