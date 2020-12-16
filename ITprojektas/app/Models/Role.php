<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    public function Users()
    {
        return $this->hasMany(User::class);
    }
    public function Permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}