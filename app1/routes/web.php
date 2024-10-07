<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/v1/customers', 
[CustomerController::class, 'customers'])->name('customers.customer ');

Route::get('/api/v1/new-customer-form', 
[CustomerController::class, 'new'])->name('customers.new');  //any name for the name