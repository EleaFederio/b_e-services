<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'birth_date',
        'email',
        'phone_number',
        'gender',
        'nationality',
        'birth_place',
        'occupation',
        'monthly_income'
    ];

}
