<?php

use App\Models\Item;
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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/dev', function() {
    return view('main', [
        "title" => "Main"
    ]);
});

Route::get('/login', function() {
    return view('login', [
        "title" => "Login"
    ]);
});

Route::get('/register', function() {
    return view('register', [
        "title" =>  "Register"
    ]);
});

Route::get('/home', function() {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('item', function () {
    return view('items', [
        "items" => Item::all()
    ]);
});

Route::get('item/{id}', function($id) {
    // $user = [
    //     "username" => 'rasyadmr',
    //     "image" => './images/rasyadmr.jpg',
    // ];

    return view('item', [
        "title" => "Item Details",
        "item" => Item::findById($id)
    ]);
});