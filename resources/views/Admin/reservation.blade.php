@extends('Admin.layouts.master')
@section('title')

@endsection

@section('TheHead')
 Reservations Table
@endsection

@section('css')

@endsection

@section('title_page')

@endsection

@section('title_page2')

@endsection


@section('content')
<style>
    .DeleteB{
        background-color: rgb(255, 255, 255);
        color:rgb(253, 0, 0);
        border-radius:10px;
        padding:5px 10px;
        transition: 0.5s;
        border: none;
    }
    .DeleteB:hover{
        background-color: rgb(255, 0, 0);
        color:rgb(255, 255, 255);
    }
    .Editb{
        background-color: rgb(255, 255, 255);
        color:rgb(4, 88, 214);
        border-radius:10px;
        padding:5px 10px;
        transition: 0.5s;
        border: none;
    }
    .Editb:hover{
        background-color: rgb(4, 88, 214);
        color:rgb(255, 255, 255);
    }
    .MoreDatails{
        cursor: pointer;
        color: blue;
        transition: 0.1s;
        background: white;
        padding: 5px 15px;
        border-radius: 15px;

    }
    .MoreDatails:hover{
        scale:1.1;
        color: green;
    }



    .Thepennding:hover span {
  display:none
}

.Thepennding:hover:before {
  content:"Accept ..";
}

.Thepennding:hover {
  background-color: green;
}

.Accepted{
    background-color: rgb(0, 198, 0);
    display: inline-block;
        color:rgb(255, 255, 255);
        border-radius:10px;
        padding:5px 10px;
   
}
.Rejected{
  background-color: rgb(204, 58, 0);
    display: inline-block;
        color:rgb(255, 255, 255);
        border-radius:10px;
        padding:5px 10px;
}

</style>



<div>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>#</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Phone number</th>
                <th>User id</th>
                <th>Desgin name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Total price</th>
                <th>Status</th>
                
              </tr>
            </thead>
            <tbody>
                 <?php
                $i=1
                ?>
                @foreach ($reservations as $reservation)
                @if ($reservation->Status == 'pending')
                {{-- {{dd($reservation)}} --}}
              <tr>
                <td>{{$i++}}</td>
                <td>{{$reservation->first_name}}</td>
                <td>{{$reservation->last_name}}</td>
                <td>{{$reservation->phone_number}}</td>
                <td>{{$reservation->user_id}}</td>
                {{-- <td>{{isset($reservation->playgrounds->name)?$reservation->playgrounds->name:"no data"}}</td> --}}
                <td>{{($reservation->playgrounds->name)}}</td>
                <td>{{$reservation->Start_date}}</td>
                <td>{{$reservation->End_date}}</td>
                <td>{{$reservation->total_price}}</td>

                <td><form class="butnMargin" action="{{route('reservation.update', $reservation->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    <button href="" type="submit" class="Editb Thepennding"><span>Pending</span></button>
                   </form></td>

                   <td><form class="butnMargin" action="{{route('reservation.destroy', $reservation->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button href="" type="submit" class="DeleteB"><span>Reject</span></button>
                   </form></td>


                {{-- <td><a href="" class="MoreDatails"> See more details .. </a></td> --}}
                {{-- <td><a href="" type="button" class="Editb Thepennding"><span>Pendding</span></a></td>
                <td><form class="butnMargin" action="" method="post">
                    @method('DELETE')
                    @csrf
                    <td><button type="submit" class="DeleteB">Reject</button></td>
                   </form>
                </td> --}}
    
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>



  <h3 style="padding:120px 22px 0px 22px;">Reservation status</h3>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>#</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Phone number</th>
                <th>User id</th>
                <th>Desgin name</th>
                <th>Date of reservation</th>
                <th>time of reservation</th>
                <th>Total price</th>
                <th>Status</th>
              </tr>

            </thead>
            <tbody>
                 <?php
                $s=1
                ?>
                 @foreach ($reservations as $reservation)
                @if ($reservation->Status == 'Accepted')
              <tr>
                <td>{{$s++}}</td>
                <td>{{$reservation->first_name}}</td>
                <td>{{$reservation->last_name}}</td>
                <td>{{$reservation->phone_number}}</td>
                <td>{{$reservation->user_id}}</td>
                {{-- <td>{{isset($reservation->playgrounds->name)?$reservation->playgrounds->name:"no data"}}</td> --}}
                <td>{{($reservation->playgrounds->name)}}</td>
                <td>{{$reservation->Start_date}}</td>
                <td>{{$reservation->End_date}}</td>
                <td>{{$reservation->total_price}}</td>
                <td><span class="Accepted">Approved</span></td>

              </tr>
              @endif
              @endforeach



              <?php
              $s=1
              ?>
               @foreach ($reservations as $reservation)
              @if ($reservation->Status == 'rejected')
            <tr>
              <td>{{$s++}}</td>
              <td>{{$reservation->first_name}}</td>
              <td>{{$reservation->last_name}}</td>
              <td>{{$reservation->phone_number}}</td>
              <td>{{$reservation->user_id}}</td>
              {{-- <td>{{isset($reservation->playgrounds->name)?$reservation->playgrounds->name:"no data"}}</td> --}}
              <td>{{($reservation->playgrounds->name)}}</td>
              <td>{{$reservation->Start_date}}</td>
              <td>{{$reservation->End_date}}</td>
              <td>{{$reservation->total_price}}</td>
              <td><span class="Rejected">Rejected</span></td>

            </tr>
            @endif
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
@endsection 

@section('script')

@endsection 