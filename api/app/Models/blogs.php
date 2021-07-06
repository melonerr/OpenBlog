<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class blogs extends Model
{
    // ชื่อ ตาราง
    protected $table   = 'blogs';
    // คอลัมน์ที่ทำการแก้ไขได้
    protected $fillable = [
        'blogs_title', 'blogs_content', 'blogs_img_cover', 'blogs_user', 'blogs_permalink', 'blogs_status',
    ];
}
