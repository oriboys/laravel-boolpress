<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Postcontroller extends Controller
{
    public function index(){
      $posts = Post::all();

      $data = [
        'posts' => $posts
      ];
      return view('guest.post.index',$data);
    }
}
