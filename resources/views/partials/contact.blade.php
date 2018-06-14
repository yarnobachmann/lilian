@extends('layouts.master')

@section('title')
  Lilian
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
@endsection

@section('content')
  <div class="col-12 full-view align-c" style="background-image: url('/img/contact/bg.jpg'); background-repeat: no-repeat; background-position: bottom; background-size: cover;">

  <div class="col-6" style="position: absolute; bottom:1%; left:0;">
    <h3 style="text-decoration: underline;">Contact</h3>
    <form action="">
      <table>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Tel nr</th>
        </tr>
        <tr>
          <td><input type="text" id="name" name="name" placeholder="Your name.." style="width: 100%;"></td>
          <td><input type="text" id="email" name="email" placeholder="Your email.." style="width: 100%;"></td>
          <td><input type="text" id="phone" name="phone" placeholder="Your number.." style="width: 100%;"></td>
        </tr>
      </table>

      <textarea id="message" name="message" placeholder="Write something.." style="height:200px; width: 50%; margin-top: 5%;"></textarea>
      <br>
      <input type="submit" value="Submit">
    </form>
  </div>

  </div>

@endsection

@section('js')
@endsection
