@extends('layouts.master')

@section('title')@parent:: In The Media @endsection

@section('content')
	<div class="container content-wrap">
		<div class="row">
			@include('includes.frontleft')
			<div class="col-md-9 body-content fp-main">
				<h1>In the Media</h1>
				<p class="article-start"> <a href="http://www.deseretnews.com/article/635194268/Stretch-without-strain.html" target="_blank">Stretch without strain | Deseret News</a> <br />
           "Opti-Stretch Versus Recurrent Back Pain" by Dr. Edwin J. Neil (2005, Classic Day Publishing, $28.95) is for people who already have issues with their backs ...<br />
                               www.deseretnews.com/article/635194268/Stretch-without-strain.html <br /><br /></p>
			</div>
		</div>
	</div>
@stop

@section('footerscripts')
	@parent
	<script src="/assets/js/fp.js"></script>
	<script type="text/javascript" src="/assets/js/wz_tooltip.js"></script>
@stop
