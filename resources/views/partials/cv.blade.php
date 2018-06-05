@extends('layouts.master')

@section('title')
  Lilian
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('/css/cv.css') }}">
@endsection



@section('content')

  <div class="row full-view">

    <div class="col-3">
      <div class="table-class" style="width:100%;">
  <table>
    <thead>
      <th>Currulicum Vitae</th>
    </thead>
    <tbody>

        <tr>
            <td>
              <h3>cv ding</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </td>
            <td>
              <h3>cv ding</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </td>
            <td>
              <h3>cv ding</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </td>
        </tr>

    </tbody>
  </table>
  </div>
    </div>
    <div class="col-9 align-c" style="height: 90vh; top: 5%;">
      <img src="{{ asset('/img/writing/document.jpg') }}" style=" width: 100%; max-height: 100%; object-fit: contain;" alt="" >
    </div>

  </div>

@endsection

@section('js')

@endsection
