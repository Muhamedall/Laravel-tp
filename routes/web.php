<?php
/*
|--------------------------------------------------------------------------
| Web Routes

|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\AfficheForm;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\Avioncontrol;
use App\Http\Controllers\FormAvionsController;
use App\Http\Controllers\HomeControl;
use App\Http\Controllers\VolController;
use App\Models\Airport;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeControl::class,'index']);
Route::get('/airports', [AirportController::class,'index']);
Route::get('/airports/{id}', [AirportController::class, 'show'])
    ->where('id', '\d+') 
    ->name('airports.show');

Route::get('/formulair',[AfficheForm::class,'index'])->name('formulair.index');
Route::get('/voles/{id}', [VolController::class,'show'])
    ->where('id','\d+')
    ->name('voles.show');


Route::get('/voles',[VolController::class ,'index'])->name('voles.index');
Route::post('/insertAvion',[FormAvionsController::class,'create']);
Route::get('/avions' ,[Avioncontrol::class ,'index']);
Route::delete('/avions/{id}', [FormAvionsController::class, 'delete'])->name('avions.delete');
Route::get('/voles/{id}', function($id){
    return Airport::findById($id)->volsDepart();
});