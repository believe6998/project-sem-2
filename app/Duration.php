<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static whereNotIn(string $string, array $array)
 * @method static paginate(int $int)
 * @method static find($id)
 * @method static whereIn(string $string, array|string|null $input)
 */
class Duration extends Model
{
    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
}
