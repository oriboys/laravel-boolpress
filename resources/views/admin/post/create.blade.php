@extends('layouts.dashboard')


@section('content')
<div class="container-dashboard" style="Display: flex;">
  <div class="options-dashboard" style="margin-right: 50px; Display: flex; flex-direction: column;">
    <a href="{{route('post.index')}}">Dashboard</a>
    <a href="#">Tag</a>
  </div>
  <div class="posts-dashboard" style="flex-grow: 1;">
    <form method="post" action="{{route('post.store')}}">
      @method('POST')
      @csrf
      <div class="mb-3">
        <label for="inputTitle" class="form-label">titolo</label>
        <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="inputContent" class="form-label">contenuto</label>
        <input type="text" class="form-control" name="content">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>

</div>

@endsection
