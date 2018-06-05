@extends('layouts.master')

@section('title')
  Lilian
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('/css/notebook.css') }}">
  <script type="text/javascript" src="/plugins/turnjs4/extras/jquery.min.1.7.js"></script>
  <script type="text/javascript" src="/plugins/turnjs4/extras/modernizr.2.5.3.min.js"></script>
@endsection



@section('content')

    <div class="row full-view">

      <div class="flipbook-viewport">
      	<div class="container">
      		<div class="flipbook">
      			<div style="background-image:url(/plugins/turnjs4/samples/basic/pages/1.jpg)"></div>
      			<div style="background-image:url(/plugins/turnjs4/samples/basic/pages/2.jpg)"></div>
      			<div style="background-image:url(/plugins/turnjs4/samples/basic/pages/3.jpg)"></div>
      			<div style="background-image:url(/plugins/turnjs4/samples/basic/pages/4.jpg)"></div>
      			<div style="background-image:url(/plugins/turnjs4/samples/basic/pages/5.jpg)"></div>
      			<div style="background-image:url(/plugins/turnjs4/samples/basic/pages/6.jpg)"></div>
      			<div style="background-image:url(/plugins/turnjs4/samples/basic/pages/7.jpg)"></div>
      			<div style="background-image:url(/plugins/turnjs4/samples/basic/pages/8.jpg)"></div>
      			<div style="background-image:url(/plugins/turnjs4/samples/basic/pages/9.jpg)"></div>
      			<div style="background-image:url(/plugins/turnjs4/samples/basic/pages/10.jpg)"></div>
      			<div style="background-image:url(/plugins/turnjs4/samples/basic/pages/11.jpg)"></div>
            <div style="background-image:url(/plugins/turnjs4/samples/basic/pages/12.jpg)"></div>
      		</div>
      	</div>
      </div>

  </div>
      <script type="text/javascript">

      function loadApp() {

      	// Create the flipbook

      	$('.flipbook').turn({
      			// Width

      			width:922,

      			// Height

      			height:600,

      			// Elevation

      			elevation: 50,

      			// Enable gradients

      			gradients: true,

      			// Auto center this flipbook

      			autoCenter: true

      	});
      }

      // Load the HTML4 version if there's not CSS transform

      yepnope({
      	test : Modernizr.csstransforms,
      	yep: ['/plugins/turnjs4/lib/turn.js'],
      	nope: ['/plugins/turnjs4/lib/turn.html4.min.js'],
      	both: ['/plugins/turnjs4/samples/basic/css/basic.css'],
      	complete: loadApp
      });

      </script>


@endsection

@section('js')

@endsection
