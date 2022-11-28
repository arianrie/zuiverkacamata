@extends('layouts.main')

@section('contents')

@include('partials.header')

@include('partials.hero')

        <div class="splide container mt-4">
            <div class="splide__track">
                <div class="splide__list border-0">
                   <div class="col-sm-2 splide__slide ">
                    <div class="card bg-dark text-white">
                      <img src="images/brand/001.jpg" class="card-img" alt="...">
                      <div class="card-img-overlay">
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2 splide__slide ">
                    <div class="card bg-dark text-white">
                      <img src="images/brand/002.jpg" class="card-img" alt="...">
                      <div class="card-img-overlay">
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2 splide__slide ">
                    <div class="card bg-dark text-white">
                      <img src="images/brand/003.jpg" class="card-img" alt="...">
                      <div class="card-img-overlay">
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2 splide__slide ">
                    <div class="card bg-dark text-white">
                      <img src="images/brand/005.jpg" class="card-img" alt="...">
                      <div class="card-img-overlay">
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2 splide__slide ">
                    <div class="card bg-dark text-white">
                      <img src="images/brand/006.jpg" class="card-img" alt="...">
                      <div class="card-img-overlay">
                       
                      </div>
                    </div>
                  </div>
                   <div class="col-sm-2 splide__slide ">
                    <div class="card bg-dark text-white">
                      <img src="images/brand/007.jpg" class="card-img" alt="...">
                      <div class="card-img-overlay">
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2 splide__slide ">
                    <div class="card bg-dark text-white">
                      <img src="images/brand/008.jpg" class="card-img" alt="...">
                      <div class="card-img-overlay">
                       
                      </div>
                    </div>
                  </div>
               
               </div>
            </div>
              
            
        </div><br><br><br>

        <section id="team" class="pb-5 ">
          
          <div class="container ">
            <div class="heading_container heading_center ">
              <h2 class="">
                Produk Kami 
              </h2><br>
            </div>
              <div class="row">
                  <!-- Team member -->

                  @foreach ($categories as $category)
                    
                 
                  <div class="col-xs-12 col-sm-6 col-md-4">
                      <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                          <div class="mainflip">
                              <div class="frontside">
                                <div class="pd-3 position-absolute" style="z-index:2;background: black; opacity:0.7; color:white; padding:10px;">
                                  {{ $category->name }}</div>
                                  <div class="card">
                                      
                                          <img src="{{asset('storage/'.$category->image) }}" alt="">
                                      
                                  </div>
                              </div>
                              <div class="backside">
                                  <div class="card">
                                      <div class="card-body text-center mt-4">
                                          <h4 class="card-title">{{ $category->name }}</h4>
                                          <p class="card-text">
                                            {!! $category->description !!}
                                          </p>
                                          <ul class="list-inline">
                                             <a href="/categories/{{ $category->slug }}"><button class="btn btn-info">Lihat Selengkapnya</button> </a>  </ul>
                                      </div>
                                  </div>  
                              </div>
                          </div>
                      </div>
                  </div>
                   @endforeach
                  <!-- ./Team member -->
               
                  <!-- ./Team member -->
               
      
              </div>
          </div>
      </section>



  <!-- end shop section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 col-lg-5 ">
          <div class="img-box">
            <img style="border-radius:10px;" src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Tentang Kita
              </h2>
            </div>
            <p>
              <strong>Zuiver</strong> adalah usaha rumahan yang berkembang menjadi perusahaan digital yang mewadahi produk-produk berkwalitas dari supplier kecil maupun besar, kami bertujuan meningkatkan produktivitas dan penjualan para pengusaha di indonesia.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- feature section -->

  <section class="feature_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Kenapa harus Order dikami
        </h2>
       
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="images/f1.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Model Beragam
              </h5>
              <p>
                Zuiver menyediakan berbagai macam model kacamata seperti kacamata minus, plus, cillinder, sunglass, hitam dsb.
              </p>
            
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="images/f2.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Pelayanan 1x24 Jam
              </h5>
              <p>
                Untuk pertanyaan seputar ketersediaan produk/stok, lokasi toko dan status pesanan silakan chat via whatsapp
              </p>
            </div>
          </div>
        </div>
        
        <div class="col-sm-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="images/f3.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Pengiriman Aman 
              </h5>
              <p>
                Kita menggunakan expedisi yang aman dan terpercaya  diantaranya jne, sicepat yang sering kami gunakan
             
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="images/f4.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Harga Terjangkau
              </h5>
              <p>
                Lebih murah bukan berarti murahan, kita hanya menjual produk premium dari salah satu distributor terbaik di indonesia
              </p>
             
            </div>
          </div>
        </div>
      </div>
   
    </div>
  </section>

  <!-- end feature section -->

  <!-- contact section -->

  <!-- end contact section -->

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel client_owl-carousel">
          
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/c1.jpg" alt="">
              </div>
              <div class="detail-box">
                <div class="client_info">
                  <div class="client_name">
                    <h5>
                      Mark Thomas
                    </h5>
                    <h6>
                      Customer
                    </h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                 Terimaksih Zuiver mata saya jadi lebih segar dan jelas, gk merah dan gatel, pas kemaren panas2an pakai softlens, kepala berasa berat tapi setalah beli kacamata photocromic disini penglihatan saya jadi lebih jelas juga adam saat kerkena matahari karna lensa jadi hitam, pokonya rekomendasi banget   
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/c2.jpg" alt="">
              </div>
              <div class="detail-box">
                <div class="client_info">
                  <div class="client_name">
                    <h5>
                      Alina Hans
                    </h5>
                    <h6>
                      Customer
                    </h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore
                  et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum
                  dolore eu fugia
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  

  @endsection