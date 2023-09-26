<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timetable extends Model
{
    use HasFactory;
    protected $fillable = [
        'program_id',
        'level',
        'day',
        'course_id',
        'start_time',
        'end_time',
        'lec_id',
        'lab_id',
        'lh_id',
        'semester'

    ];
}
