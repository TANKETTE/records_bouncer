<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
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
        if (! Gate::allows('customers_manage')) {
            return abort(401);
        }

        $customers = Customer::all();

        return view('customers.index', compact('customers'));
    }

    public function search()
    {
        return view('customers.search');
    }

    public function results()
    {
        return view('customers.results');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        if (! Gate::allows('customers_manage')) {
        return abort(401);
        }

        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('customers_manage')) {
            return abort(401);
        }

        $this->validate($request, [
            'name' => 'required',
            'phone1' => 'required',
            ]);
         //create customer

         $customer = new Customer;
         $customer->ic = $request->input('ic');
         $customer->name = $request->input('name');
         $customer->phone1 = $request->input('phone1');
         $customer->phone2 = $request->input('phone2');
         $customer->phone3 = $request->input('phone3');
         $customer->save();

         return redirect()->route('customers.show', $customer->id);
   
        //$customer=  new Customer;
        //Customer::create($request->all());
        //return redirect()->route('customers.show', $customer->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customers.show')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('customers_manage')) {
            return abort(401);
        }
        $customer = Customer::findOrFail($id);

        return view('customers.edit', compact('customer'));
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
        if (! Gate::allows('customers_manage')) {
            return abort(401);
        }
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());

        return redirect()->route('customers.show', $customer->id);
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