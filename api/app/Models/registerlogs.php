<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class registerlogs extends Model
{
    // ชื่อ ตาราง
    protected $table   = 'registerlogs';
    // คอลัมน์ที่ทำการแก้ไขได้
    protected $fillable = [
        'register_name',
        'register_username',
        'register_password',
        'register_email',
        'register_address',
        'register_img',
        'register_type',
        'register_verification_code',
        'register_ip_address',
        'register_device',
        'register_status',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'register_password',
    ];
}
