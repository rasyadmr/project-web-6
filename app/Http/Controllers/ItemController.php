<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        return view('items', [
            "title" => "All Items",
            "items" => Item::with(['user', 'category'])->get() // N+1 problem solved
        ]);
    }

    public function show(Item $item) {
        return view('item', [
            "title" => "Item Details",
            "item" => $item
        ]);
    }
}
