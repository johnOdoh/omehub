<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClaimReply extends Model
{
    protected $guarded = [];
    protected $casts = [
        'attachments' => 'array'
    ];

    public function claim()
    {
        return $this->belongsTo(Claim::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
