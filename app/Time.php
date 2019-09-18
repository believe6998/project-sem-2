<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    public function personal_trainings()
    {
        return $this->belongsToMany('App\PersonalTraining');
    }
}
