<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){

        $posts = Post::all();

        return view('posts.index',compact('posts'));
    }

    public function create(){

        return view('posts.create');
    }

    public function show($id){

        $post = Post::findOrFail($id);
        return view('posts.show',compact('post'));

    }
}
