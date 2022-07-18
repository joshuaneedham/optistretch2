@extends('layouts.master')
    @section('title')@parent:: Knowledge Base @endsection
@section('content')
    <div class="container content-wrap">
        <div class="row">
            @include('includes.frontleft')
            <div class="col-md-9 body-content fp-main">
                <h1>Reset Your Password</h1>
                <form method="POST" action="{{route('password.update')}}" accept-charset="UTF-8">
                    @csrf
                    <input type="hidden" name="token" value="{{{ $token }}}">

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" placeholder="Password" type="password" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">password_confirmation</label>
                        <input class="form-control" placeholder="password_confirmation" type="password" name="password_confirmation" id="password_confirmation">
                    </div>

                    @if (Session::get('error'))
                        <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
                    @endif

                    @if (Session::get('notice'))
                        <div class="alert">{{{ Session::get('notice') }}}</div>
                    @endif

                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@section('footerscripts')
        @parent
        <script src="/assets/js/fp.js"></script>
        <script type="text/javascript" src="/assets/js/wz_tooltip.js"></script>
@stop 
@endsection
