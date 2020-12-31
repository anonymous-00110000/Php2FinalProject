<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/font.css') }}">
    <style>
        .double-nav .breadcrumb-dn {
  color: #fff;
}
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
        <a href="#" class="navbar-brand">My website</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
          <ul class="navbar-nav ml-auto text-style-14">
            <li clas="navbar-item">
              <a href="{{ url("/") }}" class="nav-link {{ request()->is('/')? 'active':'' }}"><i class="fas fa-home"></i>&nbsp;Home</a>
              </li>
              <li clas="navbar-item">
                <a href="{{ url('/contact') }}" class="nav-link {{ request()->is('contact')? 'active':'' }}"><i class="fas fa-id-card-alt"></i>&nbsp;Contact</a>
                </li>
              <li clas="navbar-item">
                <a href="{{ url('/about') }}" class="nav-link {{ request()->is('about')? 'active':'' }}"><i class="far fa-address-card"></i>&nbsp;About</a>
            </li>

             @if(Auth::check())

            <li clas="navbar-item">
                <a href="{{ url("/AddStudent") }}" class="nav-link {{ request()->is('AddStudent')? 'active':'' }}"><i class="fas fa-user-friends"></i>&nbsp;Student Registration</a>
            </li>
            <li clas="navbar-item">
                <a href="{{ url("/logout") }}" class="nav-link"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
            </li>
            @else

            <li clas="navbar-item">
                <a href=""  data-toggle="modal" data-target="#staticBackdrop" class="nav-link"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</a>
            </li>

            @endif

          </ul>
        </div>
      </nav>

         <main class="m-5 pt-4">
             @yield('content')
             @include('layouts.modal')

         </main>

              <!-- Optional JavaScript -->
              <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="{{ url('js/jquery-3.5.1.slim.min.js')}}"></script>
    <script src="{{ url('js/bootstrap.min.js')}}"></script>
    <script src="{{ url('js/popper.min.js')}}"></script>
    <script src="{{ url('js/10d850a305.js')}}"></script>
</body>
</html>
