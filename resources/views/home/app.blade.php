<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Photographer - @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <link rel="icon" type="image/icon"  href="{{ ($logo->photo) }}" style="filter: grayscale(1) invert(1);">
    
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link href="/common-css/ionicons.css" rel="stylesheet">        
    <style>
        .ion { font-size: 25px }
        @media(min-width: 360px) and (max-width: 578px) {
            .little{ width: 25% }
        }
        @media(max-width: 359px) {
            .little{ width: 25%; position: relative; right: 25px; }
            .lit{ position: relative; left: 10px; }
        }
    </style>
    @yield('styles')
    
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
     fbq('init', '410159343058376'); 
    fbq('track', 'PageView');
    </script>
    <noscript>
     <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=410159343058376&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body>
    
    <header>
        <a class="logo little" href="/">
            <img src="{{ ($logo->photo) }}" alt="Logo">
        </a>
        <ul class="social-icons right-area">
            @if(isset($link[0]))
            <li><a href="https://www.facebook.com/{{ $link[0]->name }}" target="_blank"><i class="ion ion-social-facebook-outline"></i></a></li>
            <li><a href="https://www.instagram.com/{{ $link[1]->name }}" target="_blank"><i class="ion ion-social-instagram-outline"></i></a></li>
            <li><a href="https://twitter.com/{{ $link[2]->name }}" target="_blank"><i class="ion ion-social-twitter-outline"></i></a></li>
            <li><a href="https://www.youtube.com/channel/{{ $link[3]->name }}" target="_blank"><i class="ion ion-social-youtube-outline"></i></a></li>
            @endif
        </ul><!-- social-icons -->
        
        <a class="menu-nav-icon lit" data-menu="#main-menu"><i class="ion-navicon"></i></a>
        
        <ul class="main-menu" id="main-menu">
            <li class="drop-down"><a href="#!">Portfolio<i class="ion-arrow-down-b"></i></a>
                <ul class="drop-down-menu drop-down-inner">
                    @foreach($galleries as $gallery)
                    <li><a href="/gallery/{{ $gallery->name }}">{{ $gallery->name }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </header>
    

    @yield('content')
    
    
    <footer>
        <p class="copyright">
Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved 
        </p>
        
    </footer>
    
    
    <!-- SCIPTS -->
    
    <script src="/common-js/jquery-3.2.1.min.js"></script>
    
    @yield('scripts')
    
    
    <script src="/common-js/scripts.js"></script>
    
</body>
</html>