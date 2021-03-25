@extends('layouts.app')

@section('content')
  <h1 style="text-align: center;">Tutti i post</h1>
  <div class="container ">
  <div class="row row-cols-1 row-cols-md-2 g-4">
    @foreach($posts as $post)
  <div class="col" style='margin-bottom: 10px;'>
      <div class="card bg-primary " style="max-height: 126px; overflow: hidden;">
        <div class="card-body">
          <div class="" style="display: flex; justify-content: space-between;">
            <h4 class="card-title">{{$post->title}}</h4>
            <h5>{{$post->user->name}}</h5>
            <a href="#">
              <button class="btn btn-success"type="button" name="button">Read more</button>
            </a>
          </div style="">
          <div class="" style="max-height: 46px; overflow: hidden;">
            <p class="card-text">{{$post->content}}</p>
          </div>
        </div>
      </div>
  </div>

  @endforeach
</div>
  </div>
@endsection
