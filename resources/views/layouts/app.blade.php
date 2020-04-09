<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lottery') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <link href="{{asset('web/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('web/css/style.css')}}" rel='stylesheet' type='text/css' />  
<link rel="stylesheet" href="{{asset('web/css/slider.css')}}">
<script src="{{asset('web/js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/web/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/easing.js')}}"></script>
<!--/web-font-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<!--/script-->
<script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
                });
            });
</script>
</head>

<body>
    <div id="app">
     <div class="main-header" id="house">
            <div class="header-strip">
               <div class="container">
                <p class="location"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="">0332 2867233 easypaisa</a></p>
                <p class="phonenum"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 03006286318 jazcash</p>
                <div class="social-icons">
                    <ul>                    
                        <li><a href="#"><i class="facebook"> </i></a></li>
                        <li><a href="#"><i class="twitter"> </i></a></li>
                      
                                                            
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            </div>
        
        
<!--//header-top-->
 <!-- //Line Slider -->

        <!-- /Line Slider -->
    </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
