@extends('puplicUser.layout.master')
@section('title')
User Profile
@endsection
@section('css')
{{-- <link rel="stylesheet" href="userSide/css/style.css"> --}}
<link rel="stylesheet" href="userSide/css/editUserprofile.css">

@endsection


{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')

<div class="container profile lb">
    <div class="main-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150"> 
                            <div class="mt-3">
                                <h4>{{$Users->name}}</h4>
                                <p class="text-secondary mb-1">Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{route('profileUpdate',Auth::user()->id)}}" method="post" class="probootstrap-form">
                @method('GET')
                @csrf
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" name="name" value="{{$Users->name}}">
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="fname" name="user_id" value="{{Auth::user()->id}}">
                        <br>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="{{Auth::user()->email}}">
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Submit">Submit</button>
                    </div>
                </div>
            </div>
            </form>

         </div>
    </div>
</div>
    



@endsection

