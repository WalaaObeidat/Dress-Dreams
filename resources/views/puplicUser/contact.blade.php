@extends('puplicUser.layout.master')
@section('contact')

@endsection
@section('css')

@endsection


{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')
<section class="probootstrap-slider flexslider probootstrap-inner">
    <ul class="slides">
       <li style="background-image: url(/img/contactus.jpeg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  {{-- <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p> --}}
                  <h1 class="probootstrap-heading probootstrap-animate">Contact</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap"></div>
                </div>
              </div>
            </div>
          </div>
        </li>
    </ul>
</section>

  <section class="probootstrap-section">
    <div class="container">
      <div class="row probootstrap-gutter60">
        <div class="col-md-8">
          <h2 class="mt0">We can do this together, let’s try.</h2>
          <form action="#" method="post" class="probootstrap-form">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" id="fname" name="fname">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="lname">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <h2 class="mt0">Get In Touch</h2>
          <ul class="probootstrap-contact-info">
            <li><i class="icon-location2"></i> <span>Aqaba,Jordan</span></li>
            <li><i class="icon-mail"></i><span>info@DressDreams.com</span></li>
            <li><i class="icon-phone2"></i><span>+962 791148057<span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

 <div class=" map" style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Aqaba,%20Jordan+(Aqaba%20city)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure area map</a></iframe>
</div> 
  <br>
@endsection

