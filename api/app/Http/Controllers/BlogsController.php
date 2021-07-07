<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogsController extends BaseController
{
    public function insert(Request $request)
    {
        // Waiting save to DB 
        $request;
        return response()->json($request);
    }
    public function preview()
    {
    }
    public function draft()
    {
    }
    public function edite()
    {
    }
    public function update()
    {
    }
    public function dalete()
    {
    }
}
