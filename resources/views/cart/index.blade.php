@extends('layouts.main') @include('partials.header') @section('contents')

</div>
<section
class="shop_section layout_padding"
style="margin-top: -630px; z-index:-1;">
<div class="container">
    <div class="heading_container heading_center">
        <h2>
            Keranjang
        </h2>
    </div>

    <div class="row">
        <div class="col-12">
            <section style="background-color: #eee;">
                <div class="container py-5">

                    @foreach ($cart as $c)
                    <div class="row justify-content-center mb-3">
                        <div class="col-md-12 col-xl-10" style="">
                            <div class="" style="color:green; position:absolute;z-index:10; margin:10px;"><i class="fa fa-window-close"></i></div>
                            <div class="card shadow-0 border rounded-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                            <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                                <img style="height:50px; width:50px;" src="{{ asset('storage/'.$c->product->image) }}" class="w-100"/>
                                                <a href="#!">
                                                    <div class="hover-overlay">
                                                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <h5>{{ $c->product->name }}</h5>
                                            <span>Merk :
                                                {{ $c->product->brand->name }}</span>&nbsp;&nbsp;&nbsp;
                                            <span>Kategori :
                                                {{ $c->product->category->name }}</span>

                                        </div>
                                        <div class="col-md-6 col-lg-3 col-xl-3">

                                            <h4 class="mb-1 mt-3 me-1">Rp.{{ number_format($c->product->price) }}</h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                    <div class="row justify-content-end mb-3" style="margin-right: 5em;">
                        <div class="col-md-4" style="">
                            <div class="card shadow-0 border rounded-3 justify-content-end">
                                    <div class="col-md-4  ">
                                   
                                    @php
                                        $total = 0;
                                    @endphp
                                    
                                    @foreach ($cart as $c)
                                    
                                      <div class="d-none">  {{ $c->product->price }}</div>
                                      {{ $data = $c->product->kode }}

                                    @php
                                        $total += $c->product->price;
                                    @endphp
                                    
                                    @endforeach
                                    </div><br>
                                    <span style="font-size: 1.5em;" class="mx-2 my-10">Total Harga : Rp.{{ number_format($total) }}</span>
                                  <form class="m-2 d-inline"  action="/cart/{{ $cart }}">
                                    @method('delete')
                                    @csrf
                                    <button class=" btn btn-block btn-lg btn-success"><i class="fa fa-whatsapp"></i> Order Via WhatsApp</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>

    </div>
</div>
</section>

@endsection