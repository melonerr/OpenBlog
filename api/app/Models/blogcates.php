<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class blogcates extends Model
{
    // ชื่อ ตาราง
    protected $table   = 'blogcates';
    // คอลัมน์ที่ทำการแก้ไขได้
    protected $fillable = [
        'blogs_id', 'categories_id',
    ];
}
