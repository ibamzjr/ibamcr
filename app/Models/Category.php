<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories'; // Nama tabel dalam database

    protected $fillable = [
        'name_categories', 'image_categories',
    ];

    // Relasi one-to-many dengan Product
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}

