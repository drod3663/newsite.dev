@extends('layouts.master')

@section('title')
	David Rodriguez 
@stop

@section('style')
@stop

@section('content')
	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<!-- <h4>WELCOME, MY NAME IS</h4>
					<h1>DAVID RODRIGUEZ</h1>
					<h4>FULL STACK WEB DEVELOPER</h4> -->
				</div>
			</div><! --/row -->
	    </div> <!-- /container -->
	</div><! --/headerwrap -->
	
	<section id="works"></section>
	<div class="container">
		<div class="row centered mt mb">
			<h1>My Portfolio</h1>
			
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="{{action('HomeController@showMole')}}"><img src="/img/shoot.png" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="{{action('HomeController@showSimon')}}"><img src="/img/simon.png" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="https://github.com/Borq-Gaming/borq.dev"><img src="/img/borq.png" class="img-responsive"></a>
			</div>
			<!-- <div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="work.html"><img src="/img/portfolio/folio04.png" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="work.html"><img src="/img/portfolio/folio05.png" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="work.html"><img src="/img/portfolio/folio06.png" class="img-responsive"></a>
			</div> -->
		</div><! --/row -->
	</div><! --/container -->


	
	<div id="social">
		<div class="container">
			<div class="row centered">
			<h1>Latest Posts</h1>
				<!-- <div class="col-lg-2">
					<a href="#"><i class="fa fa-dribbble"></i></a>
				</div> -->
				<!-- <div class="col-lg-2">
					<a href="#"><i class="fa fa-facebook"></i></a>
				</div> -->
				<!-- <div class="col-lg-2">
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div> -->
				<!-- <div class="col-lg-4">
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
				<div class="col-lg-4">
					<a href="https://www.linkedin.com/in/david-rodriguez-616137105"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="col-lg-4">
					<a href="https://github.com/drod3663"><i class="fa fa-github"></i></a>
				</div> -->

				 <form action="{{ URL::current() }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <pre>{{ (!empty($result) ? print_r($result, 1) : '') }}</pre>
            <div>
                <input type="file" name="file">
            </div>
            <div>
                <button type="submit">Upload!</button>
            </div>
        </form>
			
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/social --> 

	<div id="footerwrap">	
		<div class="container">
			<div class="row centered">
				<div class="col-md-4">
					<p><b>Located in Sunny San Antonio</b></p>
				</div>
				<div class="col-md-1">
					<a href=""><i class="fa fa-twitter fa-2x"></i></a>
				</div>
				<div class="col-md-1">
					<a href="https://www.linkedin.com/in/david-rodriguez-616137105"><i class="fa fa-linkedin fa-2x"></i></a>
				</div>
				<div class="col-md-1">
					<a href="https://github.com/drod3663"><i class="fa fa-github fa-2x"></i></a>
				</div>
			
				<div class="col-md-4">
					<p>drod63@gmail.com</p>
				</div>
			</div>
		</div>
	</div><! --/footerwrap -->
@stop

@section('script')
@stop

@section('footer')
@stop