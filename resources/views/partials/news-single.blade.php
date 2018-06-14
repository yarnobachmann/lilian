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
       <h1 style="text-decoration: underline;">Titel</h1>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
       <a href="#">linkie dr bij</a>
    </div>

  </div>


@endsection

@section('js')

@endsection
