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

<section class="probootstrap-section">
    <div class="container">
      <div class="row probootstrap-gutter40">
        <div class="col-md-6">
          <?php
          $i = 1;
          ?>
          {{-- {{dd($ReservationE)}} --}}
          {{-- @foreach ($ReservationE as $Reservation) --}}
          
          <h2 class="mt0">Reservation Edit num{{$i++}}</h2>
          <form action="{{route('ReservstionUpdate',$ReservationE->id)}}" method="post" class="probootstrap-form">
            @method('GET')
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">First Name</label>

                  <input type="text" class="form-control" id="fname" name="first_name" value="{{$ReservationE->first_name}}" class="@error('first_name') is-invalid @enderror"
                  >
                  <input type="hidden" class="form-control" id="fname" name="user_id" value="{{Auth::user()->id}}">
                  
                  @error('first_name')
                     <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="last_name" value="{{$ReservationE->last_name}}" class="@error('last_name') is-invalid @enderror">
                  @error('last_name')
                  <div class="alert alert-danger">{{ $message }}</div>
               @enderror
                </div>
              </div>
            </div>
            <div class="form-group">
                <label for="email">Phone</label>
                <div class="form-field">
                  <input type="text" class="form-control" id="email" name="phone_number" value="{{$ReservationE->phone_number}}" class="@error('phone_number') is-invalid @enderror">
                  @error('phone_number')
                  <div class="alert alert-danger">{{ $message }}</div>
               @enderror
                </div>
              </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="date-arrival">Start Date</label>
                  <div class="form-field">
                    {{-- <i class="icon icon-calendar2"></i> --}}
                    {{-- <input type="date" class="form-control" id="date-arrival" name="date-arrival"> --}}
                   <input type="dateTime-local" class="form-control" id="date_arr" name="Start_date" value="{{$ReservationE->Start_date}}" class="@error('Start_date') is-invalid @enderror">
                   @error('Start_date')
                   <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            

                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="date-departure">End Date</label>
                  <div class="form-field">
                    {{-- <i class="icon icon-calendar2"></i> --}}
                    {{-- <input type="date" class="form-control" id="date-departure" name="date-departure"> --}}
                    <input type="datetime-local" class="form-control" id="date_end" name="End_date" value="{{$ReservationE->End_date}}" class="@error('End_date') is-invalid @enderror"> 
                    @error('End_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                 
                </div>
              </div>
            </div>
          </div>
          {{-- @endforeach --}}
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Submit">Submit</a></button>
            </div>
          </form>
        </div>
                    </div>
                </div>
            </div>

@endsection