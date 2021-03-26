@extends('layouts.dashboard')


@section('content')
<div class="container-dashboard" style="Display: flex;">
  <div class="options-dashboard" style="margin-right: 50px; Display: flex; flex-direction: column;">
    <a href="{{route('post.index')}}">Dashboard</a>
    <a href="#">Tag</a>
  </div>
  <div class="posts-dashboard" style="flex-grow: 1;">
    <h1>{{$postUnico->title}}</h1>
    <a class="mgleft-1" href="{{route('post.index')}}">indietro</a>
        <h3>{{{$postUnico->user->name}}}</h3>
      <p>{{$postUnico->content}}</p>

  </div>

</div>

@endsection
