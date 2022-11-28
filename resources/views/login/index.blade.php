
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>
   Login Zuiver Kacamata
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="/dashboard-assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/dashboard-assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- CSS Files -->
  <link id="pagestyle" href="/dashboard-assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
</head>

<body class="">
 
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome Back</h3>
                    @if (session()->has('loginError'))
                    <div class="alert alert-danger">
                        {{ session('loginError') }}
                    </div>
                    @endif
                </div>
                <div class="card-body">
                  <form role="form" method="post" action="/login">
                    @method('post')
                    @csrf
                    <label>Email</label>
                    <div class="mb-3">
                      <input name="email" type="email" class="form-control @error('email')
                          is-invalid
                      @enderror" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                  @error('email')
                  <div class="feedback-invalid">
                    {{ $message }}
                </div>
                  @enderror
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input name="password" type="password" class="form-control @error('password')
                          is-invalid
                      @enderror" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                    
                      @error('password')
                      <div class="feedback-invalid">
                        {{ $message }}
                    </div>
                      @enderror
                    </div>
                    
                    <div class="text-center">
                      <button  type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Login</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('/dashboard-assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->

  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="/dashboard-assets/js/core/popper.min.js"></script>
  <script src="/dashboard-assets/js/core/bootstrap.min.js"></script>
  <script src="/dashboard-assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/dashboard-assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/dashboard-assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
</body>

</html>