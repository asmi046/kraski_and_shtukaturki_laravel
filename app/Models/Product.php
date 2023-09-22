<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function tovar_trademark()
    {
        return $this->hasMany(Trademark::class);
    }

    public function category_tovars() {
        return $this->belongsToMany(Product::class);
    }
}
