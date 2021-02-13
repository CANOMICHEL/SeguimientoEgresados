<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    protected $fillable = [
        'graduated_id','type','draft_name','description','institution','date',
    ];
}
