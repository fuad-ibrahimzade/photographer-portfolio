@extends('home.app')

@section('title', 'Contact')

@section('styles')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="06_Regular_Page/css/styles.css" rel="stylesheet">
	<link href="06_Regular_Page/css/responsive.css" rel="stylesheet">
	<style>
		input[type="number"]::-webkit-outer-spin-button,
		input[type="number"]::-webkit-inner-spin-button {
		    -webkit-appearance: none;
		    margin: 0;
		}
		input[type="number"] {
		    -moz-appearance: textfield;
		}
	</style>
	
@endsection

@section('content')
    <section class="main-section">

    	<div class="container">
    		<h2 class="text-center mb-5 mt-5">Contact Me</h2>
    		<h4 class="text-center mb-5">Have a question for me? I’d love to hear from you!</h4>
    		<h5 class="text-center mb-5"><i class="far fa-envelope fa-2x"></i></h5>
    	<div class="text-center mt-2 mb-5">
		  <button type="submit" class="btn btn-outline-dark"><a href="mailto:custom@gmail.com">custom@gmail.com</a></button>
		</div>
		</div>
	</section><!-- main-section -->





<div class="modal fade" id="successMessage" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Success!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3 class="alert alert-success">{{ session('success') }}</h3>
      </div>
    </div>
  </div>
</div>
@endsection


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
 $(document).ready(function(){
            
            @if (session('success'))
                  $('#successMessage').modal('show');
            @endif

  });   
</script>
@endsection