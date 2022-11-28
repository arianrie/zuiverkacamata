@extends('dashboard.layouts.main')

@section('row')




<div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <a href="/dashboard/products/create"><button class="btn btn-primary"><i class="fa fa-plus"></i>  Create Product</button></a>

        @if (session()->has('success'))      
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success') }}</strong> 
  <button type="button" class="btn-close btn" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('loginError'))      
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('loginError') }}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

        <h5>Table Product</h5>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0 table-responsive">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stok</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created Att</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                
            @foreach ($products as $product )
            <td class="align-middle text-center text-sm">
                <span class="badge badge-sm bg-gradient-success">{{ $loop->iteration }}</span>
            </td>
            <td>{{ $product->kode }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stok }}</td>
            <td>{{ $product->created_at }}</td>
            <td>
                <a href="/dashboard/products/{{ $product->slug }}" class="badge bg-gradient-info"><i class="fa fa-eye"></i></a>
                <a href="/dashboard/products/{{ $product->slug }}/edit" class="badge bg-gradient-success"><i class="fa fa-edit"></i></a>
                <form method="post" class="d-inline" action="/dashboard/products/{{ $product->slug }}">
                    @method('delete')
                    @csrf
                    <button id="delete" type="submit" class="border-0 m-0 p-0" onclick="return confirm('are you sure you want to delete this data?')" style="background: none;"><span class="badge bg-danger"><i class="fa fa-trash"></span></i></button>
                </form>
            </td>
              
            </tr>
            @endforeach
   
            </tbody>
          </table>
          <div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  {{ $products->links() }}
  <script>

 
  </script>
@endsection