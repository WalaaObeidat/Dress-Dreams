@extends('../puplicUser.layout.master')
@section('title')
Register
@endsection
@section('css')
<link rel="stylesheet" href="{{asset("userSide/register/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css")}}">
<link rel="stylesheet" href="{{asset("userSide/register/css/style.css")}}">
@endsection

{{--============= showCase ===============--}}Q
@section('showCase')

@endsection
{{--============= contant ===============--}}
@section('contant')
<div class="wrapper" style="background-image: url('img/img_17.jpg');">
    <div class="inner " style="width: 700px !important">
        <div class="image-holder">
            <img src="img/img_13.jpg" alt="" style="height: 100%">
        </div>
        <form  action="{{ route('register') }}" method="post">-

            <h3>Registration </h3>
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="form-wrapper">
                <input type="password" placeholder="Password" class="form-control">
                <i class="zmdi zmdi-lock"></i>
            </div>
            <div class="form-wrapper">
                <input type="password" placeholder="Confirm Password" class="form-control">
                <i class="zmdi zmdi-lock"></i>
            </div>
            <button>Register
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
        </form>
    </div>
</div>

@endsection
