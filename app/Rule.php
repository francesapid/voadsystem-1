<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = [
        'address', 'street', 'speed_limit', 'location'
    ];
}
