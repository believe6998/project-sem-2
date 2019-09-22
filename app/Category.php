<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(int $int)
 * @method static find(int $id)
 * @method static whereIn(string $string, array|string|null $input)
 * @method static whereNotIn(string $string, array $array)
 */
class Category extends Model
{
    public function personal_trainings()
    {
        return $this->belongsToMany('App\PersonalTraining');
    }
}
