<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    protected $casts = ['is_video' => 'boolean'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
