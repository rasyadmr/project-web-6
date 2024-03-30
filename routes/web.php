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
    
    $items = [
        [
            "id" => "ITEM10001",
            "name" => "Item One",
            "price" => 9.99,
            "description" => "This is item one."
        ],
        [
            "id" => "ITEM10002",
            "name" => "Item Two",
            "price" => 49.99,
            "description" => "This is item two."
        ],
        [
            "id" => "ITEM10003",
            "name" => "Item Three",
            "price" => 19.99,
            "description" => "This is item three."
        ],
        [
            "id" => "ITEM10004",
            "name" => "Item Four",
            "price" => 69.98,
            "description" => "This is item four."
        ]
    ];

    return view('items', [
        "title" => "Items",
        "user" => $user,
        "items" => $items
    ]);
});

Route::get('item/{id}', function($id) {
    $user = [
        "username" => 'rasyadmr',
        "image" => './images/rasyadmr.jpg',
    ];

    $items = [
        [
            "id" => "ITEM10001",
            "name" => "Item One",
            "price" => 9.99,
            "description" => "This is item one."
        ],
        [
            "id" => "ITEM10002",
            "name" => "Item Two",
            "price" => 49.99,
            "description" => "This is item two."
        ],
        [
            "id" => "ITEM10003",
            "name" => "Item Three",
            "price" => 19.99,
            "description" => "This is item three."
        ],
        [
            "id" => "ITEM10004",
            "name" => "Item Four",
            "price" => 69.98,
            "description" => "This is item four."
        ]
    ];

    $temp = [];

    foreach ($items as $item) {
        if($item['id'] === $id) {
            $temp = $item;
            break;
        }
    }

    return view('item', [
        "title" => "Item Details",
        "user" => $user,
        "item" => $temp
    ]);
});