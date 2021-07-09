<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogsController extends BaseController
{

    // **********  status  **********
    // 1 Public
    // 2 Private
    // 3 Draft
    // 4 Delete
    // **********  status  **********


    // ********** User *************
    public function getAll()
    {
        $blog = blogs::where('blogs_status', 1)->paginate(10);
        return response()->json($blog);
    }

    public function getID($id)
    {
        $blog = blogs::where([
            ['blogs_id', $id],
            ['blogs_status', 1]
        ])->get();

        return response()->json($blog);
    }
    // ********** End User ***********


    // ********** member *************
    public function getAllmember()
    {
        $blog = blogs::where([
            ['blogs_status', '!=', 4],
            ['blogs_user', 200]
        ])->paginate(1);
        return response()->json($blog);
    }

    public function getTitlemember($title)
    {
        $blog = blogs::where([
            ['blogs_title', $title],
            ['blogs_status', '!=', 4],
            ['blogs_user', 200]
        ])->get();
        return response()->json($blog);
    }

    public function insert(Request $request)
    {
        // insert data
        $blogs = new blogs();
        $blogs->blogs_title = $request->title;
        $blogs->blogs_content = $request->content;
        $blogs->blogs_img_cover = $request->imgcover;
        $blogs->blogs_user = $request->writer;
        $blogs->blogs_permalink = $request->permalink;
        $blogs->blogs_status = $request->status;
        $blogs->created_at = $request->date;
        $blogs->updated_at = $request->date;
        $blogs->save();
        return response()->json($blogs);
    }
    public function edite($id)
    {
        $blog = blogs::all()->where('blogs_id', $id);
        return response()->json($blog);
    }
    public function update(Request $request)
    {
        $blog = blogs::where('blogs_id', $request->id)
            ->update(
                ['blogs_status' => $request->status]
            );
        return response()->json($blog);
    }
    public function dalete($id)
    {
        $blog = blogs::where('blogs_id', $id)->update(['blogs_status' => 4]);
        return response()->json($blog);
    }
    // ********** End member ***********
}
