@extends('puplicUser.layout.master')
@section('title')
   search
@endsection
@section('css')
    
@endsection


{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')

<div class="container">
    <div class="row" style="margin-top: 14rem">

   @foreach ($results as $Playground)
       
   <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="probootstrap-room">
     <a href=""><img src={{URL::asset("storage/image/$Playground->image")}} style="width:450px; height:250px; border-radius:8px 8px 0 0;" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
     <div class="text">
     
       <h4>{{$Playground->name}}</h4>
       <p> Swimming pool <strong>$29.00/Hour</strong></p>
       <p><a href="{{route('book', $Playground->id)}}" class="btn btn-primary" role="button">Reserve now for $29.00</a></p>
    
    </div>
           </div>
  </div>
@endforeach
</div>
</div>
@endsection

