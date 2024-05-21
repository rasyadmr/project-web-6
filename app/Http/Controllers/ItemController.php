<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        return view('item.list', [
            "title" => "All Items",
            "items" => Item::get() // N+1 problem solved
        ]);
    }

    public function show(Item $item) {
        return view('item.detail', [
            "title" => "Item Details",
            "item" => $item
        ]);
    }
}
