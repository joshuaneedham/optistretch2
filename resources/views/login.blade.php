@extends('layouts.master')

@section('title')@parent:: Knowledge Base @endsection

@section('content')
    <div class="container content-wrap">
        <div class="row">
            @include('includes.frontleft')
            <div class="col-md-9 body-content fp-main">
                <h1>Login or Create a Free Account</h1>
                <div class="row">
                	<div class="col-xs-12 col-md-6 login">
                        <div class="well">
                            <h3>Login</h3>
                    		{{ Confide::makeLoginForm()->render() }}
                        </div>
                	</div>
                	<div class="col-xs-12 col-md-6 signup">
                        <div class="well">
                            <h3>Signup</h3>
                            @include('auth.register')
                        </div>
                	</div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footerscripts')
        @parent
        <script src="/assets/js/fp.js"></script>
        <script type="text/javascript" src="/assets/js/wz_tooltip.js"></script>
@stop    