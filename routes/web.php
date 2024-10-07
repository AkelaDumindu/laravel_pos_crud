<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/v1/customers', 
[CustomerController::class, 'customers'])->name('customers.customer');

Route::get('/api/v1/new-customer-form', 
[CustomerController::class, 'new'])->name('customers.new');  //any name for the name


Route::post('/api/v1/add-customer', 
[CustomerController::class, 'add'])->name('customers.add'); 

Route::get('/api/v1/customers/{customer}/modify', 
[CustomerController::class, 'modify'])->name('customers.modify'); 

Route::put('/api/v1/customers/{customer}/update', 
[CustomerController::class, 'update'])->name('customers.update'); 

Route::delete('/api/v1/customers/{customer}/delete', 
[CustomerController::class, 'delete'])->name('customers.delete'); 
