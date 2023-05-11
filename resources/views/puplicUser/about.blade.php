@extends('puplicUser.layout.master')
@section('title')
about
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
       <li style="background-image:url(img/img_15.jpg);" class="overlay" style="background-size: cover">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading probootstrap-animate">About Us</h1>
                  {{-- <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div> --}}
                </div>
              </div>
            </div>
          </div>
        </li>
    </ul>
  </section>

  {{--  --}}


 <section id="about" class="about">
  <div class="container" data-aos="fade-up">

    {{-- <div class="row position-relative"> --}}
    <div class="row lb">


      <div class="col-lg-5 about-img "><img src="https://i.pinimg.com/736x/19/f9/c1/19f9c15401c4cd2df3f22437033f9be9--fashion-drawings-fashion-sketches.jpg" style="margin: 0.25rem -2rem;" width="500px" height="349px" alt=""> </div>

      <div class="col-lg-7 " style="margin-top:0.25rem ;background-color: rgba(255,255,255,.6);">
        {{-- <h2 class="text-center">Aqaba Fields Corner</h2> --}}
        <div class="our-story" style="padding-left: 20px;">
          {{-- <h4>Est 1988</h4> --}}
          <h3>Our Vision</h3>
          <p>"My Dress Dreams" is a dress design website that is dedicated to helping users bring their dream dress designs to life. Our website offers a range of services and resources to help users create their perfect dress design, whether they are beginners or experienced designers. such as:</p>
          <ul>
            <li><i class="bi bi-check-circle"></i> <span>Hijab Dress</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Ball Grwn Dress</span></li>
          </ul>
          <p>Therefore our vision is to provide platforms that focus on Aqaba designs</p>

          <div class="watch-video d-flex align-items-center position-relative">
            <i class="bi bi-play-circle"></i>
            {{-- <button><a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a></button> --}}
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<section >
  <div class="container" style="margin-top: 5rem;
  ">
    <div class="row mb30">
      <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
        <h2>what we offer</h2>
        {{-- <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
        {{-- <p><img src="img/curve.svg" class="svg" alt="Free HTML5 Bootstrap Template"></p> --}}
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="service left-icon probootstrap-animate">
          <div class="icon">
            <img style="height: 50px !important; width: 50px !important;" src="img/img_19.png" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
          </div>
          <div class="text">
            <h3>Team Work  </h3>
            <p>We all work to satisfy the visitors and users of our site</p>
            {{-- <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p> --}}
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service left-icon probootstrap-animate">
          <div class="icon">
            <img style="height: 50px !important; width: 50px !important;" src="img/img_20.jpg" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
          </div>
          <div class="text">
            <h3>One place to book</h3>
            <p>We offer multiple choices to book for different types of designs</p>
            {{-- <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p> --}}
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service left-icon probootstrap-animate">
          <div class="icon">
            <img style="height: 50px !important; width: 50px !important;" src="img/img_11.png" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
          </div>
          <div class="text">
            <h3>Without commissions</h3>
            <p>You can book hours through our website without any other costs </p>
            {{-- <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  


<!-- ======= Our Team Section ======= -->

{{-- <section class="probootstrap-section ">
    <div class="container" >
      <div class="row lb">
        <div class="section-header text-center">
          <h2>Our Team</h2><br> --}}
          {{-- <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p> --}}
        </div><br>
        
     
        
        {{-- <div class="row">

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <a href="#"><img src="img/wala.png" alt="Free Bootstrap Template by uicookies.com"  style="width: 300px; height:320px;margin-left:180px;" class="img-responsive"></a>
            <div class="text text-center">
              <h3>Walaa Obeidat</h3>
              <p>Web-Developer</p>
              <div class="post-meta mb30">
                <div > <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni, placeat? </p> </div>

              </div>
            </div>
          </div> --}}
        </div>
       
    </div>
  </section>
  <!-- End Our Team Section -->


@endsection



