@extends('layouts.dashboard')


@section('content')
<div class="container-dashboard" style="Display: flex;">
  <div class="options-dashboard" style="margin-right: 50px; Display: flex; flex-direction: column;">
    <a style="margin-left: 20px; font-size: 25px;" href="{{route('post.index')}}">Dashboard</a>
    <a style="margin-left: 20px; font-size: 25px;"href="#">Tag</a>
  </div>
  <div class="posts-dashboard" style="flex-grow: 1;">
    <h1>Lista posts</h1>
    <a class="mgleft-1" href="{{route('post.create')}}">Inserire nuovo post</a>
    <table class="mgleft-1 mgright-1" style="width: 100%;">
      <thead >
        <tr>
          <th>tags</th>
        </tr>
      </thead>
      <tbody>
        @foreach($tags as $tag)
        <tr>
          <th>{{$tag->name}}</th>
          </tr>
          @endforeach
        </tbody>
      </table>

  </div>

</div>
@endsection
