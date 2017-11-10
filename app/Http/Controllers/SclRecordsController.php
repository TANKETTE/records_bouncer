<?php

namespace App\Http\Controllers;

use App\SclRecord;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

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
        if (! Gate::allows('records_manage')) {
            return back();}

        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($customer_id)
    {   
        if (! Gate::allows('records_manage')) {
            return back();}

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
        if (! Gate::allows('records_manage')) {
            return back();}
            
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
        if (! Gate::allows('view_records_manage')) {
            return back();}

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
        if (! Gate::allows('records_manage')) {
            return back();}

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
        if (! Gate::allows('records_manage')) {
            return back();}

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
