@extends('layouts.master')
@section('css')
@parent
<link rel="stylesheet" href="/assets/css/bookpages.css">
@stop
@section('headscripts')
@parent
<script src="/assets/mediaelementjs/mediaelement-and-player.min.js"></script>
<link rel="stylesheet" href="/assets/mediaelementjs/mediaelementplayer.min.css">
@stop

@section('title')@parent:: Book @stop
@php
    if(Auth::check()){
        $transaction = \App\Models\Transaction::where('user_id',Auth::id())->first();
        if(!isset($transaction) && empty($transaction)){
@endphp
<script>window.location = "{{ route('purchase') }}";</script>
@php

        }
    }
@endphp
@section('content')
<div class="container content-wrap">
    <div class="book-page">
            <div id="bookpage-header" class="container-fluid affix" data-spy="affix">
                <div class="btn-group pull-right" role="group" aria-label="Page Navigation">

                    @if ($previous)
                            <a href="{{ url('book/' . $previous) }}" class="btn btn-inset"><span class="fa fa-arrow-left fa-fw fa-2x"></span></a>
                        @endif
                        <a href="{{ url('book/002') }}" class="btn btn-inset" title="Table of Contents"><span class="fa fa-fw fa-2x fa-file-text"></span></a>
                        @if ($next)
                            <a href="{{ url('book/' . $next) }}" class="btn btn-inset"><span class="fa fa-arrow-right fa-fw fa-2x"></span></a>
                        @endif
                </div>
            </div>
        <div class="bookpage-content">
            {!! $bookpage !!}
        </div>
    </div>{{-- book-page --}}
</div>{{-- content-wrap --}}
@stop
@section('footerscripts')
	@parent
	<script type="text/javascript" src="/assets/js/fp.js"></script>
	<script type="text/javascript" src="/assets/js/wz_tooltip.js"></script>
    <script type="text/javascript" src="/assets/js/bookpage.js"></script>
@stop
