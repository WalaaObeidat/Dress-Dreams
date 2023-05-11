@extends('Admin.layouts.master')
@section('title')

@endsection

@section('TheHead')
Designs  Table
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
        color:rgb(0, 0, 0);
        border-radius:10px;
        padding:5px 10px;
        transition: 0.5s;
    }
    .Editb:hover{
        background-color: rgb(197, 100, 26);
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
        color: rgb(203, 112, 38);
    }
</style>
<a href="{{route('playgrounds.create')}}" type="button" class="btn btn-inline bg-gradient-success btn-sm" style=""> Add Design </a>
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
                <th>Name</th>
                <th>More Details</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
                 <?php
                $i=1
                ?>
                @foreach ($playgrounds as $playground)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$playground->name}}</td>
                <td><a href="{{route('playgrounds.show',$playground->id)}}" class="MoreDatails"> See more details .. </a></td>
                <td><a href="{{route('playgrounds.edit',$playground->id)}}" type="button" class="Editb">Edit</a></td>
                <td><form class="butnMargin" action="{{route('playgrounds.destroy',$playground->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="DeleteB">Delete</button>
                   </form>
                </td>
    
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection 

@section('script')

@endsection 