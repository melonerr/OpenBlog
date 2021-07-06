<?php

namespace App\Http\Controllers;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\users;
use App\Models\categories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends BaseController
{
    public function Users()
    {
        $Users = users::all();
        return response()->json($Users);
    }
    public function categories()
    {
        $categories = categories::select('categories_id','categories_name')->get();;
        return response()->json($categories);
    }
}
