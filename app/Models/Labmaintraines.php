<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labmaintraines extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_name',
        'lab',
        'lap/pc',
        'a_c',
        'fan',
        'projector',
        'sound',
        'light',
        'other',
        'add_comment',
    ];
}
