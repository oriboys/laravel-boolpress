@extends('layouts.dashboard')


@section('content')
<div class="container-dashboard" style="Display: flex;">
  <div class="options-dashboard" style="margin-right: 50px; Display: flex; flex-direction: column;">
    <a style="margin-left: 20px; font-size: 25px;"href="{{route('post.index')}}">Dashboard</a>
    <a style="margin-left: 20px; font-size: 25px;"href="#">Tag</a>
  </div>
  <div class="posts-dashboard" style="flex-grow: 1;">
    <h1>{{$postUnico->title}}</h1>
    <a class="mgleft-1" href="{{route('post.index')}}" style="margin-bottom: 20px;">indietro</a>
         <h3 style="margin-bottom: 20px;"> {{{$postUnico->user->name}}}</h3>
        <h5 style="margin-bottom: 50px;">slug: {{$postUnico->slug}}</h5>
        <p>tag associati:</p>
          @if(count($postUnico->tags) > 0)
            <ul style="margin-bottom: 50px;">
              @foreach($postUnico->tags as $tag)
              <li>{{$tag->name}}</li>
              @endforeach
            </ul>
           @else
           <p>nessun tag associato</p>

          @endif
      <p> <span style="font-weight: bold;"> Testo post:</span> {{$postUnico->content}}</p>

  </div>

</div>

@endsection
