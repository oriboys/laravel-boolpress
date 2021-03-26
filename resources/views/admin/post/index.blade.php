@extends('layouts.dashboard')


@section('content')
<div class="container-dashboard" style="Display: flex;">
  <div class="options-dashboard" style="margin-right: 50px;">
    ddd
  </div>
  <div class="posts-dashboard" style="flex-grow: 1;">
    <h1>Lista posts</h1>
    <a class="mgleft-1" href="{{route('admin.posts')}}">Inserire nuovo post</a>
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
          <th><a  href="">dettagli</a>
            <th><a  href="">modifica</a>
            </th>
          </tr>
          @endforeach
        </tbody>
      </table>

  </div>

</div>
@endsection
