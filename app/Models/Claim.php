<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
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

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($claim) {
            foreach($claim->replies as $reply) {
                foreach ($reply->attachments as $attachment) {
                    File::delete(public_path('storage/'.$attachment));
                }
            }
        });
    }
}
