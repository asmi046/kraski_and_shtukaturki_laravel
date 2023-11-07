<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Orchid\Screen\AsSource;

class ProductGroupImage extends Model
{
    use HasFactory;
    use AsSource;


    public $fillable = [
        'product_group_id',
        'link',
        'alt',
        'title'
    ];

    public function product_info() {
        return $this->hasOne(ProductGroup::class, 'id', 'product_group_id');
    }
}
