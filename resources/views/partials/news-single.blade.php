@extends('layouts.master')

@section('title')
  Lilian
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('/css/news-single.css') }}">
    <script src="{{ asset('/plugins/typed/lib/typed.min.js') }}" charset="utf-8"></script>
@endsection



@section('content')

  <div class="row full-view">

    <div class="col-6 align-c" style="background-image: url('/img/about/bg.jpg');">

    </div>

    <div class="col-4 offset-2 top-push">
       <h1 style="text-decoration: underline;">Piemels</h1>
       <p>het antwoord op alles is piemels</p>
       <a href="#">linkie dr bij</a>
    </div>

  </div>


@endsection

@section('js')

@endsection
