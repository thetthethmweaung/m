<?php
use App\Nat;
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



Route::get ( '/', function () {
    $nationality = Nat::all ();
    return view ('registerForm')->withData ( $nationality );
} );

Route::resource('mmCn','mmCtr');
Route::apiResource('mmCn','mmCtr');


