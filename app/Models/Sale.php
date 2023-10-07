<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['product_id', 'user_id', 'quantity', 'total_amount'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Add other sale-related attributes and relationships here
}

// Command to create Sale model:
// php artisan make:model Sale
