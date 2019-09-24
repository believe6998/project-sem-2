<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public function duration()
    {
        return $this->belongsTo('App\Duration');
    }
    public function product()
    {
        return $this->belongsTo('App\PersonalTraining', 'personal_training_id')->attributes['product'];
    }
    protected $appends = ['product'];
    public function getProductAttribute(){
        $product = PersonalTraining::find($this->personal_training_id);
        return $product;
    }
    public function getTotalUnitAttribute(){
        $total_unit = $this->personal_training_time_id * PersonalTraining::find($this->personal_training_id)->discountPrice;
        return sprintf('%s', number_format($total_unit, 0));
    }
}
