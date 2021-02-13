<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'graduated_id','type','event_name','condition','description','institution','start_date','end_date',
    ];
}
