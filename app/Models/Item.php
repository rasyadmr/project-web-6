<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // protected $fillable = [ // Mass assignment (insert data with registered columns)
    //     "name",
    //     "slug",
    //     "price",
    //     "description"
    // ];

    protected $guarded = [ // Mass assignment (insert data except registered columns)
        'id'
    ];

    protected $with = [ // N+1 Problem Solved
        'user',
        'category'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
