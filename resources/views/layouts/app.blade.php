<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Performance Science</title>

        <!-- Scripts -->
        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link rel="icon" href="{{ url('images/favicon.png') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <!-- Additional Styles -->
        <style>
              main{
            background-image: url({{ asset('images/patterns/wall4.png') }})
        } 
            #title{
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-weight: bold;
                cursor: pointer;
                color:#B0C4DE;
                font-size: 25px;
                padding: 15px;
            }
            #titleUrl{
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-weight: bold;
                cursor: pointer;
                color:#AFEEEE;
                font-size: 25px;
                padding: 15px;
            }
            #Logo1{
                width: 170px;
                height: 60px;
                border-right: solid 1pt;
                cursor: pointer;
            }
            #link{
                font-size: 1.1em !important;
                color: #DEB887;
                text-decoration: none;
                padding: 15px;
                text-align: center;
                font-weight: bold;
            }
            #link:hover{
                color: #FFDEAD;
                text-decoration: none;
            }
            #link:active{
                color: #CD853F;
                text-decoration: none;
            }
            #navbarDropdown{
                font-size: 1.1em !important;
                color: #DEB887;
                text-decoration: none;
                padding: 15px;
                text-align: center;
                font-weight: bold;
            }
            #navbarDropdown:hover{
                color: #FFDEAD;
                text-decoration: none;
            }
            #navbarDropdown:active{
                color: #CD853F;
                text-decoration: none;
            }
            #footer_logo{
                width: 210px;
                height: 80px;
                cursor: pointer;
            }
            footer{
                background-color: #3f3f3f;
                color: #d5d5d5;
                padding-top: 2rem;
                margin-top: 1rem;
            }
            footer a{
                color: #d5d5d5;
            }
            h5{
                font-weight: bold;
            }  
            #footer_title{
                font-weight: bold; 
                color: #EEE8AA;
            }
            hr.light{
                border-top: 1px solid #d5d5d5;
                width: 75%;
                margin-top: .8rem;
                margin-bottom: 1.5rem;
            }
            #link_email{
                font-size: 1em !important;
                color: #00CED1;
                text-decoration: none;
                text-align: center;
                font-weight: bold;
            }
            #link_email:hover{
                color: #1E90FF;
                text-decoration: none;
            }
            #link_email:active{
                color: #00FF00;
                text-decoration: none;
            }
            #footer_sub{
                color: #EEE8AA;
            }
            .social a{
                font-size: 2em;
                padding: 1rem
            }
            .fa-facebook{
                color: #3b5998;
            }
            .fa-twitter{
                color: #00aced;
            }
            .fa-instagram{
                color: #3f729b;
            }
            .fa-linkedin{
                color: #0e76a8;
            }
            .fa-youtube{
                color: #bb0000;
            }
            .fa-facebook:hover, .fa-twitter:hover, .fa-instagram:hover, .fa-linkedin:hover, .fa-youtube:hover{
                color: #d5d5d5;
            }
            @media all and (min-width: 992px) {
                .navbar .nav-item .dropdown-menu{ display: none; }
                .navbar .nav-item:hover .nav-link{   }
                .navbar .nav-item:hover .dropdown-menu{ display: block; }
                .navbar .nav-item .dropdown-menu{ margin-top:0; }
            }
        </style>
    </head>
    
    <!-- Start of Header -->
    <header>
        <div id="app" style="background-color: white">
            <nav class="navbar navbar-expand-md navbar-light shadow-sm sticky-top" style="background-color: #26282A">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/') }}" id="title" style="text-shadow: 2px 2px black;"> 
                        {{-- <img src="{{ asset('/images/logo_white.png') }}" id="Logo1" class="img-fluid" /> --}}
                        Performance Science
                    </a>

                    <!--Upon resizing -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>  

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                {{-- <a class="nav-link" id="link" aria-current="page" href="{{ route('home') }}">Home</a> --}}
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="link" href="/categories">Communities</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="link" href="{{ url('other') }}">Related Links</a>
                            </li>

                            <!-- Authentication Links -->
                            {{-- @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" id="link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" id="link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->username }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <!-- To Dashboard Link, by getting the current user -->
                                        <a class="dropdown-item" href="/users/{{Auth::user()->id}}"> 
                                            Dashboard
                                        </a>

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest --}}
                        </ul>
                    </div>
                </div>
            </nav>
            <main>
                {{-- @include('inc.messages')
                @include('inc.messages') --}}
                @yield('content')
            </main>
        </div>
    </header>
    <!-- End of Header -->

    <!-- Footer -->
    <footer>
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col">
                    {{-- <a href="{{ '/' }}"><img src="{{ asset('/images/logo_white.png') }}" id="footer_logo" /></a> --}}

                    <hr class="light">
                    <h5 id="footer_title"> Performance Science </h5>
                    <hr class="light">

                    <h5 style="color: #EEE8AA"> Our Social Media </h5>
                    <div class="social" style="margin-top: 20px">
                        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col">
                    <hr class="light">
                    <h5 id="footer_sub"> Contact Us </h5>
                    <hr class="light">
                    
                    <p> Tel:
                    (+254) (0)703-034000/200/300</p>
                    <p> (+254) (0) 730-734000/200/300 </p>
                    <p> Email: 
                    <a href="#" id="link_email">info@performance_science.edu</a></p>

                    <hr class="light" style="margin-top: 20px">
                    <h5 id="footer_sub"> Address </h5>
                    <hr class="light">

                    <p> Ole Sangale Road, off Langata Road, in Madaraka Estate, Nairobi, Kenya. </p>
                </div>
                {{-- <div class="col-md-4">
                    <hr class="light">
                    <h5 id="footer_sub"> Related Links </h5>
                    <hr class="light">

                    <a href="https://strathmore.edu" id="link" target="_blank"> <p> Strathmore Univeristy Website </p> </a>
                    <a href="https://elearning.strathmore.edu" id="link" target="_blank"> <p> Strathmore Univeristy E learning </p> </a>
                    <a href="https://su-sso.strathmore.edu/susams" id="link" target="_blank"> <p> Strathmore University AMS </p> </a>
                </div> --}}
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
</html>