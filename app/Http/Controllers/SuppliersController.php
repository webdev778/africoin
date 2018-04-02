<?php

namespace App\Http\Controllers;

use App\Supplier;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Log;

class SuppliersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        $data['suppliers'] = Supplier::all();
        return view('supplier.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('supplier.edit_login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'company-name' => 'required|max:255',
        //     'street-address' => 'required',
        //     'street-code' => 'required',
        //     'province' => 'required',
        //     'postal-address' => 'required',
        //     'postal-code' => 'required',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'phone' => 'required',
        //     'company-registration-no' => 'required'
        // ]);
        
        // if($request->hasFile('company-logo') && $request->file('company-logo')->isValid()){
        //     $logo_path = $request->file('company-logo')->store('retailers/logo', 'public');
                       
        //     $retailer = Retailer::create([
        //         'name' => $request->input('company-name'),
        //         'logo_file' => $logo_path,
        //         'street_address' => $request->input('street-address'),
        //         'street_code' => $request->input('street-code'),
        //         'province' => $request->input('province'),
        //         'postal_address' => $request->input('postal-address'),
        //         'postal_code' => $request->input('postal-code'),
        //         'email' => $request->input('email'),
        //         'phone' => $request->input('phone'),
        //         'company_registration_no' => $request->input('company-registration-no')
        //     ]);
    
        //     return redirect()->route('Retailers.index');
        // }    
        
        $supplier = Supplier::create($request->all());
        Log::info($supplier->id);
        Log::info('-----------------Supplier Test1---------------------------------');
        $user = auth()->user();
        Log::info($user);
        Log::info('-----------------Supplier Test2---------------------------------');
        $user->company_id = $supplier->id;
        $user->save();

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
    
}
