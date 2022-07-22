<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\JobTariffController;
use App\Http\Controllers\MaterialPropertyValueController;
use App\Http\Controllers\MaterialPropertyController;
use App\Http\Controllers\WorkerController;


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

Route::get('/', function () {
    return view('index', ['data' => 'Index']);
});

Route::get('/currency/{currency}', [CurrencyController::class, 'show']);
Route::get('/currency', [CurrencyController::class, 'index']);
Route::get('/jobtariff/{jobtariff}', [JobtariffController::class, 'show']);
Route::get('/jobtariff', [JobtariffController::class, 'index']);
Route::get('/materials', [MaterialPropertyValueController::class, 'index']);


Route::get('/materialproperties', [MaterialPropertyController::class, 'index']);
Route::get('/materialproperties/{id}', [MaterialPropertyController::class, 'show']);

Route::get('/workers', [WorkerController::class, 'index']);


