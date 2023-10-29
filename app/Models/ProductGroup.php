<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGroup extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'sku',
        'title',
        'slug',
        'img',
        'description',
        'advantages',
        'props',
        "popular",
        'short_description',
        'tm',
        'seo_title',
        'seo_description',
    ];

    protected $casts = [
        'advantages' => 'array',
        'props' => 'array',
    ];

    protected $with = ['tovar_prices'];

    public function scopeFilter(Builder $builder, QueryFilter $filter) {
        return $filter->apply($builder);
    }

    public function tovar_trademark()
    {
        return $this->hasOne(Trademark::class ,"name", "tm");
    }

    public function tovar_prices()
    {
        return $this->hasMany(ProductGroupPrice::class)->orderBy('volume');
    }

    public function tovar_images()
    {
        return $this->hasMany(ProductGroupImage::class);
    }

    public function category_tovars() {
        return $this->belongsToMany(Category::class);
    }
}
