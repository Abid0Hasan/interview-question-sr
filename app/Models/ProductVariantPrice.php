<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariantPrice extends Model
{

    public function productVariants()
    {
        return $this->belongsToMany('App\Models\ProductVariant');
    }
}
