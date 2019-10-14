@extends('home.app')

@section('title', 'Gallery')

@section('styles')
    <link href="/common-css/venobox.css" rel="stylesheet">
	
	<link href="/02_Portfolio/css/styles.css" rel="stylesheet">
	
	<link href="/02_Portfolio/css/responsive.css" rel="stylesheet">

	<link rel="stylesheet" href="/css/cocoen.min.css">
	<style>

@media(max-width: 767px) {
	::-webkit-scrollbar:vertical {
	    width: 20px;
	}
}

@media(min-width: 768px) {
	::-webkit-scrollbar:vertical {
	    width: 15px;
	}
}

::-webkit-scrollbar {
    -webkit-appearance: none;
}

::-webkit-scrollbar:horizontal {
    height: 12px;
}
::-webkit-scrollbar-thumb {
    background-color: rgba(0, 0, 0, .5);
    border-radius: 10px;
    border: 2px solid #ffffff;
}
::-webkit-scrollbar-track {
    border-radius: 10px;
    background-color: #ffffff;
}
    </style>
@endsection

@section('content')
    <section class="main-section">
		<div class="p-grid-isotope">
		@foreach($photos as $photo)
			<div class="p-item grid-sizer"><a class="venobox" href="{{ ($photo->name) }}">
				<img src="{{ ($photo->name) }}" alt=""/></a></div>
		@endforeach
		</div><!-- p-grid -->
	</section><!-- main-section -->
@endsection

@section('scripts')
	<script src="/common-js/isotope.pkgd.min.js"></script>
	<script src="/common-js/venobox.min.js"></script>

	<script src="/js/cocoen.min.js"></script>
	<script>
	document.querySelectorAll('.cocoen').forEach(function(element){ new Cocoen(element); });
	</script>
@endsection