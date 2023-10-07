<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = ['user_id', 'address', 'phone_number'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Add other user profile-related attributes and relationships here
}

// Command to create UserProfile model:
// php artisan make:model UserProfile
