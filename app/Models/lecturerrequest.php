<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lecturerrequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'date',
        'start_time',
        'end_time',
        'hall_name',
        'reason',
        'read_at',
        'lecturer_id'
    ];
}
