<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lecturer extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
        'lec_name',
        'lec_mobile',
        'lec_photo'

    ];
}
