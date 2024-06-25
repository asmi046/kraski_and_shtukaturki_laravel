<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Orchid\Screen\AsSource;

class Project extends Model
{
    use HasFactory;
    use AsSource;

    protected $fillable = [
        "title",
        "description",
        "galery",
        "params",
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
}
