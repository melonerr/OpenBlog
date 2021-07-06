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
        // Rendom new name
        $length = 32;
        $renName = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
       
        $extension = strtolower(pathinfo(basename($_FILES['file']['name']), PATHINFO_EXTENSION));


        // Part URL
        $uploaddir = './tmp/';
        $uploadfile = $uploaddir . $renName . "." . $extension;
        // $newName =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['SERVER_NAME'] . "/teach/tmp/" . $renName . "." . $extension;

        return response()->json($uploadfile);
    }
    public function BlogUploadImageCover()
    {
    }
    public function BlogUploadImageContent()
    {
    }
}
