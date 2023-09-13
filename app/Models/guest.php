<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guest extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
        'guest_name',
        'guest_faculty',
        'guest_department',
        'guest_position',
        'mobile',
        'photo'

    ];
}
