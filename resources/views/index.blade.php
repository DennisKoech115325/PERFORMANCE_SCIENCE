@extends('layouts.app')
@section('content')
    <style>
        #carouselCaption{
            top: 50%; 
            transform: translateY(-50%); 
            bottom: initial;
        }
        .fa-university, .fa-users, .fa-user-shield{
            color: #e54d26;
            font-size: 4em;
            margin: 1rem;
        }
    </style>
        <!-- Image Slider -->
        <div id="slides" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
            </ul>
    
            <div class="carousel-inner carousel-fade carousel-dark">
                <div class="carousel-item active">
                    <img src="{{ asset('images/student3.jpg') }}" alt="" style="width: 100%;">
                    <div class="carousel-caption" id="carouselCaption">
                        <h1 class="display-4 font-weight-bold p-3" style="color: #F5DEB3;  text-shadow: 2px 2px black;">
                            STRATHMORE COMMUNITIES
                        </h1>
                        <h3 class="font-weight-bold p-4" style="font-size: 1.7rem;color: #D2B48C; text-shadow: 2px 2px black;">
                            Be more, Be Strathmore... and join a Community
                        </h3>
                        <a class="btn btn-outline-info btn-lg font-weight-bold m-3" href="#">
                            View Communities
                        </a>
                        <a class="btn btn-outline-success btn-lg font-weight-bold m-3" href="#">
                            Get Started
                        </a>
                    </div>
                </div>
    
                <div class="carousel-item">
                    <img src="{{ asset('images/student2.jpg') }}" alt="" style="width: 100%;">
                    <div class="carousel-caption" id="carouselCaption">
                        <h1 class="display-4 font-weight-bold p-3" style="color: #D2B48C;  text-shadow: 2px 2px black;">
                            STRATHMORE COMMUNITIES
                        </h1>
                        <h3 class="font-weight-bold p-4" style="font-size: 1.7rem; color: #D2B48C; text-shadow: 2px 2px black;">
                            View and Interact with Posts in Different Communities
                        </h3>
                        <a class="btn btn-outline-info btn-lg font-weight-bold m-3" href="#">
                            View Communities
                        </a>
                        <a class="btn btn-outline-success btn-lg font-weight-bold m-3" href="#">
                            Get Started
                        </a>
                    </div>
                </div>
    
                <div class="carousel-item">
                    <img src="{{ asset('images/student1.jpg') }}" alt="" style="width: 100%">
                    <div class="carousel-caption" id="carouselCaption">
                        <h1 class="display-4 font-weight-bold" style="color: #FFDEAD; text-shadow: 2px 2px black;">
                            STRATHMORE COMMUNITIES
                        </h1>
                        <h3 class="font-weight-bold p-4" style="font-size: 1.7rem; color: #D2B48C; text-shadow: 2px 2px black;">
                            Join a Community and Get Updates
                        </h3>
                        <a class="btn btn-outline-info btn-lg font-weight-bold m-3" href="#">
                            View Communities
                        </a>
                        <a class="btn btn-outline-success btn-lg font-weight-bold m-3" href="#">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
    
            <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Jumbotron -->
        <div class="container-fluid">
            <div class="row jumbotron">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-12">
                    <p class="lead text-left p-4" style="font-size: 1.3rem">
                        <span class="font-weight-bold" style="font-size: 1.8rem;">Strathmore Communities</span> <br>
                        A Content Management System with the purpose of reducing information overload in the Strathmore University Emails
                    </p>
                </div>
                <br>
    
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <a class="p-3" href="#">
                        <button type="button" class="btn btn-outline-secondary btn-lg font-weight-bold">View Communities</button>
                    </a>
                </div>
            </div>
        </div>
        <!-- Welcome Section -->
        <div class="container-fluid p-4 m-4">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h1 class="h1">Welcome to Strathmore Communities</h1>
                </div>
                <hr class="light">
    
                <div class="col-12">
                    <p class="lead" style="font-size: 1.1rem;">
                        Strathmore Communities is a content management system that is aimed at reducing information overload in the student emails and providing students with the ability to follow through on categories which they find useful to themselves.
                    </p>
                </div>
            </div>
        </div>
    
        <!--Three Column Section -->
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-xs-12 col-sm-6 col-md-4 p-2">
                    <i class="fas fa-university"></i>
                    <h3 class="p-2"> Exclusive </h3>
                    <p class="lead" style="font-size: 1rem;">Strathmore Communities is exclusive to Strathmore University</p>
                </div>
                <br>
                <div class="col-xs-12 col-sm-6 col-md-4 p-2">
                    <br><br><br><br>
                    <i class="fas fa-users"></i>
                    <h3 class="p-2">Multiple Users</h3>
                    <p class="lead" style="font-size: 1rem;">Strathmore Communities can seemlessly serve a wide range of users at the same time</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 p-2">
                    <i class="fas fa-user-shield"></i>
                    <h3 class="p-2">Reliable and Secure</h3>
                    <p class="lead" style="font-size: 1rem;">User data is secure. No one can access your personal infomation</p>
                </div>
    
            </div>
        </div>
        <hr class="m-4">
    
        <!-- POSTS section -->
        <div class="container-fluid">
            <div class="row text-center welcome">
                <div class="col-12">
                    <h1 class="h1 p-4 font-weight-bold">Available Communities</h1>
                </div>            
            </div>
            <hr class="m-4">     
            
            <!-- Cards -->
            <div class="container-fluid" style="background-image: url({{ asset('images/community2.jpg') }}); background-size: cover; background-repeat: no-repeat; padding: 5rem;" >
                <div class="row">
                    <div class="col-sm-12">
                        <div id="inam" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="card h-100 m-1" style="opacity: 0.8">
                                                    <img class="card-img-top mx-auto" src="{{ asset('images/strath_logo.png') }}" style="width: 70%;" >
                                                    <div class="card-body d-flex flex-column text-center">
                                                        <h4 class="card-title font-weight-bold">Administration</h4>
                                                        <p class="card-text mx-auto my-auto font-weight-bold">Post from the Strathmore Iiversity Administration</p>
                                                        <a href="/categories/1" class="mt-auto btn btn-outline-info btn-lg">See Community</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="card h-100 m-1" style="opacity: 0.8">
                                                    <img class="card-img-top mx-auto" src="{{ asset('images/su_council.jpg') }}" style="width: 70%">
                                                    <div class="card-body d-flex flex-column text-center">
                                                        <h4 class="card-title font-weight-bold">Student Council</h4>
                                                        <p class="card-text mx-auto my-auto font-weight-bold">Student Council</p>
                                                        <a href="/categories/2" class="mt-auto btn btn-outline-info btn-lg">See Community</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="card h-100 m-1" style="opacity: 0.8">
                                                    <img class="card-img-top mx-auto" src="{{ asset('images/careers.PNG') }}" style="width: 70%">
                                                    <div class="card-body d-flex flex-column text-center">
                                                        <h4 class="card-title font-weight-bold">Career and Internship Opportunities</h4>
                                                        <p class="card-text mx-auto my-auto font-weight-bold">Career and Internship Opportunities</p>
                                                        <a href="/categories/5" class="mt-auto btn btn-outline-info btn-lg">See Community</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="card h-100 m-1" style="opacity: 0.8">
                                                    <img class="card-img-top mx-auto" src="{{ asset('images/communications.png') }}" style="width: 70%">
                                                    <div class="card-body d-flex flex-column text-center">
                                                        <h4 class="card-title font-weight-bold">Strathmore Communications</h4>
                                                        <p class="card-text mx-auto my-auto font-weight-bold">Strathmore Communications</p>
                                                        <a href="/categories/3" class="mt-auto btn btn-outline-info btn-lg">See Community</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#inam" class="carousel-control-prev" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a href="#inam" class="carousel-control-next" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection