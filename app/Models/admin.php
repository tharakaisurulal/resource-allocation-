<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
        'admin_name'

    ];
}
function messages()
{
    return $this->hasMany(Message::class);
}