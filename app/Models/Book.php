<?php

namespace App\Models;

use App\Enums\BookStatus;
use App\Enums\BookType;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'isbn',
        'used',
        'price',
        'published',
        'status',
        'used'
    ];

    protected $casts = [
        'type' => BookType::class,
        'status' => BookStatus::class,
        'used' => 'boolean'
    ];


    public function book()
    {
        return $this->hasOne(Book::class);
    }

}
