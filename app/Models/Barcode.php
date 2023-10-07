<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barcode extends Model
{
    protected $fillable = ['product_id', 'code'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Add other barcode-related attributes and relationships here
}

// Command to create Barcode model:
// php artisan make:model Barcode
