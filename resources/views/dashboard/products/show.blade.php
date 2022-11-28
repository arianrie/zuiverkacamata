@extends('dashboard.layouts.main')

@section('row')

<div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
<section class="py-1">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-4">
                <img class="card-img-top mb-5 mb-md-0" style="height:400" src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->image }}" /></div>
            <div class="col-md-8">
                <div class="small">{{ $product->created_at }}</div>
                <h1 class="display-5 fw-bolder">{{ $product->name }}</h1>
                <div class="fs-10 mb-2">
                    <table>
                        <tr>
                            <td>Price</td>
                            <td>&nbsp : &nbsp</td>
                            <td><span class="badge bg-secondary">Rp. {{ number_format($product->price) }}</span></td>
                        </tr>
                        <tr>
                         <td>Category</td>
                            <td>&nbsp : &nbsp</td>
                            <td><span class="badge bg-secondary">{{ $product->category->name }}</span></td>   
                        </tr>
                        <tr>
                            <td>Brand</td>
                            <td>&nbsp : &nbsp</td>
                               <td><span class="badge bg-secondary">{{ $product->brand->name }}</span></td>   
                         </tr>

                    </table>
                  </div>
                <p class="lead">
                    {!!  $product->description  !!}
                </p>
                <div class="d-flex">
                   <a href="/dashboard/products"> <button class="btn bg-gradient-info"><i class="fas fa-arrow-alt-circle-left"></i></button></a>&nbsp
                   <button class="btn bg-gradient-success"><i class="fa fa-edit"></i></button>&nbsp 
                   <button class="btn bg-gradient-danger"><i class="fa fa-trash"></i></button>
                    
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>
</div>
</div>
@endsection