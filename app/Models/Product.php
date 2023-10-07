<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'barcode', 'quantity', 'price'];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function barcodes()
    {
        return $this->hasMany(Barcode::class);
    }

    // Add other product-related attributes and relationships here
}

// Command to create Product model:
// php artisan make:model Product
