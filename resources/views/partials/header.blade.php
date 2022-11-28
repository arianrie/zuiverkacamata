<header class="header_section fixed-top bg-white">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Zuiver Kacamata
          </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/products"> Kacamata </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">Tentang </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact Us</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link mt-1" href="/cart" >
                <button type="button" class="border-0 text-light badge bg-primary  position-relative">
                  <i class="fa fa-shopping-cart"></i>
                  <span style="margin-top: -5px" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{ count($cart) }}
                    
                  </span>
                </button>
                </a>
            </li> --}}
          </ul>
        
        </div>
      </nav>
    </div>
  </header>

{{-- @if (count($cart) == 0)
  
@else
<div style="position: fixed; margin-top: 550px; z-index:5;" class="">
  
  <a class="nav-link mt-1" href="/cart" >
    <button type="button" class="btn btn-primary btn-lg position-relative">
      <i class="fa fa-shopping-cart"></i>
      <span style="margin-top: -5px" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
        {{ count($cart) }}
        
      </span>
    </button>
    </a>
</div>
@endif --}}




