<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::get('csrf-token', function(Request $request){
    echo csrf_token();
    echo "<br>";
    echo $request->session()->token();
});

Route::view('bypass-csrf', 'bypass-csrf');
Route::post('bypass-csrf', function(Request $request){
    echo "CSRF protection by-passed";
});

Route::view('x-csrf', 'x-csrf');
Route::post('x-csrf', function(Request $request){
    print_r($request->all());
    exit;
});

Route::view('verify-tokens', 'verify-tokens');
Route::post('verify-tokens', function(Request $request){
    echo "Tokens Match";
})->middleware('verify.tokens');
