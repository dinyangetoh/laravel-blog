<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PostCategory;
use App\Post;

class PostController extends Controller
{
    //

    public function index()
    {
        $data['posts'] = Post::get();
        return view('posts.index',$data);
    }

    public function new()
    {
        $data['categories'] = PostCategory::get();
        return view('posts.new',$data);
    }

    public function newCategory(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);

      PostCategory::create([
            'name'=>$request->name
        ]);

        return redirect('post/new');
    }
}