@extends('dashboard.layouts.main')

@section('row')
<div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
           <h5>Form Edit Product</h5>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        
       <div class="container">
        
        <div class="col-sm-10">
            <form method="post" action="/dashboard/products/{{ $product->slug }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <input type="hidden" name="oldImage" value="{{ old('image', $product->image) }}">
             <div class="row mb-2">
                <label class="fs-6 col-sm-2 col-form-label" style="margin-bottom: -5px" for="name">Name</label>
                
              <div class="col-sm-8">
                <input type="text" class="form-control @error('name')
                    is-invalid
                @enderror" name="name" id="name" placeholder="" value="{{ old('name',$product->name) }}">
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
                  @enderror" name="slug" id="slug" readonly placeholder=""  value="{{ old('name',$product->slug) }}">
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
              <img src="{{ asset('storage/'.$product->image) }}" class="img-preview mt-1" style="max-height: 100px;">
          @error('image')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            </div>

              <div class="row mb-2">
                <label class="fs-6 col-sm-2 col-form-label" style="margin-bottom: -5px" for="kode">Kode</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control @error('kode')
                  is-invalid
              @enderror" name="kode" id="kode" readonly placeholder="" value="{{ old('name',$product->kode) }}">
              @error('kode')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
              </div>
              {{-- <div class="mb-2 col-sm-4">
                  <input class="form-control" type="file" name="image" id="formFile" placeholder="Image">
              </div> --}}
              <div class="mb-2 row">
                <label class="fs-6 col-sm-2 col-form-label" style="margin-bottom: -5px" for="price">Price</label>
                <div class="col-sm-4">
                <input type="text" class="form-control @error('price')
                is-invalid
            @enderror" name="price" id="price" placeholder=""  value="{{ old('name',$product->price) }}">
            @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
              </div>
              <div class="mb-2 row">
                <label class="fs-6 col-sm-2 col-form-label" style="margin-bottom: -5px" for="slug">Stok</label>
                <div class="col-sm-2">
                <input type="text" class="form-control @error('stok')
                is-invalid
            @enderror" name="stok" id="stok" placeholder=""  value="{{ old('name',$product->stok) }}">
            @error('stok')
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
                <input type="hidden" id="description" name="description" value="{{ old('description',$product->description) }}">
                <trix-editor input="description"></trix-editor>
           
              </div>
              </div>


              <div class="mb-2 row">
                <label class="fs-6 col-sm-2 col-form-label" style="margin-bottom: -5px" for="brand">Brand</label>
                <div class="col-sm-8">
                <select class="form-select" name="brand_id" aria-label="Default select example">
                    <option selected disabled>Brand</option>
                    @foreach ($brands as $brand)
                    @if (old('brand_id',$product->brand_id) == $brand->id)
                    <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                        @else
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endif
                    @endforeach
                </select>
              </div>
              </div>
              <div class="mb-4 row">
                <label class="fs-6 col-sm-2 col-form-label" style="margin-bottom: -5px" for="category">Category</label>
                <div class="col-sm-8">
                <select class="form-select" name="category_id" aria-label="Default select example">
                    <option selected disabled>Category</option>
                    @foreach ($categories as $category )
                    @if (old('category_id',$product->category_id) == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                    @endforeach
                </select>
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

