<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function Post()
    {
        return $this->belongsTo('App\Models\post');
    }
    public function Replies()
    {
        return $this->hasMany('App\Models\Reply');
    }
    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }
}
