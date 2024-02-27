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

use App\Http\Controllers\AirportController;
use App\Models\Airport;
use Illuminate\Support\Facades\Route;


Route::get('/', [AirportController::class,'index']);

Route::get('/vol/{id}', function($id){
    return Airport::findById($id)->volsDepart();
});