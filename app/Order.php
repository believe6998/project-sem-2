<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static whereNotIn(string $string, array $array)
 * @method static find(int $id)
 */
class Order extends Model
{

    public function duration()
    {
        return $this->belongsTo('App\Duration');
    }
}
