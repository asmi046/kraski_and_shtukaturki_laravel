<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;

use Orchid\Filters\Types\Like;

use Illuminate\Support\Str;

class ProductGroup extends Model
{
    use HasFactory;
    use AsSource;
    use Filterable;

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

    protected $allowedSorts = [
        'id',
        'sku',
        'title',
        'tm',
        'created_at'
    ];

    protected $allowedFilters  = [
        'title' => Like::class
    ];


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

    public function effects() {
        return $this->belongsToMany(ColorEffect::class);
    }

    public function setSlugAttribute($value)
    {
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->name);
        else
            $this->attributes['slug'] =  $value;
    }
}
