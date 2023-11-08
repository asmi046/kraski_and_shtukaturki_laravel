<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

use Orchid\Screen\AsSource;

class ColorEffect extends Model
{
    use HasFactory;
    use AsSource;

    protected $fillable = [
        'name',
        'order',
        'slug',
        'img',
        'description',
        'seo_title',
        'seo_description',
    ];

    public function ce_tovars() {
        return $this->belongsToMany(ProductGroup::class);
    }

    public function setSlugAttribute($value)
    {
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->name);
        else
            $this->attributes['slug'] =  $value;
    }

}
