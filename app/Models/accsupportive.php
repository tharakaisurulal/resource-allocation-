<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accsupportive extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
        'acc_name',
        'acc_mobile',
        'photo'

    ];
}
