<?php

namespace App\Models;

use Illuminate\Support\Str;
use Orchid\Screen\AsSource;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    use AsSource;

    protected $fillable = [
        "title",
        "description",
        "galery",
        "params",
        "slug",
        "img",
        "img1",
        "img2",
        "img3",
        "img4",
        "img5",
        "img6",
        "img7",
        "img8",
        "img9"
    ];

    protected $casts = [
        'galery' => 'array',
        'params' => 'array',
    ];


    public function setSlugAttribute($value)
    {
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->title);
        else
            $this->attributes['slug'] =  $value;
    }
}
