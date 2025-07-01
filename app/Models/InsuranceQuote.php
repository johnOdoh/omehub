<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsuranceQuote extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function request()
    {
        return $this->belongsTo(Request::class);
    }
}
