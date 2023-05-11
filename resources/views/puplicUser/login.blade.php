@extends('puplicUser.layout.master')
@section('title')
login
@endsection
@section('css')
<link rel="stylesheet" href="{{asset("userSide/register/css/style.css")}}">
<link rel="stylesheet" href="{{asset("userSide/register/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css")}}">
@endsection


{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')
<div class="wrapper" style="background-image: url('img/img_9.jpg'); ">
    <div class="inner " style="width: 700px !important">
        <div class="image-holder">
            <img src="img/img_10.jpg" alt="" style="height: 100%">
        </div>
        <form action="">
            <h3>Login</h3>
            <div class="form-wrapper">
                <input type="text" placeholder="Email Address" class="form-control">
                <i class="zmdi zmdi-email"></i>
            </div>
            <div class="form-wrapper">
                <input type="password" placeholder="Password" class="form-control">
                <i class="zmdi zmdi-lock"></i>
            </div>
            <button>Login
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
            <p style="padding-top: 50px;"><a  style="text-decoration: none;"  href="{{ route('puplicUser.register') }}" >If you don't have account register here</a></p>
        </form>
    </div>
</div>
@endsection

