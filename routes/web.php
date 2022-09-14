<?php

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

Route::get('/', function () {
    $saluto = 'Hello world';
    return view('greeting.home', compact('saluto'));
});

Route::get('/phone', function () {
    $numbers = [
        '132153153',
        '156951611',
        '745123131',
    ];
    return view('phone.home', compact('numbers'));
})->name('phone');
