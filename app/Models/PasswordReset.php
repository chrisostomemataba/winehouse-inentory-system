<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $fillable = ['email', 'token'];

    // Define timestamps for token expiration logic
    public $timestamps = true;

    // Add other attributes and relationships here
}
