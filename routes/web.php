<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::prefix('/Hotel-Management')->group(function(){
    Route::view('/Dashboard','HotelManagement.dashboard');
   
    Route::resource('employees',EmployeeController::class);
    Route::resource('customers',CustomerController::class);
});