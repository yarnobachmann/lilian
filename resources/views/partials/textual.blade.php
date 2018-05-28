@extends('layouts.master')

@section('title')
  Lilian
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('/css/textual.css') }}">
@endsection

@section('content')
  <div class="col-12 full-view align-c">
    
    <img src="{{ asset('/img/textual/coin-notebook-front.png') }}" onmouseover="this.src='{{ asset('/img/textual/coin-notebook-back.png') }}'"
    onmouseout="this.src='{{ asset('/img/textual/coin-notebook-front.png') }}'"
    border="0" alt="" style="margin-right: 10%;">

    <img src="{{ asset('/img/textual/coin-writing-front.png') }}" onmouseover="this.src='{{ asset('/img/textual/coin-writing-back.png') }}'"
    onmouseout="this.src='{{ asset('/img/textual/coin-writing-front.png') }}'"
    border="0" alt="" style="margin-left: 10%;">

  </div>

@endsection

@section('js')

@endsection
