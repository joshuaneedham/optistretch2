@extends('layouts.master')

@section('title')@parent:: Classes @endsection

@section('content')
  <div class="container content-wrap">
    <div class="row">
      @include('includes.frontleft')
    <div class="col-md-9 body-content fp-main">
      <h1 class="center">OPTI-STRETCH Instruction and Certification</h1>
      <br>
          <h3><strong>Private Group and Individual Classes</strong></h3>
          <p><strong>Email:</strong> <a href="mailto:optistretch@hotmail.com">optistretch@hotmail.com</a><br>
          <strong>Call:</strong> <a href="tel://(801)580-3714">(801)580-3714</a></p>
          <br>
          <h3><strong>Certification as an OPTI-STRETCH Instructor</strong></h3>
          <p><strong>Email:</strong> <a href="mailto:optistretch@hotmail.com">optistretch@hotmail.com</a><br>
          <strong>Call:</strong> <a href="tel://(801)580-3714">(801)580-3714</a></p>

    </div>
  </div>
</div>
@stop

@section('footerscripts')
  @parent
  <script src="/assets/js/fp.js"></script>
  <script type="text/javascript" src="/assets/js/wz_tooltip.js"></script>
@stop
