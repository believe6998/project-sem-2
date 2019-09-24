<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static whereNotIn(string $string, array $array)
 * @method static paginate(int $int)
 * @method static find($id)
 * @property mixed time
 */
class Time extends Model
{
    public function personal_trainings()
    {
        return $this->belongsToMany('App\PersonalTraining');
    }
}
