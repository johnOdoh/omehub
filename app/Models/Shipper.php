<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    protected $guarded = [];
    protected $casts = [
        'is_verified' => 'boolean',
        'document' => 'array'
    ];
}
