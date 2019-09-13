<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(int $int)
 * @method static find(int $id)
 */
class Category extends Model
{
    public function personal_trainings()
    {
        return $this->belongsToMany('App\PersonalTraining');
    }
}
