<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password'];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function userProfile()
    {
        return $this->hasOne(UserProfile::class);
    }

    // Add other user-related attributes and relationships here
}

// Command to create User model:
// php artisan make:model User
