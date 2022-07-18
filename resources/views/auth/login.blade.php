
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
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <form role="form" method="POST" action="{{ route('login') }}" accept-charset="UTF-8">
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="email">E-Mail</label>
                                        <input class="form-control {{ $errors->has('email') && Session::get('last_auth_attempt') == 'login' ? ' error' : '' }}" tabindex="1" placeholder="Email" type="text" name="email" id="email" value="{{{ old('email') }}}">
                                        @if ($errors->has('email') && Session::get('last_auth_attempt') == 'login')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password">
                                            password
                                        </label>
                                        <input class="form-control {{ $errors->has('email') && Session::get('last_auth_attempt') == 'login' ? ' error' : '' }}" tabindex="2" placeholder="Password" type="password" name="password" id="password">
                                            @if ($errors->has('password') && Session::get('last_auth_attempt') == 'login')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        <p class="help-block">
                                            <a href="{{ route('password.request') }}">(forgot password)</a>
                                        </p>
                                    </div>
                                    <div class="checkbox">
                                        <label for="remember">
                                            <input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
                                            Remember me
                                        </label>
                                    </div>
                                        @if (Session::get('error'))
                                        <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
                                        @endif
                                
                                        @if (Session::get('notice'))
                                        <div class="alert">{{{ Session::get('notice') }}}</div>
                                        @endif
                                    <div class="form-group">
                                        <button tabindex="3" type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 signup">
                        <div class="well">
                            <h3>Signup</h3>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="name">Username</label>
                                            <input id="username" type="text" class="form-control {{ $errors->has('username') && Session::get('last_auth_attempt') == 'register' ? ' error' : '' }}" value="{{old('name')}}" placeholder="Name" name="username" autocomplete="name">
                                            @if ($errors->has('username') && Session::get('last_auth_attempt') == 'register')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $errors->first('username') }}</strong>
                                                </span>
                                            @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email Confirmation required</label>
                                            <input id="email" type="email" class="form-control {{ $errors->has('email') && Session::get('last_auth_attempt') == 'register' ? ' error' : '' }}" value="{{old('email')}}" placeholder="Email" name="email" autocomplete="email">
                                            @if ($errors->has('email') && Session::get('last_auth_attempt') == 'register')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" type="password"  placeholder="Password" class="form-control {{ $errors->has('password') && Session::get('last_auth_attempt') == 'register' ? ' error' : '' }}" name="password" autocomplete="new-password">
                                            @if ($errors->has('password') && Session::get('last_auth_attempt') == 'register')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirm">Confirm Password</label>
                                            <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"> Create new account</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
