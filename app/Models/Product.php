<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'sku', 'description'
    ];

    public function productImage()
    {
        return $this->hasMany('App\Models\ProductImage');
    }

    public function productVariant()
    {
        return $this->hasMany('App\Models\ProductVariant');
    }

    public function variants()
    {
        return $this->belongsToMany('App\Models\Variant', 'product_categories', 'product_id', 'category_id');
    }



}
