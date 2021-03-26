<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;
use App\Tag;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::all();

      $data = [
        'posts' => $posts
      ];
      return view('admin.post.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags= Tag::all();
        $data = [
          'tags' => $tags
        ];
        return view('admin.post.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();
      // dd($data);
      $iduser = Auth::id();
      $postNew = new Post();
      $postNew->user_id = $iduser;
      $postNew->slug = Str::slug($data['title']);
      $slufBeginner = $postNew->slug;
      $postPresente = Post::where('slug',$postNew->slug )->first();
      $cont = 1;

      while($postPresente){
        $postNew->slug = $slufBeginner.'-'.$cont;
        $postPresente = Post::where('slug',$postNew->slug )->first();
          $cont++;
      }

      $postNew->slug = $postNew->slug;


      $postNew->title = $data['title'];
      $postNew->content = $data['content'];
      $postNew->save();
      $postNew->tags()->sync($data['tags']);
      return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
      if($post){
        $data = [
          'postUnico'=> $post
        ];
        return view('admin.post.show',$data);
      }
      abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
      if($post){
        $data = [
          'postUnico'=> $post
        ];
        return view('admin.post.edit',$data);
      }
      abort('404');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
      $data = $request->all();
      $post->slug = Str::slug($data['title']);
      $slufBeginner = $post->slug;
      $postPresente = Post::where('slug',$post->slug )->first();
      $cont = 1;

      while($postPresente){
        $post->slug = $slufBeginner.'-'.$cont;
        $postPresente = Post::where('slug',$post->slug )->first();
          $cont++;
      }

      $post->slug = $post->slug;
      $post->update($data);


      return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      $post->delete();
      return redirect()->route('post.index');
    }
}
