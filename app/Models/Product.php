<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'sku',
        'title',
        'slug',
        'img',
        'description',
        'price',
        'old_price',
        'sales_count',
        'hit',
        'new',
        'volume',
        'short_description',
        'seo_title',
        'seo_description'
    ];

    protected $casts = [
        'advantages' => 'array',
        'props' => 'array',
    ];


    public function tovar_trademark()
    {
        return $this->hasMany(Trademark::class);
    }

    public function category_tovars() {
        return $this->belongsToMany(Product::class);
    }
}
