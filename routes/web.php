<?php

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

Route::get('test/', function () {

    $buyer = \App\Buyer::where('id', 1)->get()->first();

    $transaction =$buyer->transactions;

    echo '<pre>';
    print_r(count($transaction));
    echo '</pre>';
});

