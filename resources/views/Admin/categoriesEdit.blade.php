@extends('Admin.layouts.master')
@section('title')

@endsection

@section('css')
<style>
.desss{
    width: 100%;
    height: 75px;
    display: inline;
}

</style>
@endsection

@section('title_page')

@endsection

@section('title_page2')

@endsection


@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
      
        <div class="col-md-8">
         
          <div class="card card-primary">
            <div class="card-header"style="background: rgb(184, 92, 16) ">
              <h3 class="card-title">Add Category</h3>
            </div> 

            <form action="{{route('categories.update',$CategoriesEdit->id)}}" method="post" enctype="multipart/form-data"> 
                @method('PUT')
                @csrf
               <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
                  <input type="text" class="form-control" name="name" value="{{$CategoriesEdit->name}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">description</label>
                  <input type="text" class="form-control desss" name="description" value="{{$CategoriesEdit->description}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image">
                      <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                  </div>
                </div>
              </div>
              
              <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="background: rgb(184, 92, 16) ; border:rgb(184, 92, 16)">Submit</button>
              </div>
            </form>
          </div>
        </div>
    </section>
    

@endsection 

@section('script')

@endsection 











