<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function certificate()
    {
        return $this->belongsTo('App\Certificate');
    }
}
