<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageUploadController extends BaseController
{
    public function ProfileUploadImage()
    {
    }
    public function BlogUploadImageCover()
    {
    }
    public function BlogUploadImageContent()
    {
        // Rendom ชื่อรูปภาพใหม่
        $length = 16;
        $renName = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
        // นามสกุลไฟล์
        $extension = strtolower(pathinfo(basename($_FILES['file']['name']), PATHINFO_EXTENSION));


        // ********ตำแหน่งที่เก็บไฟล์ใน API*****
        $uploaddir = 'assets/image/blog/';
        $uploadfile = $uploaddir . $renName . "." . $extension;
        // *********************************


        // ************URL ของ รูปภาพ********
        $port = $_SERVER['SERVER_PORT'];
        $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://");
        $servername = $_SERVER['SERVER_NAME'];
        $imageURL =  $protocol . $servername . ":" . $port . "/" . $uploaddir . $renName . "." . $extension;
        // *********************************


        // ***********อัพโหลดรูป*************
        if ($_FILES["file"]["size"] > 2000000) {
            $data = array('status' => "Error", 'Description' => "Sorry, your file is too large.", 'url' => "http://localhost:8081/assets/image/blog/holder.png");
        } else {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
                $data = array('status' => "success", 'Description' => "", 'url' => $imageURL);
            } else {
                $data = array('status' => "Error", 'Description' => "Can't upload image.", 'url' => "http://localhost:8081/assets/image/Blog/holder.png");
            }
        }
        // *********************************

        return response()->json($data);
    }
}
