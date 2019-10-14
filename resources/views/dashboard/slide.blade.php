@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Slide Section</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form method="post" action="/slide/new" enctype="multipart/form-data">
                            @csrf
                          <div class="form-row mb-2">
                            <div class="col-12 col-md-9 mb-2">
                              <input type="file" name="photos[]" accept="image/*" class="form-control" required multiple>
                            </div>
                            <div class="col">
                              <input type="submit" value="Add Photos" class="form-control btn btn-primary">
                            </div>
                          </div>
                        </form>
                      

                              <div class="mb-2 text-center">
                                @foreach($slide->reverse() as $photo)
                                <span style="position: relative">
                                <img src="{{ ($photo->name) }}" width="150" height="150" class="mb-3 mr-2">
                                <div style="position: absolute; top: -70px; right:13px;">
                                <form method="post" action="/slide/{{ $photo->id }}/delete">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger" name="remove_levels" type="submit"><i class="fa fa-trash"></i></button>
                                </form>
                                </div>
                                </span>
                                @endforeach
                              </div>

                            
                </div>
            </div>
        </div>
    </div>
</div>


@if (session('addPhoto'))
    <div class="alert alert-success w-alert fixed-bottom ml-auto mr-2" id="successMessage">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('addPhoto') }}
    </div>
@endif
@if (session('destroyPhoto'))
    <div class="alert alert-success w-alert fixed-bottom ml-auto mr-2" id="successMessage">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('destroyPhoto') }}
    </div>
@endif




<!-- Modal -->
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
        Are you sure?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="delete">Delete</button>
        <button type="button" class="btn" data-dismiss="modal">Cancel</button>
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

            $('button[name="remove_levels"]').on('click', function(e) {
            var $form = $(this).closest('form');
            e.preventDefault();
            $('#confirm').modal({
                backdrop: 'static',
                keyboard: false
              })
              .one('click', '#delete', function(e) {
                $form.trigger('submit');
              });
            });

            setTimeout(function() {
                $('#successMessage').fadeOut('fast');
            }, 3000);

            @if (session('fileError'))
                  $('#fileError').modal('show');
            @endif


  });   
</script>
@endsection



