<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trademark extends Model
{
    use HasFactory;

    protected $fillable = [
        "parentid",
        "name",
        "slug",
        'description',
        'title_seo',
        'description_seo'
    ];

    public function trademark_tovars() {
        return $this->hasMany(Product::class);
    }
}
