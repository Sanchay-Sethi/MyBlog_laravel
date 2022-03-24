<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class ViewblogController extends Controller
{
    public function index($id){
        $post = Post::find($id);
        return view('singlepost', ['post'=>$post]);
    }
}
