<section class="w3l-bootstrap-header">
  <nav class="py-2 navbar navbar-expand-lg navbar-light py-lg-3">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}" width="100" alt="logo"></a>
      <!-- if logo is image enable this
    <a class="navbar-brand" href="#index">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="mx-auto navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about-us') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/services') }}">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/contact-us') }}">Contact</a>
          </li>
        </ul>
        <div class="main-social-head">
            <a data-aos="fade-left"  data-aos-duration="1000" data-aos-easing="ease-in-out" href="https://web.facebook.com/pages/category/Product-Service/Promatex-paint-103214094951471/?_rdc=1&_rdr" target="_blank" class="facebook"><span class="fa fa-facebook"></span></a>
            <a data-aos="fade-left"  data-aos-duration="1000" data-aos-easing="ease-in-out" href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
            <a data-aos="fade-left"  data-aos-duration="1000" data-aos-easing="ease-in-out" href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
        </div>
      </div>
    </div>
  </nav>
</section>
