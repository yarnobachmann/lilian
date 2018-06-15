@extends('layouts.master')

@section('title')
  Lilian
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('/css/about.css') }}">
    <script src="{{ asset('/plugins/typed/lib/typed.min.js') }}" charset="utf-8"></script>
@endsection



@section('content')

  <div class="row full-view">

    <div class="col-3">
      <div class="table-class" style="width:100%;">
  <table>

    <tbody>

        <tr>
            <td><a href="{{url('/about')}}">About</a></td>
            <td><a href="{{url('/about/cv')}}">C.V.</a></td>
            <td><a href="{{url('/about/news')}}">News</a></td>
        </tr>

    </tbody>
  </table>
  </div>
    </div>
    <div class="col-9 align-c">
      <p class="typing"></p>
    </div>

  </div>
  <script type="text/javascript">
    var typed = new Typed('.typing', {
      strings: ["Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.."],
        typeSpeed: 5
      });
  </script>
@endsection

@section('js')

@endsection
