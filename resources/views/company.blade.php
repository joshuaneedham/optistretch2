@extends('layouts.master')

@section('title')@parent:: Company Overview @endsection

@section('content')
	<div class="container content-wrap">
		<div class="row">
			@include('includes.frontleft')
			<div class="col-md-9 body-content fp-main">
				<h1>Company Overview</h1>
				<p class="article-start">OPTI-STRETCH Versus Recurrent Back Pain is a Health and Wellness Program designed for adolescents, young adults and adults to develop a healthy, strain-resistant back for life.</p>

				<p>The goal of OPTI-STRETCH is to help people avoid needless reoccurring low back pain, upper back pain, shoulder and neck pain due to muscle strain. Low Back Pain was just published as the leading cause of disability worldwide.</p>

				<p>The natural history of low back pain is extremely variable and may persist a few days, years and for some becomes a lifelong struggle leading to joint pain as a result. Commonly people who experience activity limiting low back pain lasting more than one day go on to have recurrent episodes. Many people will continue to have symptoms between episodes, developing a "Recurrent Back Pain Syndrome".</p>

				<p>OPTI-STRETCH is the first New Scientific Breakthrough in 100 years for back pain.</p>

				<p>The U.S. Preventive Task Force reported the only method that showed any help for back pain is a back school. In our back school you'll learn how:</p>
				
				<ul>			
					<li>Our program is preventive and rehabilitative</li>
					<li>Diagnostic tests detect risk factors for Recurrent Back Strain Syndrome</li>
					<li>Our Therapeutic Stretching Technique increases muscle tone and range of motion</li>
					<li>Healthy symmetrical and toned muscles help prevent muscle strains</li>
				</ul>
			
				<p>Because previous episodes of low back pain are predictive of recurrence OPTI-STRETCH students are overjoyed that they finally found a way to end the painful and disabling cycle of back pain.</p>
			</div>
		</div>
	</div>
@stop

@section('footerscripts')
	@parent
	<script src="/assets/js/fp.js"></script>
	<script type="text/javascript" src="/assets/js/wz_tooltip.js"></script>
@stop
