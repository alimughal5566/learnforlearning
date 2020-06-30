{{--@extends('layouts.app', ['class' => 'login-page', 'page' => __('Login Page'), 'contentClass' => 'login-page'])--}}

{{--@section('content')--}}
{{--    <div class="col-md-10 text-center ml-auto mr-auto">--}}
{{--        <h3 class="mb-5">Log in to see how you can speed up your web development with out of the box CRUD for #User Management and more.</h3>--}}
{{--    </div>--}}
{{--    <div class="col-lg-4 col-md-6 ml-auto mr-auto">--}}
{{--        <form class="form" method="post" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <div class="card card-login card-white">--}}
{{--                <div class="card-header">--}}
{{--                    <img src="{{ asset('black') }}/img/card-primary.png" alt="">--}}
{{--                    <h1 class="card-title">{{ __('Log in') }}</h1>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <p class="text-dark mb-2">Sign in with <strong>admin@black.com</strong> and the password <strong>secret</strong></p>--}}
{{--                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">--}}
{{--                        <div class="input-group-prepend">--}}
{{--                            <div class="input-group-text">--}}
{{--                                <i class="tim-icons icon-email-85"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">--}}
{{--                        @include('alerts.feedback', ['field' => 'email'])--}}
{{--                    </div>--}}
{{--                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">--}}
{{--                        <div class="input-group-prepend">--}}
{{--                            <div class="input-group-text">--}}
{{--                                <i class="tim-icons icon-lock-circle"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <input type="password" placeholder="{{ __('Password') }}" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">--}}
{{--                        @include('alerts.feedback', ['field' => 'password'])--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-footer">--}}
{{--                    <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3">{{ __('Get Started') }}</button>--}}
{{--                    <div class="pull-left">--}}
{{--                        <h6>--}}
{{--                            <a href="{{ route('register') }}" class="link footer-link">{{ __('Create Account') }}</a>--}}
{{--                        </h6>--}}
{{--                    </div>--}}
{{--                    <div class="pull-right">--}}
{{--                        <h6>--}}
{{--                            <a href="{{ route('password.request') }}" class="link footer-link">{{ __('Forgot password?') }}</a>--}}
{{--                        </h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--@endsection--}}
@extends('layouts.master')
@section('title','SignIn')
@section('content')

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/login2.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/mdb.min.css')}}">

    <section id="slider-part" class="slider-active">
        <div class="single-slider slider-4 bg_cover pt-150">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont slider-cont-4 text-center">
                            <h1 data-animation="fadeInUp" data-delay="1s">REGISTER</h1>
                            <p data-animation="fadeInUp" data-delay="1.5s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    </section>

    <section class="main-section">
        <div class="container">
            <div class="main-cont">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <div class="form-parts">
                            <div style="display:flex;width:100%;">
                                <form class="form" method="post" action="{{ route('login') }}">
                                    @csrf
                                    <div style="width:100%;">
                                        <h3 class="level-heading" >Login</h3>
                                    </div>
                                    <div style="width:100%;">
                                        <input type = "email" name="email" placeholder="Email Address">
                                    </div>
                                    <div style="width:100%;">
                                        <input type = "password" name="password" placeholder="Write your Password">
                                    </div>
                                    <div style="width:100%;">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
                                        <label class="form-check-label" for="invalidCheck">
                                            Remember me
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary active" >LOGIN</button>

                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center justify-content-center" id="submit-btn">
                            <img src="{{asset('asset/images/students/registration-banner.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
