@extends('layouts.master')

@section('title')
  Lilian
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('/css/news.css') }}">
    <script src="{{ asset('/plugins/typed/lib/typed.min.js') }}" charset="utf-8"></script>
@endsection



@section('content')

  <div class="row full-view">

   <div class="col-sm-3">
     <div class="panel panel-primary">
       <a href="{{url('/about/news/1')}}">
       <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%; height: 100%" alt="Image"></div>
     </a>
     </div>
   </div>

   </div>

@endsection

@section('js')

@endsection
