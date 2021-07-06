<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class stats extends Model 
{
    // ชื่อ ตาราง
    protected $table   = 'stats';
    // คอลัมน์ที่ทำการแก้ไขได้
    protected $fillable = [
        'Blog_id', 'ip_address', 'countries', 'alpha_2', 'alpha_3', 'device', 'status_login',
    ];

}
