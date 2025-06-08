<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $guarded = [];

    protected $casts = [
        'departure_date' => 'date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function request()
    {
        return $this->belongsTo(Request::class);
    }
}
