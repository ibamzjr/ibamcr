<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product'; // Nama tabel dalam database

    protected $fillable = [
        'category_id', 'name_product', 'price', 'image_product',
    ];

    // Relasi many-to-one dengan Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}

