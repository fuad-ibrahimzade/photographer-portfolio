@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Link Section</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form method="post" action="/link/update">
                            @csrf
                          <div class="form-row mb-2">
                            <div class="col-12 mb-2">
                              <label>Facebook:</label>
                              <input type="text" name="facebook" value="{{ $link[0]->name }}" maxlength="100" class="form-control" required>
                            </div>
                            <div class="col-12 mb-2">
                              <label>Instagram:</label>
                              <input type="text" name="instagram" value="{{ $link[1]->name }}" maxlength="100" class="form-control" required>
                            </div>
                            <div class="col-12 mb-2">
                              <label>Twitter:</label>
                              <input type="text" name="twitter" value="{{ $link[2]->name }}" maxlength="100" class="form-control" required>
                            </div>
                            <div class="col-12 mb-2">
                              <label>Youtube:</label>
                              <input type="text" name="youtube" value="{{ $link[3]->name }}" maxlength="100" class="form-control" required>
                            </div>
                            <div class="col-12 mb-2">
                              <button type="submit" class="form-control btn btn-primary">Confirm</button>
                            </div>
                          </div>
                        </form>
                        
                        
                </div>
            </div>
        </div>
    </div>
</div>


@endsection



