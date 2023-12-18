<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hallmaintraines extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_name',
        'hall',
       'chair',
        'a_c',
        'fan',
        'projector',
        'sound',
        'light',
        'other',
        'add_comment',
    ];
}
