<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['report_date'];

    // Add other report-related attributes and relationships here
}

// Command to create Report model:
// php artisan make:model Report
