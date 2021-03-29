@extends('layouts.app')

@section('content')
<div class="contattato">
  @if(session('status'))
    <p>Stato invio messaggio:</p>
    <p>{{session('status')}}</p>
  @endif


</div>
@endsection
