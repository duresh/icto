@extends('dashboard.index')
@section('content')

<div class="container mt-5">

  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  @if(session('danger'))
  <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
    @endif

  <div class="card">

    <div class="card-header text-center font-weight-bold">
      <h2>Profile Update </h2>
    </div>

    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" id="upload-image" action="{{ route('update.save_profile')}}" >
        @csrf
            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="contact" placeholder="Contact Number" id="contact">
                    @error('contact')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="file" name="image" class="form-control" placeholder="Choose image" id="image">
                    @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                 <div class="col-md-12 mb-2">
                  <img id="preview-image-before-upload" src="https://www.psdgraphics.com/file/user-icon.jpg"
                      alt="preview image" style="max-height: 250px;">
              </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    {{-- <button type="submit" class="btn btn-warning" id="update">Update</button> --}}
                </div>
            </div>
        </form>

    </div>


  </div>

</div>



@endsection
