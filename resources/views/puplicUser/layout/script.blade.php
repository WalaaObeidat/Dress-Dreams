<title>@yield('title')</title>
<script type="text/javascript" src="{{URL::asset("userSide/js/scripts.min.js") }}"></script>
  <script type="text/javascript"src="{{URL::asset("userSide/js/main.min.js") }}"></script>
  <script type="text/javascript" src="{{URL::asset("userSide/js/custom.js") }}"></script>
  <script type="text/javascript" src="{{URL::asset("https://kit.fontawesome.com/ff9f0b7ce3.js") }}" crossorigin="anonymous"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script> --}}


  @yield('script')

  {{-- <script type="text/javascript" src="{{URL::asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script> --}}