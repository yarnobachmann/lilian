@extends('layouts.master')

@section('title')
  Lilian
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
@endsection

@section('content')
  <div class="col-12 full-view align-c">
    <div class="col-8 align-c sigardiv">
      <img class="sigarbox sigarbox-open" id="sigarbox-open" src="{{ asset('/img/cigbox_open.png') }}" alt="sigaren doosje">
      <img class="sigarbox" id="sigarbox-closed" src="{{ asset('/img/cigbox_closed.png') }}" alt="sigaren doosje">
      <a href="{{url('/about')}}" class="cig-bud">  <img class="sigarbox sigarbox-open" id="sigarbox-cig-bud" src="{{ asset('/img/sigar-content/cig-bud.png') }}" alt="cig bud"></a>

      <img class="sigarbox about-hover" id="sigarbox-about-hover" src="{{ asset('/img/sigar-content/about-hover.png') }}" alt="about hover">

      <img class="sigarbox sigarbox-open" id="sigarbox-rose-bud-1" src="{{ asset('/img/sigar-content/rose-bud-1.png') }}" alt="rose bud">
      <img class="sigarbox" id="sigarbox-rose-bud-2" src="{{ asset('/img/sigar-content/rose-bud-2.png') }}" alt="rose bud">

      <a href="{{url('/visual')}}" class="pistache"><img class="sigarbox sigarbox-open" id="sigarbox-pistache" src="{{ asset('/img/sigar-content/pistache.png') }}" alt="pistache"></a>

      <img class="sigarbox visual-hover" id="sigarbox-visual-hover" src="{{ asset('/img/sigar-content/visual-hover.png') }}" alt="visual hover">
      <img class="sigarbox sigarbox-open" id="sigarbox-feather-1" src="{{ asset('/img/sigar-content/feather-1.png') }}" alt="feather 1">

      <a href="{{url('/textual')}}" class="boys-r-toys"><img class="sigarbox sigarbox-open" id="sigarbox-boys-r-toys" src="{{ asset('/img/sigar-content/boys-r-toys.png') }}" alt="boys r toys"></a>

      <img class="sigarbox textual-hover" id="sigarbox-textual-hover" src="{{ asset('/img/sigar-content/textual-hover.png') }}" alt="textual hover"> 

    </div>
  </div>

@endsection

@section('js')
<script src="{{ asset('/js/sigarbox.js') }}" charset="utf-8"></script>
@endsection
