<?php

use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;


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
Route::get('/', HomeController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboardcorrosion', function () {
    return view('dashboardcorrosion');
})->name('dashboardcorrosion');

Route::get('corrosion',[CalculatorController::class,'corrosion']);

Route::post('corrosion',[CalculatorController::class,'storecorrosion'])->name('calculators.storecorrosion');

Route::get('apirp14e',[CalculatorController::class,'apirp14e']);

Route::post('apirp14e',[CalculatorController::class,'storeapirp14e'])->name('calculators.storeapirp14e');

Route::get('apirp14eregistry',[CalculatorController::class,'apirp14eregistry']);

Route::get('apirp14eregistryone',[CalculatorController::class,'apirp14eregistryone']);

Route::get('apirp14eregistrytwo',[CalculatorController::class,'apirp14eregistrytwo']);

Route::get('apirp14eregistrythree',[CalculatorController::class,'apirp14eregistrythree']);

Route::get('dnv0501',[CalculatorController::class,'dnv0501']);

Route::post('dnv0501',[CalculatorController::class,'storednv0501'])->name('calculators.storednv0501');

Route::get('dnv0501registry',[CalculatorController::class,'dnv0501registry']);

Route::get('dnv0501registryone',[CalculatorController::class,'dnv0501registryone']);

Route::get('dnv0501registrytwo',[CalculatorController::class,'dnv0501registrytwo']);

Route::get('dnv0501registrythree',[CalculatorController::class,'dnv0501registrythree']);

Route::get('salama',[CalculatorController::class,'salama']);

Route::post('salama',[CalculatorController::class,'storesalama'])->name('calculators.storesalama');

Route::get('salamaregistry',[CalculatorController::class,'salamaregistry']);

Route::get('salamaregistryone',[CalculatorController::class,'salamaregistryone']);

Route::get('salamaandvenkatesh',[CalculatorController::class,'salamaandvenkatesh']);

Route::post('salamaandvenkatesh',[CalculatorController::class,'storesalamaandvenkatesh'])->name('calculators.storesalamaandvenkatesh');

Route::get('salamaandvenkateshregistry',[CalculatorController::class,'salamaandvenkateshregistry']);