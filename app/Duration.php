<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duration extends Model
{
    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
}
