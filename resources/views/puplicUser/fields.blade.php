@extends('puplicUser.layout.master')
@section('title')
   Designs
@endsection
@section('css')
    
@endsection


{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')


<br>
<br>
<br>
<br>


<section class="probootstrap-section">
  <div class="container">
    <div class="row">
      @foreach($Playgrounds as $Playground)
      <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="probootstrap-room">
              {{-- <img src="{{URL::asset("storage/image/$Playground->image")}} --}}
              <a href=""><img src={{URL::asset("storage/image/$Playground->image")}} style="width:300px; height:300px; border-radius:8px 8px 0 0;" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
              <div class="text">
              {{-- {{dd($Playground)}}  --}}
                <h4>{{$Playground->name}}</h4>
                <p> {{$Playground->Categories->name}} <strong>{{$Playground->price}} JOD </strong></p>
                {{-- <div class="post-meta mb30">
                </div> --}}
                <p><a href="{{route('book', $Playground->id)}}" class="btn btn-primary" role="button"> Book for Hour {{$Playground->price}} JOD</a></p>
              {{-- </div>
            </div> --}}
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection

