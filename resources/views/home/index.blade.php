@extends('home.app')

@section('title', 'Intro')

@section('styles')
	<link href="/common-css/bootstrap.css" rel="stylesheet">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="/revolution/css/settings.css">
        
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/revolution/js/jquery.themepunch.revolution.min.js"></script>


	<link href="/01_Photography/css/styles.css" rel="stylesheet">
    <link href="/01_Photography/css/responsive.css" rel="stylesheet">
@endsection


@section('content')
    <section class="slider-section">
    
        <div id="rev_slider_28_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="parallax-zoom-slices" data-source="gallery" style="background:#000000;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
            <div id="rev_slider_28_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>    

                @foreach($photos as $photo)
                <!-- SLIDE 1 -->
                <li data-index="rs-82" data-transition="fade" data-slotamount="default" 
                    data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut"
                    data-easeout="Power4.easeOut" data-masterspeed="1000" data-rotate="0"  
                    data-saveperformance="off"  data-title="Slide" 
                    data-slicey_shadow="0px 0px 50px 0px transparent">
                    <!-- MAIN IMAGE -->
                    <img src="{{ ($photo->name) }}"  alt=""  data-bgposition="center center"
                        data-kenburns="on" data-duration="14000" data-ease="Linear.easeNone"
                        data-scalestart="100" data-scaleend="115" data-rotatestart="0" data-rotateend="0" 
                        data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" 
                        class="rev-slidebg" data-no-retina>
                        
                    <!-- LAYERS -->
                </li>
                @endforeach
                
                
                
            </ul>
            <div class="tp-bannertimer" style="height: 10px; background: rgba(255,255,255,0.25);"></div>    </div>
        </div><!-- END REVOLUTION SLIDER -->
        
    </section><!-- slider -->
@endsection

@section('scripts')
	<script src="/common-js/tether.min.js"></script>
    
    <script src="/common-js/bootstrap.js"></script>
    
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/revolution/js/jquery.themepunch.revolution.min.js"></script>
@endsection