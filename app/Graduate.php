<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graduate extends Model
{
    protected $fillable = [
        'user_id','dni','name','paternal','maternal','gender',
    ];
}
