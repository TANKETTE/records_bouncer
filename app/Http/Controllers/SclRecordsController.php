<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SclRecord;
use App\Customer;

class SclRecordsController extends Controller
{
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
        
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($customer_id)
    {   
        
        return view('sclrecords.create')->with('customer_id', $customer_id);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        SclRecord::create($data);
        $customer_id = $request->input('customer_id');
        return redirect()->route('customers.show', $customer_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sclrecord = Sclrecord::find($id);
        return view('sclrecords.show', compact('sclrecord'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sclrecord = SclRecord::findOrFail($id);
        return view('sclrecords.edit', compact('sclrecord'));
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
        $sclrecord = SclRecord::findOrFail($id);
        $sclrecord->update($request->all());

        return redirect()->route('sclrecords.show', $sclrecord->id);
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
}
