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
    $user = [
        "username" => 'rasyadmr',
        "image" => './images/rasyadmr.jpg',
    ];

    return view('home', [
        "title" => "Home",
        "user" => $user
    ]);
});

Route::get('item', function () {
    $user = [
        "username" => 'rasyadmr',
        "image" => './images/rasyadmr.jpg',
    ];

    return view('items', [
        "title" => "Items",
        "user" => $user,
        "items" => Item::all()
    ]);
});

Route::get('item/{id}', function($id) {
    $user = [
        "username" => 'rasyadmr',
        "image" => './images/rasyadmr.jpg',
    ];

    return view('item', [
        "title" => "Item Details",
        "user" => $user,
        "item" => Item::findById($id)
    ]);
});