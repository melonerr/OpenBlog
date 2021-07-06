<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class loginlogs extends Model
{
    // ชื่อ ตาราง
    protected $table   = 'loginlogs';
    // คอลัมน์ที่ทำการแก้ไขได้
    protected $fillable = [
        'user_id', 'user_name', 'login_ip_address', 'login_device', 'login_status', 'login_date',
    ];
}
