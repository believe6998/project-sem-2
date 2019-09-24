<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function personal_training()
    {
        return $this->belongsTo('App\PersonalTraining');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
