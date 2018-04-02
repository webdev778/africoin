<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class WalletController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->isAdmin())
            return view('home/admin_wallet');

        return view('home/wallet');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sendToken(Request $request)
    {    
        /*
        $result = "send token api requested: ".$request->input('to-address')." & ".$request->input('amount');
        return response()->json(array('msg'=>$result), 200);
        */
        $this->validate($request, [
            'to-address' => 'required|string',
            'amount'     => 'required|string'
        ]);
        
        $toAddr = $request->input('to-address');
        $amount = $request->input('amount');
        
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => env('TOKEN_API_URL'),
            // You can set any number of default request options.
            'timeout'  => 500.0
        ]);

        $tokenRequestParams = [
            "toAddr" => $toAddr,
            "amount" => $amount,
        ];

        $response = $client->request('POST', 'sendToken', [
            'http_errors' => false,
            'json' => $tokenRequestParams,
        ]);

        if ($response->getStatusCode() == 200) {
            $result = json_decode($response->getBody()->getContents());
            if ($result->success) {               
                return response()->json([
                    'success' => true,
                    'txHash' => $result->txHash
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Token API returns fail'
                ], 500);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'cannot reach token API server'
            ], 500);
        }
    }
}
