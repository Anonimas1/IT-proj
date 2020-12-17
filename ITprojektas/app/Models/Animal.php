<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['image_path', 'description', 'home_address', 'state', 'gender', 'name', 'age', 'post_id', 'type'];
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
    public function Type()
    {
        return $this->belongsTo(AnimalType::class, 'type');
    }
}
