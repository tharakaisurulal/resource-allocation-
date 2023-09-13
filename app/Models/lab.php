<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lab extends Model
{
    use HasFactory;
    protected $fillable = [
        'lab_name',
        'lab_capacity',
        'lab_air_conditioner'
    ];
}
