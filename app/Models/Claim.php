<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $guarded = [];
    protected $casts = [
        'attachments' => 'array',
        'is_open' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function defendant()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(ClaimReply::class);
    }
}
