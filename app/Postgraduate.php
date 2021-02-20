<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postgraduate extends Model
{
    protected $fillable = [
        'graduated_id','type','activity_name','description','institution','document','start_date','end_date',
    ];
}
