<?php

namespace App\Models;

class _Item
{
    private static $items = [
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

    public static function all() {
        return collect(self::$items);
    }

    public static function findById($id) {
        return static::all()->firstWhere('id', $id);
    }
}
