@extends('puplicUser.layout.master')
@section('title')
User Profile
@endsection
@section('css')
{{-- <link rel="stylesheet" href="userSide/css/style.css"> --}}
<style>
  .Pending{
    background-color: rgb(218, 214, 0);
    display: inline-block;
    font-size: 14px;
        color:rgb(255, 255, 255);
        border-radius:10px;
        padding:3px 6px;
        margin: 2px;
  }
  .Rejected{
    background-color: rgb(218, 58, 0);
    display: inline-block;
    font-size: 14px;
        color:rgb(255, 255, 255);
        border-radius:10px;
        padding:3px 6px;
        margin: 2px;
  }
  .Approved{
    background-color: rgb(0, 183, 49);
    display: inline-block;
    font-size: 14px;
        color:rgb(255, 255, 255);
        border-radius:10px;
        padding:3px 6px;
        margin: 2px;
  }
</style>

@endsection


{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')

<div class="container profile">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>John Doe</h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{Auth::user()->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{Auth::user()->email}}
                    </div>
                  </div>
                  <hr>
                  <table>
                    <caption>Reservation Summary</caption>
                    {{-- {{dd($Users->Reservations)}} --}}
              
              

                    <thead>
                      @foreach($Users->Reservations as $reservationData)
                      @if ($reservationData['Status'] == 'Accepted')
                      <tr>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-label="Account">{{$reservationData->first_name}}</td>
                        <td data-label="Due Date">{{$reservationData->last_name}}</td>
                        <td data-label="Amount">{{$reservationData->phone_number}}</td>
                        <td data-label="Period">{{$reservationData->Start_date}}</td>
                        <td data-label="Period">{{$reservationData->End_date}}</td>
                        <td data-label="Period"><span class="Approved">Approved</span></td>
                        <td><a href=" {{route('ReservstionEdit',$reservationData->id)}}" type="button" class="Editb">Edit</a></td>
                        
                        
                      </tr>
                
                  
                  @endif 
                  @endforeach

                    @foreach($Users->Reservations as $reservationData)
                    @if ($reservationData['Status'] == 'pending')
                    <tr>
                      <td >{{$reservationData->first_name}}</td>
                      <td >{{$reservationData->last_name}}</td>
                      <td >{{$reservationData->phone_number}}</td>
                      <td >{{$reservationData->Start_date}}</td>
                      <td >{{$reservationData->End_date}}</td>
                      <td ><span class="Pending">Pending</span></td>
                      <td><a href=" {{route('ReservstionEdit',$reservationData->id)}}" type="button" class="Editb">Edit</a></td>
                      
                    </tr>
              
                  @endif
                  @endforeach
                
                
               
               
                  @foreach($Users->Reservations as $reservationData)
                  @if ($reservationData['Status'] == 'rejected')
                  <tr>
                    <td data-label="Account">{{$reservationData->first_name}}</td>
                    <td data-label="Due Date">{{$reservationData->last_name}}</td>
                    <td data-label="Amount">{{$reservationData->phone_number}}</td>
                    <td data-label="Period">{{$reservationData->Start_date}}</td>
                    <td data-label="Period">{{$reservationData->End_date}}</td>
                    <td data-label="Period"><span class="Rejected">Rejected</span></td>
                    <td><a href=" {{route('ReservstionEdit',$reservationData->id)}}" type="button" class="Editb">Edit</a></td>
                  </tr>
                  @endif
                  @endforeach
                </tbody>
              </table>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-primary " target="__blank" href="{{route('profileEdit',Auth::user()->id)}}" >Edit</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>


@endsection

