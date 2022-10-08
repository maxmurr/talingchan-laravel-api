<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('customers', App\Http\Controllers\Api\CustomerController::class);
Route::apiResource('invoices', App\Http\Controllers\Api\InvoiceController::class);
Route::apiResource('invoicedetail', App\Http\Controllers\Api\InvoiceDetailController::class);
Route::apiResource('employees', App\Http\Controllers\Api\EmployeeController::class);
Route::apiResource('products', App\Http\Controllers\Api\ProductController::class);
Route::apiResource('units', App\Http\Controllers\Api\UnitController::class);
Route::apiResource('lots', App\Http\Controllers\Api\LotController::class);