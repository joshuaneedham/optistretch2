@extends('layouts.master')

@section('title')@parent:: Testimonials @endsection

@section('content')
  <div class="container content-wrap">
    <div class="row">
      @include('includes.frontleft')
    <div class="col-md-9 body-content fp-main">
      <h1 class="center">OPTI-STRETCH</h1>
      <h2 class="center">Testimonials</h2>
      <p>
        <quote>
          <p>Dr. Neil started me on the OPTI-STRETCH Beginner’s Program. I did it faithfully for several months and found a great amount of relief. I achieved quite a high degree of flexibility and was able to gain a great deal of my lost strength back as I toned and began a moderate exercise program.</p>
          <p>Now Dr. Neil has me doing the Intermediate Program. I can feel my muscles release their tightness as I carefully stretch them further and further. My chronic back pain is gone, and my groin pain is diminishing. It is so exciting for me to realize that, with persistence in using the OPTI-STRETCH program, I can do the strenuous exercise that I used to love.</p>
          <p>"Oh, by the wa, this program is not just for young folks. I am a 58 year old with some arthritis. It has already done wonders for me, and I haven’t reached my optimal level of stretching yet.</p>
          <p>I have done the beginning exercises on a regular basis and they have helped more than I thought possible. I’m very pleased with the program."</p>
          <p>-Lorraine</p>
        </quote>
        <quote>
          <p>"I attended your series of classes for OPTI-STRETCH a few years ago to try and find relief from chronic back pain. I found that the stretches taught in your program worked specific areas that I was having trouble in.</p>
          <p>Thank you so much for your many years of research and trials in developing this program."</p>
          <p>-Holly</p>
        </quote>
        <quote>
          <p>I have done the beginning exercises on a regular basis and they have helped more than I thought possible.  I’m very pleased with the program.</p>
          <p>-Bob</p>
        </quote>
      </p>
    </div>
    </div>
  </div>
@stop

@section('footerscripts')
  @parent
  <script src="/assets/js/fp.js"></script>
  <script type="text/javascript" src="/assets/js/wz_tooltip.js"></script>
@stop
