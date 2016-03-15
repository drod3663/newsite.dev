@extends('layouts.master')

@section('title')
	David Rodriguez 
@stop

@section('style')
@stop

@section('content')
<!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">TREMENDOUS UPSIDE</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
            <li><a href="{{action('HomeController@showAbout')}}">About</a></li>
            <li><a href="{{action('HomeController@showPortfolio')}}">Works</a></li>
            <li><a href="{{action('PostsController@index')}}">Blog</a></li>
            <li><a href="{{action('HomeController@showResume')}}">Resume</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<h4>WELCOME, MY NAME IS</h4>
					<h1>DAVID RODRIGUEZ</h1>
					<h4>FULL STACK WEB DEVELOPER</h4>
				</div>
			</div><! --/row -->
	    </div> <!-- /container -->
	</div><! --/headerwrap -->
	
	<section id="works"></section>
	<div class="container">
		<div class="row centered mt mb">
			<h1>My Portfolio</h1>
			
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="work.html"><img src="/img/portfolio/folio01.png" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="work.html"><img src="/img/portfolio/folio02.png" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="work.html"><img src="/img/portfolio/folio03.png" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="work.html"><img src="/img/portfolio/folio04.png" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="work.html"><img src="/img/portfolio/folio05.png" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="work.html"><img src="/img/portfolio/folio06.png" class="img-responsive"></a>
			</div>
		</div><! --/row -->
	</div><! --/container -->
	
	<div id="social">
		<div class="container">
			<div class="row centered">
				<!-- <div class="col-lg-2">
					<a href="#"><i class="fa fa-dribbble"></i></a>
				</div> -->
				<!-- <div class="col-lg-2">
					<a href="#"><i class="fa fa-facebook"></i></a>
				</div> -->
				<!-- <div class="col-lg-2">
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div> -->
				<div class="col-lg-4">
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
				<div class="col-lg-4">
					<a href="https://www.linkedin.com/in/david-rodriguez-616137105"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="col-lg-4">
					<a href="https://github.com/drod3663"><i class="fa fa-github"></i></a>
				</div>
			
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/social -->

	<div id="footerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-4">
					<p><b>FULL STACK WEB DEVELOPER</b></p>
				</div>
			
				<div class="col-lg-4">
					<p>Living in Sunny San Antonio.</p>
				</div>
				<div class="col-lg-4">
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