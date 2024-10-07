<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function customers(){
        $customerList = Customer::all();
        return view('customers.customer', ['customers'=>$customerList]);    //customer page at customer folder
    }

    public function new(){
        return view('customers.new-customer');    //new-customer page at customer folder
    }

    public function add(Request $request){
        $customer = $request->validate([
           'name'=>'required',
           'address'=>'required', 
           'designation'=>'required', 
           'age'=>'required',  
        ]);

        $savedData = Customer::create($customer);
        return redirect(route('customers.customer'));
         
    }

    public function modify(Customer $customer){
        return view('customers.modify', ['customer'=>$customer]);    //customer page at customer folder
    }

    public function update(Customer $customer, Request $request){
        $createdCustomer = $request->validate([
           'name'=>'required',
           'address'=>'required', 
           'designation'=>'required', 
           'age'=>'required',  
        ]);

        $customer->update($createdCustomer);
        return redirect(route('customers.customer'));
         
    }
}
