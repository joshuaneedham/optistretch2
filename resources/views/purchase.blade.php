@extends('layouts.master')

@section('title')@parent:: Purchase Our Book @endsection

@section('content')
@php
    if(Auth::check()){
        $transaction = \App\Models\Transaction::where('user_id',Auth::id())->first();
        if(!empty($transaction)){
@endphp
<script>window.location = "{{ url('book') }}";</script>
@php

        }
    }
@endphp
	<div class="container content-wrap">
		@include('includes.frontleft')
		<div class="col-md-9 body-content fp-main">
			<h1>Opti-Stretch - Choose your platform below.</h1>
			@include('includes.pitch')
			<div class="center">
              @if (Auth::user())

				<button id="customCheckoutButton" class="btn btn-primary btn-lg">Purchase our Book for $12.99</button>
              @else
                    <a class="btn btn-primary btn-lg" href="http://optistretch.com/users/login">Create Free Account to Purchase the E-Book</a>
              @endif
			</div>
            <br>
            <br>
		</div>
	</div>

@stop

@section('footerscripts')
	@parent
	<script src="/assets/js/fp.js"></script>
    <script type="text/javascript" src="/assets/js/wz_tooltip.js"></script>
    @if (Auth::user())
    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script type="text/javascript">
    	var handler = StripeCheckout.configure({

			key: "{{env('STRIPE_KEY')}}",
    		image: '/icon/Optistretch-Stripe.png'
    		@if (Auth::user())
    		,email: '{{ Auth::user()->email }}'
    		@endif
    		,token: function(token) {
			$.ajax({
      				url: 'purchase',
      				type: "post",
      				data: {'user_id': {{ Auth::user()->id }}, 'token': token.id, '_token': '{{ csrf_token() }}','amount':'12.99'},
      				success: function(data){
        				location.reload();
				}
			});
    		}
    	});
		$('#customCheckoutButton').on('click', function(e){
			handler.open({
				name: 'Opti-Stretch Book & Video'
				,description: 'Online Book & Video Access'
				,amount: 1299
			});
			e.preventDefault();
		});
		$(window).on('popstate', function(){
			handler.close;
		});
    </script>
    @endif
@stop
