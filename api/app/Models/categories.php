<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    // ชื่อ ตาราง
    protected $table   = 'categories';
    // คอลัมน์ที่ทำการแก้ไขได้
    protected $fillable = [
        'categories_name',
    ];
}
