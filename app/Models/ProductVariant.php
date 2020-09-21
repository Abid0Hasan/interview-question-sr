<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{

    protected $table = 'product_variants';

    /**
     * @var array
     */
    protected $fillable = ['variant', 'variant_id', 'product_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function variantsPrice()
    {
        return $this->belongsToMany('App\Models\ProductVariantPrice');
    }

}
