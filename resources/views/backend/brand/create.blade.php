@extends('backendtemplate')
@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Brand Create Form</h1>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <form action="{{route('brands.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group row {{ $errors->has('name')? 'has-error ' : ''}}">
          
          <label for="name" class="col-sm-2 col-form-label">Name</label>
          
          <div class="col-sm-3">
            <input type="text" class="form-control" id="name" name="name">
             @error('name')
              <label class="text-danger">Required Name</label>
              @enderror
          </div>
        </div>

        <div class="form-group row {{ $errors->has('photo')? 'has-error ' : ''}} ">
          <label for="photo" class="col-sm-2 col-form-label">Photo</label>
          <div class="col-sm-3">
            <input type="file" class="form-control-file" id="photo" name="photo">
             @error('photo')
              <label class="text-danger">Required Photo</label>
              @enderror
          </div>
        </div>
        <br>
        <input type="submit" name="create" value="Create" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
@endsection