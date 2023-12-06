<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
        'first_name',
        'last_name',
        'email',
        'mobile',
        'photo',
        'program_Id',
        'semester',
        'level',
        'subject1',
        'subject2',
        'subject3',
        'subject4',
        'subject5',
        'subject6',
        'subject7',
        'subject8'

    ];
}
