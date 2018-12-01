<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cygnite</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{asset("lib/easing/easing.min.js")}}"></script>
    <script src="{{asset("lib/superfish/hoverIntent.js")}}"></script>
    <script src="{{asset("lib/superfish/superfish.min.js")}}"></script>
    <script src="{{asset("lib/wow/wow.min.js")}}"></script>
    <script src="{{asset("lib/venobox/venobox.min.js")}}"></script>
    <script src="{{asset("lib/owlcarousel/owl.carousel.min.js")}}"></script>

    <!-- Contact Form JavaScript File -->
    <script src="{{asset("contactform/contactform.js")}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset("js/main.js")}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset("lib/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
    <link href="{{asset("lib/animate/animate.min.css")}}" rel="stylesheet">
    <link href="{{asset("lib/venobox/venobox.css")}}" rel="stylesheet">
    <link href="{{asset("lib/owlcarousel/assets/owl.carousel.min.css")}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    @include('ckfinder::setup')
    <style media="screen">
    CKFinder.widget( 'ckfinder-widget', {
        width: '100%',
        height: 700
    } );
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel" style="background-color: #32384D;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('blog') }}">
                    <i class="fa fa-dashboard fa-2x"></i> Cygnite Blog Dashboard
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-sign-in fa-1.5x"></i> {{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-user-plus fa-1.5x"></i> {{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item">
                                <!-- <a class="nav-link btn btn-outline-info mr-3" href="{{ route('blog.create') }}"><i class="fa fa-plus fa-1.5x"></i> Create Article</a> -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-primary mr-3" data-toggle="modal" data-target="#exampleModal">
                                  <i class="fa fa-plus fa-1.5x"></i> Create Article
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content text-white" style="background-color: #217CA3;">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Fill Form</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                          <form method="POST" action="{{route('blog.store')}}" enctype="multipart/form-data">
                                              @csrf
                                            <div class="form-group">
                                              <label for="title">Title</label>
                                              <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                            </div>
                                            <div class="form-group mb-4">
                                              <label for="content">Content</label>
                                              <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                                            </div>
                                            <div class="custom-file mb-4">
                                              <input type="file" class="custom-file-input" id="customFile" name="cover">
                                              <label class="custom-file-label" for="customFile">Upload Cover Image</label>
                                             </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-outline-info"><i class="fa fa-save"></i> Save Changes</button>
                                            </div>
                                          </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user-circle-o fa-1.8x"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out fa-1.5x"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
{{--     <script src="{{ asset("vendor/unisharp/laravel-ckeditor/ckeditor.js") }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script> --}}
</body>
</html>
