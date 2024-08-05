<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Orchid\Screen\AsSource;

class Blog extends Model
{
    use HasFactory;
    use AsSource;

    protected $fillable = [
        'title',
        'slug',
        'text',
        'img',

        'seo_title',
        'seo_description'
    ];
}
