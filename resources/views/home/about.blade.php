@extends('home.app')

@section('title', 'About')

@section('styles')
    <link href="06_Regular_Page/css/styles.css" rel="stylesheet">
	<link href="06_Regular_Page/css/responsive.css" rel="stylesheet">
@endsection

@section('content')
    <section class="main-section">
	
		<div class="left-area">
			<h3 class="margin-tb-10">{{ $about->title }}</h3>
			
			<p class="margin-b-10">{{ $about->desc }}</p>
			
		</div><!-- left-area -->
		
		<div class="right-area">
			
			<img src="{{ ($about->photo) }}" alt="">
				
		</div><!-- right-area -->
		
	</section><!-- main-section -->
@endsection

@section('scripts')
	
@endsection