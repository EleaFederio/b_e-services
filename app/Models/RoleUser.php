<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasFactory;

    function roles(){
        return $this->belongsTo(Role::class, 'role_id');
    }

    function  users(){
        return $this->belongsTo(User::class,  'user_id');
    }
}
