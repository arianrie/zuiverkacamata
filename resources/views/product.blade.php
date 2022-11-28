@extends('layouts.main') @include('partials.header') @section('contents')

</div>
<link rel="stylesheet" href="/css/style.css">
<section
class="shop_section layout_padding"
style="margin-top: -630px; z-index:-1;">
<div class="container">


    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
              
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <section class="py-1">
                            <div class="container px-4 px-lg-5 my-5">
                                <div class="row gx-4 gx-lg-5 align-items-center">
                                    <div class="col-md-4"><img
                                        class="card-img-top mb-5 mb-md-0"
                                        src="{{ asset('storage/'.$product->image) }}"
                                        alt="..."/></div>
                                    <div class="col-md-8">
                                        <div class="small">{{ $product->created_at }}</div>
                                        <h1 class="display-5 fw-bolder">{{ $product->name }}</h1>
                                        <div class="row">
                                            <div class=" fs-10 mb-2 container">
                                                <table>
                                                    <tr>
                                                        <td>Price</td>
                                                        <td>&nbsp : &nbsp</td>
                                                        <td>
                                                            <span class="text-light badge bg-secondary">Rp.
                                                                {{ number_format($product->price) }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Category</td>
                                                        <td>&nbsp : &nbsp</td>
                                                        <td>
                                                            <span class="text-light badge bg-secondary">{{ $product->category->name }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Brand</td>
                                                        <td>&nbsp : &nbsp</td>
                                                        <td>
                                                            <span class=" text-light badge bg-secondary">{{ $product->brand->name }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Stok</td>
                                                        <td>&nbsp : &nbsp</td>
                                                        <td>
                                                            <span class="text-light badge bg-secondary">
                                                                {{ number_format($product->stok) }}</span></td>
                                                    </tr>
                                                </table>
                                            </div>
                                           
                                            
                                        </div>
                                        <p class="lead">{!! $product->description !!}</p>
                                        <div class="d-flex">
                                            <a href="/products">
                                                <button class="btn btn-outline-info btn-lg">
                                                    <i class="fa fa-arrow-left"></i>
                                                </button>
                                            </a>&nbsp
                                            <button class="btn btn-outline-success " >
                                                <i class="fa fa-whatsapp "> </i> Order Via Whatsapp
                                            </button>&nbsp
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
</div>
</section>



@endsection