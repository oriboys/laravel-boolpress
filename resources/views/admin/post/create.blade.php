@extends('layouts.dashboard')


@section('content')
<div class="container-dashboard" style="Display: flex;">
  <div class="options-dashboard" style="margin-right: 50px; Display: flex; flex-direction: column;">
    <a style="margin-left: 20px; font-size: 25px;" href="{{route('post.index')}}">Dashboard</a>
    <a style="margin-left: 20px; font-size: 25px;" href="#">Tag</a>
  </div>
  <div class="posts-dashboard" style="flex-grow: 1;">
    <form method="post" action="{{route('post.store')}}">
      @method('POST')
      @csrf
      <div class="mb-3">
        <label for="inputTitle" class="form-label">titolo</label>
        <input type="text" class="form-control" name="title" aria-describedby="emailHelp" style="width:  600px;">
      </div>
      <div class="mb-3">
        <label for="inputContent" class="form-label">contenuto</label>
        <input type="text" class="form-control" name="content" style="width:  600px; height: 400px;">
      </div>
      @foreach($tags as $tag)
      <div class="form-check mb-3">
        <input type="checkbox" class="form-check-input" name="tags[]" value="{{$tag->id}}" id="validationFormCheck1" >
        <label class="" for="validationFormCheck1">{{$tag->name}}</label>
      </div>

      @endforeach
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>



  </div>

</div>

@endsection
