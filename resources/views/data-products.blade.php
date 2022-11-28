@foreach ($products as $product)
<link rel="stylesheet" href="/css/style.css">

<div class="col-md-4 mb-3" id="data-product">
    <div class="product-card bg-white mb-4 overflow-hidden d-lg-flex flex-column rounded-lg position-relative">
        <div class="product-image overflow-hidden">
            <span style="opacity:0.7; padding:5px; border-radius:5px;"
                class="product-ribbon product-ribbon-right bg-blue text-uppercase">{{ $product->category->name }}</span>
            <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->image }}" class="product-thumbnail rounded-lg">
        </div>
        <div class="p-4 product-details" >
            <h4 class="font-weight-bold d-flex justify-content-between">
                <a href="#!" class="text-dark text-truncate--2" title="Elegant designed coffee plant for desktop decoration">
                    {{ $product->name}}

                </a>
                <a href="#!" onclick="changeColor()" class="ml-2 text-muted" ><i id="bID" class="fa fa-heart"></i></a>
            </h4>
          
            <a href="#" class="text-uppercase py-0 px-2 rounded-lg border mb-2 d-inline-block">
                <small class="font-weight-bold">{{ $product->brand->name }}</small>
            </a>
            <div class="d-flex align-items-center mb-2 row">
                
               <div class="col">
                <a href="#!" class="ml-2 text-muted">Stok ({{ $product->stok }})</a>
               </div>
               
            </div>
           
           @php
            $harga = $product->price;
            $discon = $product->discon;
            $potonganHarga = $harga * ($discon/100);
            $hasil  = $harga - $potonganHarga;
           @endphp 
            <div class="d-flex align-items-baseline mb-2">
                <h2 class="mr-2">Rp.{{ number_format( $hasil) }}</h2>
                <h5 class="text-striked text-muted mr-3 font-weight-regular">{{ number_format($product->price) }}</h5>
                
             
                <h5 class="text-success"><strong>{{ $discon }}</strong><i class="fa fa-percent"></i></h5>
            </div>
             <a href="/product/{{ $product->slug }}">
                    <button  id="liveToast" class="btn btn-outline-primary btn"> Detail</button>
                </a>
              
         
                    <a href="https://wa.me/083154964429?text=Halo%20Zuiver%20saya%20mau%20order%20kacamata%20dengan%20kode%20:%0A{{ $product->kode }}">
                        <button class="btn btn-outline-success"><i class="fa fa-whatsapp"></i> Whatsapp</button></a>
        </div>
    </div>

</div>
@endforeach