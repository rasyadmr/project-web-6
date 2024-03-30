<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        return view('items', [
            "title" => "Items",
            "items" => Item::all()
        ]);
    }

    public function show($id) {
        return view('item', [
            "title" => "Item Details",
            "item" => Item::findById($id)
        ]);
    }
}
