<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blotter extends Model
{
    use HasFactory;

    public function compliant(){
        return $this->belongsToMany(Resident::class, 'residents', 'id', 'id');
    }

    public function complianed(){
        return $this->belongsToMany(Resident::class, 'residents', 'id', 'id');
    }
}
