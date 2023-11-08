<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Orchid\Screen\AsSource;


class Product extends Model
{
    use HasFactory;
    use AsSource;


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
        'ed_izm',
        'factura',
        'osnova',
        'short_description',
        'color_name',
        'color_img',
        'series',
        'seo_title',
        'seo_description'
    ];

    protected $casts = [
        'advantages' => 'array',
        'props' => 'array',
    ];

    protected $with = [
        'category_tovars'
    ];

    public function scopeFilter(Builder $builder, QueryFilter $filter) {
        return $filter->apply($builder);
    }

    public function tovar_trademark()
    {
        return $this->hasOne(Trademark::class);
    }

    public function tovar_images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function effects()
    {
        return $this->hasMany(ColorEffect::class);
    }

    public function category_tovars() {
        return $this->belongsToMany(Category::class);
    }
}
