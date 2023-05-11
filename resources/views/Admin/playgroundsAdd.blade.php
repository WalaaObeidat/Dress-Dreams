@extends('Admin.layouts.master')
@section('title')
Add Design
@endsection

@section('css')

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
            <div class="card-header" style="background: rgb(184, 92, 16) ;">
              <h3 class="card-title">Add Design</h3>
            </div> 

            <form action="{{route('playgrounds.store')}}" method="post" enctype="multipart/form-data">
                @csrf
               <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Design  Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>
                <div>
                  <label for="exampleInputEmail1"> price for Hour</label>
                  <input type="text" class="form-control" name="price" placeholder="Enter a price">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea  rows="4" cols="50" type="text" class="form-control" name="description" placeholder="Add description"></textarea>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                          <label>Choose a Category</label>
                          <select name="category_id" class="custom-select">
                            @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          {{-- isset($movie->image) ? $movie->image->movie_image : "" --}}
                          @endforeach
                        </select>
                      </div>
                    </div>
                <div class="form-group">
                  <label for="exampleInputFile">Add image</label>
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