<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalGender extends Model
{
    public function Animals()
    {
        return $this->hasMany('App\Models\Animal', 'gender', 'id');
    }
}
