<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static whereIn(string $string, array|string|null $input)
 * @method static whereNotIn(string $string, array $array)
 * @method static find($id)
 */
class personalTraining extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function times()
    {
        return $this->belongsToMany('App\Time');
    }
    public function reviews()
    {
        return $this->belongsToMany('App\Review');
    }
}
