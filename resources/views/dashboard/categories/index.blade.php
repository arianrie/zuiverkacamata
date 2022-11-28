@extends('dashboard.layouts.main')

@section('row')




<div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <a href="/dashboard/categories/create"><button class="btn btn-primary"><i class="fa fa-plus"></i>  Create Category</button></a>

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

        <h5>Table Category</h5>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0 table-responsive">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created Att</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                
            @foreach ($categories as $category )
            <td class="align-middle text-center text-sm">
                <span class="badge badge-sm bg-gradient-success">{{ $loop->iteration }}</span>
            </td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->created_at }}</td>
            <td>
              <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-gradient-info"><i class="fa fa-eye"></i></a>
                <a href="/dashboard/categories/{{ $category->slug }}/edit"><span class="badge bg-gradient-success small"><i class="fa fa-edit"></i></span></a>
                <form method="post" class="d-inline" action="/dashboard/categories/{{ $category->slug }}">
                    @method('delete')
                    @csrf
                    
                    <button id="delete" type="submit" class="border-0 m-0 p-0" onclick="return confirm('are you sure you want to delete this data?')" style="background: none;"><span class="badge bg-danger"><i class="fa fa-trash"></span></i></button>
                </form>
            </td>
              
            </tr>
            @endforeach
   
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script>

 
  </script>
@endsection