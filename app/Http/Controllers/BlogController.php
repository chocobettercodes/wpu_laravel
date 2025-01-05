<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        return view('blog',[
            "tittle" => "Posts",
            "artikel" => Blog::all()
        ]);
    }

    public function show(Blog $blog){
        return view('blogs',[
            "tittle" => "Blogs",
            "blogs" => $blog
        ]);
        // return view('blogs',[
        //     "tittle" => "Blogs",
        //     "blogs" => Blog::find($post)
        // ]);
    }
}