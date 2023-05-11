@extends('layout.master')
@section('title')
Single Item
@endsection
@section('css')

@endsection


{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')
<div class="container profile">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="https://i.imgur.com/Dhebu4F.jpg" width="250" /> </div>
                            {{-- <div class="thumbnail text-center"> <img onclick="change_image(this)" src="https://i.imgur.com/Rx7uKd0.jpg" width="70"> <img onclick="change_image(this)" src="https://i.imgur.com/Dhebu4F.jpg" width="70"> </div> --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            {{-- <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1">Back</span> </div> <i class="fa fa-shopping-cart text-muted"></i>
                            </div> --}}
                            {{-- <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Orianz</span> --}}
                                <h5 class="text-uppercase">Men's slim fit t-shirt</h5>
                                <div class="price d-flex flex-row align-items-center">
                                    <div class="ml-2"> <small class="dis-price">$59</small> </div>
                                </div>
                            {{-- </div> --}}
                            <p class="about">Shop from a wide range of t-shirt from orianz. Pefect for your everyday use, you could pair it with a stylish pair of jeans or trousers complete the look.</p>
                            <div class="col-sm-12">
                                <a class="btn btn-primary " target="__blank" href="{{ url('Edit') }}">Edit</a>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

