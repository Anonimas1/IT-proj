<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =['view_count', 'user_id', 'animal_id'];
    public function Animal()
    {
        return $this->hasOne('App\Models\Animal');
    }
    public function Comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }
}
