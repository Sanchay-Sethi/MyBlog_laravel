<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class MainController extends Controller
{
    public function allPost(){
        $posts = Post::paginate(6);
        
        return view('welcome', ['posts'=>$posts]);
    }
}
