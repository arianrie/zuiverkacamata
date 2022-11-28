@extends('layouts.main') @include('partials.header') @section('contents')

</div>
<section
class="shop_section layout_padding"
style="margin-top: -630px; z-index:-1;">
<div class="container">
    <div class="heading_container heading_center">
        <h2>
            {{ $tittle }}
        </h2>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <form class="d-flex">
                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    class="form-control"
                    placeholder="Search..."
                    aria-label="Search"
                    aria-describedby="button-addon2">
                <button class="btn bg-blue" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <div class="col-sm-4"></div>
        <div class="col float-end">
            <form>
                <select
                    class="form-control form-select-sm"
                    aria-label=".form-select-sm example">
                    <option selected="selected">Filter</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </form>
        </div>
    </div>

    <div class="shop-default shop-cards shop-tech">
        <div class="row">

            @foreach ($products as $product)

            <div class="col-md-4 mb-3">
                <div class="block product no-border z-depth-2-top z-depth-2--hover">
                    <div class="block-image">
                        <a href="#">
                            <img
                                style="height: 200"
                                src="{{ asset('storage/'.$product->image) }}"
                                class="img-center img-fluid">
                        </a>
                        <span
                            style="opacity:0.7; padding:5px;"
                            class="product-ribbon product-ribbon-right bg-blue text-uppercase">{{ $product->category->name }}</span>
                    </div>
                    <div class="block-body text-center">
                        <h3 class="heading heading-5 strong-1000 text-capitalize">
                            <a href="#">
                                {{ $product->name}}

                            </a>
                        </h3>
                    </div>
                    <div class="container" style="margin-top: -20px;">
                        <table cellpadding="3" cellspacing="3">
                            <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td>{{ number_format($product->price) }}</td>
                            </tr>
                            <tr >
                                <td valign='top'>Keterangan</td>
                                <td valign='top'>:</td>
                                <td>{!! Str::substr($product->description,0,30) !!} . . .</td>
                            </tr>
                        </table>

                    </div>

                    <div class="block-body text-center">
                        <div class="product-buttons row d-flex">
                          <div class="d-flex justify-content-start">
                                <a href="/product/{{ $product->slug }}">
                                        <button
                                            type="button"
                                            class="btn btn-success"
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            title=""
                                            data-original-title="Compare">
                                            Detail
                                        </button>
                                    </a>
                                  </div>
                                  <div class="justify-content-end">
                                <a href="https://wa.me/083154964429?text=Halo%20Zuiver%20saya%20mau%20order%20kacamata%20dengan%20kode%20:%0A{{ $product->kode }}">
                                    <button type="button" class="btn btn-block btn-success">
                                        Order
                                    </button></a>
                                  </div>
                       
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</div>
<div class="d-flex justify-content-center">
    {{-- {{ $products->links() }} --}}
</div>
</div>
</section>

@endsection