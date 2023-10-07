<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['user_id', 'key', 'value'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Add other attributes and relationships here
}
