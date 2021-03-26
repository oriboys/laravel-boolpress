@extends('layouts.dashboard')


@section('content')
<div class="container-dashboard" style="Display: flex;">
  <div class="options-dashboard" style="margin-right: 50px; Display: flex; flex-direction: column;">
    <a style="margin-left: 20px; font-size: 25px;" href="{{route('post.index')}}">Dashboard</a>
    <a style="margin-left: 20px; font-size: 25px;"href="{{route('tags')}}">Tag</a>
  </div>
  <div class="posts-dashboard" style="flex-grow: 1;">
    <h1>Lista posts</h1>
    <a class="mgleft-1" href="{{route('post.create')}}">Inserire nuovo post</a>
    <table class="mgleft-1 mgright-1" style="width: 100%;">
      <thead >
        <tr>
          <th>title</th>
          <th>user</th>
          <th>visualizza</th>
          <th>modifica</th>
          <th>elimina</th>
        </tr>
      </thead>
      <tbody>
        @foreach($posts as $post)
        <tr>
          <th>{{$post->title}}</th>
          <th>{{$post->user->name}}</th>
          <th><a  href="{{route('post.show', $post->id)}}">dettagli</a>
            <th><a  href="{{route('post.edit', $post->id)}}">modifica</a>
            </th>
            <th>
                <form class="" action="{{route('post.destroy',$post->id)}}" method="post">
                  @method('DELETE')
                  @csrf
                  <button  type="submit" name="button">elimina</button>
                </form>
            </th>
          </tr>
          @endforeach
        </tbody>
      </table>

  </div>

</div>
@endsection
