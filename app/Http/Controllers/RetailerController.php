<?php

namespace App\Http\Controllers;

use App\Retailer;
use Illuminate\Http\Request;

class RetailerController extends Controller
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

    public function index()
    {
        $data['retailers'] = Retailer::all();
        return view('retailer.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = route('Retailers.store');
        $data['retailer'] = new Retailer;
        $data['provinces'] = [  'Gauteng',
                                'The Western Cape',
                                'KwaZulu-Natal',
                                'Mpumalanga',
                                'North West',
                                'Limpopo',
                                'The Eastern Cape',
                                'The North West',
                                'The Free State'];
        return view('retailer.edit', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $this->validate($request, [
            'company-name' => 'required|max:255',
            'street-address' => 'required',
            'street-code' => 'required',
            'province' => 'required',
            'postal-address' => 'required',
            'postal-code' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required',
            'company-registration-no' => 'required'
        ]);
        
        if($request->hasFile('company-logo') && $request->file('company-logo')->isValid()){
            $logo_path = $request->file('company-logo')->store('retailers/logo', 'public');
                       
            $retailer = Retailer::create([
                'name' => $request->input('company-name'),
                'logo_file' => $logo_path,
                'street_address' => $request->input('street-address'),
                'street_code' => $request->input('street-code'),
                'province' => $request->input('province'),
                'postal_address' => $request->input('postal-address'),
                'postal_code' => $request->input('postal-code'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'company_registration_no' => $request->input('company-registration-no')
            ]);
    
            return redirect()->route('Retailers.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Retailer  $retailer
     * @return \Illuminate\Http\Response
     */
    public function show(Retailer $retailer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Retailer  $retailer
     * @return \Illuminate\Http\Response
     */
    public function edit(Retailer $retailer)
    {
        $data['action'] = route('Retailers.update', [$retailer]);
        $data['method'] = method_field('PUT');
        $data['retailer'] = $retailer;
        $data['provinces'] = [  'Gauteng',
                                'The Western Cape',
                                'KwaZulu-Natal',
                                'Mpumalanga',
                                'North West',
                                'Limpopo',
                                'The Eastern Cape',
                                'The North West',
                                'The Free State'];        
        return view('retailer.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Retailer  $retailer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Retailer $retailer)
    {
        $this->validate($request, [
            'company-name' => 'required|max:255',
            'street-address' => 'required',
            'street-code' => 'required',
            'province' => 'required',
            'postal-address' => 'required',
            'postal-code' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required',
            'company-registration-no' => 'required'
        ]);
        
        $retailer->name = $request->input('company-name');
        $retailer->street_address = $request->input('street-address');
        $retailer->street_code = $request->input('street-code');
        $retailer->province = $request->input('province');
        $retailer->postal_address = $request->input('postal-address');
        $retailer->postal_code = $request->input('postal-code');
        $retailer->email = $request->input('email');
        $retailer->phone = $request->input('phone');
        $retailer->company_registration_no = $request->input('company-registration-no');

        if($request->hasFile('company-logo') && $request->file('company-logo')->isValid()){
            $logo_path = $request->file('company-logo')->store('retailers/logo', 'public');
            
            $retailer->logo_file = $logo_path;            
        }        

        $retailer->save();

        return redirect()->route('Retailers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Retailer  $retailer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Retailer $retailer)
    {
        //
    }
}
