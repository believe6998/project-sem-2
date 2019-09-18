<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static whereIn(string $string, array|string|null $input)
 * @method static whereNotIn(string $string, array $array)
 */
class personalTraining extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
