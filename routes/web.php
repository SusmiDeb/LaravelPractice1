<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;

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

Route::get('/', function () {
    return view('login');
});
Route::get("log",[users::class,"logcontroller"]);

Route::get("create",[users::class,"create"]);
Route::post("loginsubmit",[users::class,"logsubmit"]);
Route::post("createsubmit",[users::class,"createeSubmit"]);

//group middleware for session check
Route::group(['middleware'=>['Logcheck']],function(){
   Route::get("user",[users::class,"list"]);
   
});