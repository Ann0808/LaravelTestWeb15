<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';
    protected $fillable = [
        'id', 'identity', 'brand', 'model', 'year', 'color', 'price'
        ];
}
