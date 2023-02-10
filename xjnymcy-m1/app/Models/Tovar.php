<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tovar extends Model
{
    public function baskets(){
        return $this->belongsToMany(Basket::class)->withPivot('quantity');
    }
}
