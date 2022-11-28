@extends('layouts.main')

@include('partials.header')

@section('contents')
  <!-- about section -->
<br><br>
  <section class="about_section layout_padding ">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-5 ">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
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
             <strong>Zuiver</strong> adalah usaha rumahan yang berkembang menjadi perusahaan digital yang mewadahi produk-produk berkwalitas dari supplier kecil maupun besar, kami bertujuan meningkatkan produktivitas dan penjualan para pengusaha di indonesia
            </p>
          
          </div>
        </div>
      </div>
    </div><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-3" style="margin-left: 2.5em">
          <div class="card s">
            <img class="card-img-top img-rounded" src="images/brand/001.jpg" alt="Title">
            <div class="card-body">
              <h4 class="card-title">Title</h4>
              <p class="card-text">Body</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  @endsection