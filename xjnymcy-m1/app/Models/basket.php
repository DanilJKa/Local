<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basket extends Model
{
    public function tovar(){
        return $this->belongsToMany(Tovar::class)->withPivot('quantity');
    }
}
