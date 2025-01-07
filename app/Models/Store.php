<?php

namespace App\Models;

use App\Enums\StoreType;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['dir', 'sale', 'type'];

    protected $casts = [
        'type' => StoreType::class
    ];


    public function stock()
    {
        return $this->hasOne(Stock::class);
    }


}
