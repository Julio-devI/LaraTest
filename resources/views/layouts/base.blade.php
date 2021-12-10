<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Classic - Responsive Bootstrap 4.0 Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">                                 
    <link rel="stylesheet" href="{{asset('css/templatemo-style.css')}}">                                 
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    @livewireStyles
</head>

<body>
    <div class="tm-header">
        <div class="container-fluid">
            <div class="tm-header-inner">
                <a href="#" class="navbar-brand tm-site-name">Classic</a>
                    <!-- navbar -->
                <nav class="navbar tm-main-nav">
                    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                        &#9776;
                    </button>
                        
                    <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item active">
                                <a href="index.html" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link">Séries</a>
                            </li>
                            <li class="nav-item">
                                <a href="blog.html" class="nav-link">Fitness</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Movies</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('register')}}" class="nav-link">Register</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('login')}}" class="nav-link">Login</a>
                            </li>
                        </ul>                        
                    </div>
                </nav>  
            </div>                                  
        </div>            
    </div>

    <div class="tm-home-img-container">
        <img src="{{asset('img/tm-home-img.jpg')}}" alt="Image" class="hidden-lg-up img-fluid">
    </div>

    {{$slot}}
        
    <footer class="tm-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 tm-copyright-col">
                    <p class="tm-copyright-text">Copyright 2021 julioDevI</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- load JS files -->
    <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>             
    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>  
    <script src="{{asset('js/bootstrap.min.js')}}"></script>                 
    @livewireScripts
    </body>
</html>