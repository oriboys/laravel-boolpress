@extends('layouts.app')

@section('content')
  <div class="show-detailes">
      <h1 class="show-title">{{$post->title}}</h1>
      <div class="show-info">
        <a href="{{route('guest.posts.index')}}">Torna ai post</a>
        <div class="">
          <p>post created by  <span>{{$post->user->name}}</span> on {{$post->created_at}}</p>

        </div>
      </div>
      <p class="show-content">{{$post->content}}</p>
  </div>
@endsection
