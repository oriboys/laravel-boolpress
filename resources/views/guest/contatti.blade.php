@extends('layouts.app')

@section('content')
<div class="contatti">
  <form method="post" action="{{route('guest.contattato')}}">
    @method('POST')
    @csrf
    <div class="mb-3">
      <label for="inputName" class="form-label">nome</label>
      <input type="text" class="form-control" name="name" aria-describedby="emailHelp" style="width:  600px;">
    </div>
    <div class="mb-3">
      <label for="inputEmail" class="form-label">email</label>
      <input type="email" class="form-control" name="email" style="width:  600px;">
    </div>
    <div class="mb-3">
      <label for="inputContent" class="form-label">contenuto</label>
      <input type="text" class="form-control" name="content" style="width:  600px; ">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


</div>
@endsection
