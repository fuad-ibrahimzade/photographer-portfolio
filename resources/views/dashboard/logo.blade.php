@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Logo Section</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form method="post" action="/logo/update" enctype="multipart/form-data">
                            @csrf
                          <div class="form-row mb-2">
                            <div class="col-12 col-md-9 mb-2">
                              <input type="file" name="photo" accept="image/*" class="form-control" required>
                            </div>
                            <div class="col">
                              <input type="submit" value="Update" class="form-control btn btn-primary">
                            </div>
                          </div>
                        </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="fileError" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <h5 class="modal-title">Yükləməniz uğursuz oldu!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ session('fileError') }}
      </div>
    </div>
  </div>
</div>


@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
 $(document).ready(function(){

            @if (session('fileError'))
                  $('#fileError').modal('show');
            @endif

  });   
</script>
@endsection



