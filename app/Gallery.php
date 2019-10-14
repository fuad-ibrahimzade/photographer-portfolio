<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    public function before_afters()
    {
    	return $this->hasMany('App\BeforeAfter');
    }
}
