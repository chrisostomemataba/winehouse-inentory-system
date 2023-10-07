<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BalanceSheet extends Model
{
    protected $fillable = ['report_date', 'assets', 'liabilities'];

    // Define other balance sheet-related attributes and relationships here
}
