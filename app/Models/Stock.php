<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'amount',
        'book',
        'store',
    ];


    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
