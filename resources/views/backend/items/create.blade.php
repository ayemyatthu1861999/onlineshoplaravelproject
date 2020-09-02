@extends('backendtemplate')
@section('content')
<div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Item Create Form</h1>

   </div>
   <form action="{{route('items.store')}}"  method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group row {{ $errors->has('codeno')? 'has-error ' : ''}}">
        <label for="codeno" class="col-sm-2 col-form-label">Code No</label>
        <div class="col-sm-10">
       
            <input type="text" name="codeno"class="form">
               @error('codeno')
              <label class="text-danger">Required Codeno</label>
              @enderror
       </div>
  </div>
  <div class="form-group row {{ $errors->has('name')? 'has-error ' : ''}}">
   <label for="name" class="col-sm-2 col-form-label">Name</label>
   <div class="col-sm-10">
        <input type="text" name="name"class="form">
         @error('name')
              <label class="text-danger">Required Name</label>
              @enderror
   </div>
</div>
<div class="form-group row {{ $errors->has('photo')? 'has-error ' : ''}}">
   <label for="photo" class="col-sm-2 col-form-label">Photo</label>
   <div class="col-sm-10">
       <input type="file" name="photo"class="form-control-file">
        @error('photo')
              <label class="text-danger">Required Photo</label>
              @enderror
  </div>
</div>
<div class="form-group row {{ $errors->has('price')? 'has-error ' : ''}}">
   <label for="price" class="col-sm-2 col-form-label">Price</label>
   <div class="col-sm-10">
       <input type="number" name="price"class="form">
        @error('price')
              <label class="text-danger">Required Price</label>
              @enderror
  </div>
</div>
<div class="form-group row {{ $errors->has('discount')? 'has-error ' : ''}}">
   <label for="discount" class="col-sm-2 col-form-label">Discount</label>
   <div class="col-sm-10">
       <input type="text" name="discount"class="form"value="">
       @error('discount')
              <label class="text-danger">Required Discont</label>
              @enderror
  </div>
</div>

<div class="form-group row {{ $errors->has('description')? 'has-error ' : ''}}">
   <label for="description" class="col-sm-2 col-form-label">Description</label>
   <div class="col-sm-10">
       <textarea class="form" name="description"></textarea>
       @error('description')
              <label class="text-danger">Required Description</label>
              @enderror
  </div>
  </div>
<label>Brand</label>
<div class="form-group row">
   <div class="col-sm-10">

       <select class="form-control  form-control-md" id="inputBrand" name="brand">
          <optgroup label="Choose Brand">
               @foreach($brands as $brand)
               <option value="{{$brand->id}}">{{$brand->name}}</option>
               @endforeach
          </optgroup>
     </select>
  </div>
  </div>
<label>Subcategory</label>
<div class="form-group row">
   <div class="col-sm-10">
       <select class="form-control  form-control-md" id="inputSubcategory" name="subcategory">
          <optgroup label="Choose Subcategory">
               @foreach($subcategories as $subcategory)
               <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
               @endforeach
          </optgroup>
     </select>
  </div>
  </div>


  <input type="submit" name="btnsubmit"value="Create"class="btn btn-info">


</form>

</div>
@endsection