<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lecturehall extends Model
{
    use HasFactory;
    protected $fillable = [
        'lh_name',
        'lh_capacity',
        'lh_air_conditioner'
    ];
}
