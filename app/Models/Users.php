<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'kode_users',
        'nama_lengkap',
        'username',
        'password',
        'phone',
        'address',
        'school',
        'stage',
        'role'
    ];
}
