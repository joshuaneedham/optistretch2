@extends('layouts.master')

@section('title')@parent:: Contact Us @endsection

@section('content')
    <div class="container content-wrap">
        <div class="row">
            @include('includes.frontleft')
            <div class="col-md-9 body-content fp-main">
                <h1>Contact Us</h1>
                <p class="article-start">Please send us an email with any questions or concerns you may have.<br />
                 <a href="mailto:optistretch@hotmail.com?cc=support@optistretch.com&amp;subject=OptiStretch.com Contact form">Send Opti-Stretch an email</a><br />
           You can all give us a call at <a href="tel:801-580-3714">(801) 580-3714</a></p>
            </div>
        </div>
    </div>
@stop

@section('footerscripts')
    @parent
    <script src="/assets/js/fp.js"></script>
    <script type="text/javascript" src="/assets/js/wz_tooltip.js"></script>
@stop
