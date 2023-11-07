<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Orchid\Screen\AsSource;

class ProductGroupPrice extends Model
{
    use HasFactory;
    use AsSource;


    public $fillable = [
        'product_group_id',
        'ed_izm',
        'volume',
        'price',
        'old_price'
    ];

    public function product_info() {
        return $this->hasOne(ProductGroup::class, 'id', 'product_group_id');
    }
}


