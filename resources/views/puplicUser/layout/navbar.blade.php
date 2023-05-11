@section('script')

  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script> --}}


<script type="text/javascript" src="{{URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js') }}"></script>




@endsection
<!-- header section starts  -->

 <header class="lb">

  {{-- <div id="menu-bar" class="fas fa-bars "></div> --}}

  <a class="logo" href="{{ route('puplicUser.welcome') }}"><img src="/img/logo.png" class="hires" width="250" height="80" alt="Free Bootstrap Template by uicookies.com"></a>

  {{-- <a href="#" class="logo"><span>T</span>ravel</a> --}}

  <nav class="navbar">
      <a href="{{ route('puplicUser.welcome') }}">Home</a>
      <a href="{{route('fieldsItem') }}">Designs</a>
      <a href="{{ url('/about') }}">About</a>
      <a href="{{ url('/contact') }}">Contact</a>
  </nav>

      <div class="nav-item dropdown" style="color:#030303;
      font-size: 2rem;
      margin:0 .8rem;
      padding-left: 20px;
      font-family: 'Times New Roman', Times, serif;">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-user"></i> Username
     </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      @if(Auth::user())
      <li><a class="dropdown-item" href="{{route('profile',Auth::user()->id)}}"><i class="fa fa-user"></i> Profile</a></li>
      <li><a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-user-plus"></i></i> logout</a></li>
      @endif
      {{-- {{route('logout')}} --}}
      @if(!Auth::user())
      <li><a class="dropdown-item" href="{{ route('register') }}"><i class="fa fa-user-plus"></i></i> Register</a></li>
      <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
      @endif
    </ul>
  </div>


  {{-- <form action="" class="search-bar-container">
      <input type="search" id="search-bar" placeholder="search here...">
      <label for="search-bar" class="fas fa-search"></label>
  </form> --}}

</header>

<!-- header section ends -->

