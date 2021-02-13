<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'graduated_id','institution','activity_name','position','institution_type','institution_heading','description','start_date','end_date'
    ];
}
