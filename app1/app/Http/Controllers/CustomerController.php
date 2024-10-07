<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customers(){
        return view('customers.customer');    //customer page at customer folder
    }

    public function new(){
        return view('customers.new-customer');    //new-customer page at customer folder
    }
}
