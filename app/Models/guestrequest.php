<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guestrequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'date',
        'start_time',
        'end_time',
        'hall_name',
        'faculty',
        'department',
        'reason',
        'guest_id',
        'read_at'
    ];
}
