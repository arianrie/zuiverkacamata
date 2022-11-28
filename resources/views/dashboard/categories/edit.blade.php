@extends('dashboard.layouts.main')

@section('row')
<div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
           <h5>Form Add Category</h5>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        
       <div class="container">
        
        <div class="col-sm-10">
            <form method="post" action="/dashboard/categories" enctype="multipart/form-data">
                @method('put')
                @csrf
                <input type="hidden" name="oldImage" value="{{ old('image', $category->image) }}">
             <div class="row mb-2">
                <label class="fs-6 col-sm-2 col-form-label" style="margin-bottom: -5px" for="name">Name</label>
                
              <div class="col-sm-8">
                <input type="text" class="form-control @error('name')
                    is-invalid
                @enderror" name="name" id="name" placeholder="" value="{{ old('name',$category->name) }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
              </div>
              <div class="row mb-2">
                <label class="fs-6 col-sm-2 col-form-label" style="margin-bottom: -5px" for="slug">Slug</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('slug')
                      is-invalid
                  @enderror" name="slug" id="slug" readonly placeholder="" value="{{ old('slug',$category->slug) }}">
                  @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="mb-2 row">
              <label class="fs-6 col-sm-2 col-form-label" style="margin-bottom: -5px" for="slug">Image</label>
              <div class="col-sm-4">
              <input id="image" onchange="previewImage()" class="form-control @error('image')
              is-invalid
              @enderror" name="image" type="file" id="formFile">
              <img src="{{ asset('storage/'.$category->image) }}" class="img-preview mt-1" style="max-height: 100px;">
          @error('image')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            </div>

            
               <div class="mb-2 row">
              
                <label class="fs-6 col-sm-2 col-form-label" style="margin-bottom: -5px" for="slug">Description</label>
                <div class="col-sm-8">
                  @error('description')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                <input type="hidden" id="description" name="description" value="{{ old('description',$category->description) }}">
                <trix-editor input="description"></trix-editor>
           
              </div>
              </div>
              </div>
              <button type="reset" class="btn btn-dark"><i class="fa fa-eraser"></i></a></button>
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i></button>
            </form>
        </div>
         </div>

      </div>
    </div>
  </div>
@endsection