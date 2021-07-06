<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class users extends Model
{
    // ชื่อ ตาราง
    protected $table   = 'users';
    // คอลัมน์ที่ทำการแก้ไขได้
    protected $fillable = [
        'users_name',
        'users_username',
        'users_password',
        'users_email',
        'users_address',
        'users_img',
        'users_type',
        'users_token',
        'users_status',
    ];


    protected $hidden = [
        'users_password',
    ];
}
