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
    return "<h1> Hello world </h1>";
});

Route::get("about", function () {
    return "<h1> This is from the About </h1>";
});
Route::get("contact", function () {
    return "<h1> This is from Contact Us</h1>";
});
Route::get("newslatter", function () {
    return "<h1> This is from the news latter of the website </h1>";
});

