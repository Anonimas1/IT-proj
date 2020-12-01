<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function Post()
    {
        return $this->hasOne('App\Models\Post');
    }
    public function State()
    {
        return $this->belongsTo(AnimalState::class, 'state');
    }
    public function Gender()
    {
        return $this->belongsTo(AnimalGender::class, 'gender');
    }
}
