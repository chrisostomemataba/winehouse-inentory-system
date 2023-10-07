<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CashAccount extends Model
{
    protected $fillable = ['report_date', 'balance'];

    // Add other cash account-related attributes and relationships here
}

// Command to create CashAccount model:
// php artisan make:model CashAccount

