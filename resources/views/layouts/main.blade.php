<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
  <meta content="#046582" name="theme-color">
  <meta content="#046582" name="msapplication-navbutton-color">
  <meta content="#046582" name="apple-mobile-web-app-status-bar-style">
  <meta content="yes" name="apple-mobile-web-app-capable">




  <title>Zuiver Shop</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="/css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>



</head>

<body>

  <div class="hero_area">
    <div class="hero_social" style="">
      <a href="">
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </a>
      <a href="">
        <i class="fa fa-twitter" aria-hidden="true"></i>
      </a>
      <a href="">
        <i class="fa fa-linkedin" aria-hidden="true"></i>
      </a>
      <a href="">
        <i class="fa fa-instagram" aria-hidden="true"></i>
      </a>
    </div>
    <!-- header section strats -->

    <!-- end header section -->
    <!-- slider section -->
    

  <!-- shop section -->
  @yield('contents')
  
  <!-- end client section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4 footer-col">
          <div class="footer_detail">
            <h4>
              Zuiver
            </h4>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 footer-col">
          <div class="footer_contact">
            <h4>
              Kontak
            </h4>
            <div class="contact_link_box">
              <a href="https://www.google.co.id/maps/place/Zuiver+Kacamata/@-6.338472,107.3278403,21z/data=!4m14!1m8!3m7!1s0x2e69777f6a57f5e5:0x320b42e3386aeb52!2sZuiver+Kacamata!8m2!3d-6.3384864!4d107.3279352!9m1!1b1!3m4!1s0x2e69777f6a57f5e5:0x320b42e3386aeb52!8m2!3d-6.3384864!4d107.3279352">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Lokasi
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Hubungi - 083154964429
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  zuiver4024@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
       
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; Zuiver Indonesia - <span id="displayYear"></span> 
        
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  {{-- <script src="/js/jquery-3.4.1.min.js"></script> --}}
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
  <script>
      var splide = new Splide('.splide', {
          type: 'loop',
          perPage: 3,
          rewind: true,
          breakpoints: {
              640: {
                  perPage: 2,
                  gap: '.7rem',
                  height: '12rem',
              },
              480: {
                  perPage: 1,
                  gap: '.7rem',
                  height: '12rem',
              },
          },
      });
      splide.mount();
  </script>
  <script type="text/javascript">
    let page = 1;
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height()) {
            page++;
            loadMoreData(page);
        }
    });


    function loadMoreData(page){
      $.ajax(
            {
                url: '?page=' + page,
                type: "get",
                beforeSend: function()
                {
                    $('.ajax-load').show();
                }
            })
            .done(function(data)
            {
                if(data.html == " "){
                    $('.ajax-load').html("No more records found");
                    return;
                }
                $('.ajax-load').hide();
                $("#post-data").append(data.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                  alert('server not responding...');
            });
    }
</script>
  
</body>

</html>