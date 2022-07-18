@extends('layouts.master')

@section('title')@parent:: Home @stop

@section('content')
	<div class="container content-wrap">
		<div class="row">
			@include('includes.frontleft')
		<div class="col-md-9 body-content fp-main">
			<h1 class="center">OPTI-STRETCH</h1>
			<h2 class="center">Versus Recurrent Back Pain</h2>
			<p class="highlight center">Have you ever injured a muscle and it never felt the same again?</p>
			<p class="highlight center">Does the muscle reinjure easily?</p>
			<p>Luckily low back pain, upper back pain, shoulder pain and neck pain are most commonly caused by muscle strain. OPTI-STRETCH will provide new and unique knowledge into the science of stretching for rehabilitation. OPTI-STRETCH can now effectively rehabilitate a “bad back” due solely to muscle strain, coined by Dr. Neil, M.D. a Recurrent Back Strain Syndrome.</p>

			<p>Now using the OPTI-STRETCH book which includes a narrated DVD by Dr. Neil showing the correct way to perform every stretch you can learn:</p>

			<ul>
				<li>How to make your muscles less susceptible to muscle strains</li>
				<li>How to detect chronically injured muscles</li>
				<li>That symmetrical muscle movement reduces the chances of muscle strains</li>
				<li>How to safely increase your range of motion for a more active lifestyle</li>
				<li>Neutral stretches that will tone all the major muscles groups of the back and neck</li>
				<li>That muscles have to have proper tone in order for them to be strengthened and conditioned without straining the muscles</li>
				<li>Therapeutic stretching to heal and lengthen chronically injured muscles that have been injured by muscle strains</li>
			</ul>
			<div class="center"><img id="dandb"
				src="//www.dandb.com/businessdirectory/badgecontrol.jsp?bid=37359989&amp;html=1"
			 	style="padding: 0; outline: 0; border: 0 none; clear: both;
			 	vertical-align: baseline; display: block;" alt="D&amp;B Credibility Basic"></div>
		</div>
		</div>
	</div>
@stop

@section('footerscripts')
	@parent
	<script src="/assets/js/fp.js"></script>
	<script type="text/javascript" src="/assets/js/wz_tooltip.js"></script>
@stop
