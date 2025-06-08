<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_closed' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
}
