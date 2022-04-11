<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wadah Foundation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/tunas.png') }}" rel="icon">
  <link href="{{ asset('img/tunas.png') }}" rel="tunas">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('/css/custom.css')}}" rel="stylesheet" type="text/css">

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <link href="{{asset('/css/custom.css')}}" rel="styleshee">
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <a href="{{ url('/')}}"><img src="{{asset('img/greenbesar.png')}}" widht="auto" height="60";> </a>
      {{-- <h1 class="logo me-auto"><a href="{{asset('/')}}">WADAH</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('/')}}">Home</a></li>
          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/about-us')}}"> About Us</a></li>
              <li><a href="{{ url('/about-the-founder')}}">The Founder</a></li>
              <li><a href="{{ url('/our-programs')}}">Our Programs</a></li>
              <li><a href="{{ url('/our-team')}}">Our Team</a></li>
              <li><a href="{{ url('/our-networks')}}">Our Networks</a></li>
              <li><a href="{{ url('/int-afl')}}">International Affiliations</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Media</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/news')}}">News</a></li>
              <li><a href="{{ url('/chronicles')}}">Wadah Chronicles</a></li>
              <li><a href="{{ url('/warta')}}">Warta Wadah</a></li>
              <li><a href="{{ url('/publication')}}">Publication</a></li>
              <li><a href="{{ url('/gallery')}}">Gallery</a></li>
              <!-- <li><a href="{{ url('/blog')}}">Blog</a></li> -->
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Event</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/wgg')}}">Wadah Global Gathering</a></li>
              <li><a href="{{ url('/rewin')}}">Rewin</a></li>
              {{-- <li><a href="{{ url('/coevents')}}">Co-Sponsored Events</a></li> --}}
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Get Involved</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/contact-us')}}">Contact Us</a></li>
              <li><a href="{{ url('/join-us')}}">Join Us</a></li>
            </ul>
          </li>
          <li><a class="btn btn-outline-succes box-line" href="{{ url('/donate')}}">Donate</a></li>

          <i class="bi bi-list mobile-nav-toggle"></i>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{strtoupper(Lang::locale())}}
          </a>
          <ul lass="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="lang/id">ID</a></li>
              <li><a class="dropdown-item" href="lang/en">EN</a></li>
        </ul>
      </li>
      
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('container')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Subscribe to our Newsletter</h4>
            <p>Receive updated information and news by joining our mailing list:</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>WADAH</h3>
            <p>
              Jl. Penjernihan II No. 7<br>
              Kel. Bendungan Hilir, Kec. Tanah abang<br>
              Jakarta Pusat 10210<br>
              Indonesia <br><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <br><br>
            <ul>
              <strong>Phone:</strong> (+62)21 5799-2162<br>
              <strong>Email:</strong> info@wadahfoundation.or.id<br>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <br>
            <div class="mt-4">
              <a href="https://give2asia.org/wadahfoundation/"><img src="{{asset('img/give2asia.png')}}" widht="auto" height="40";> </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>For more updated information and news, subscribe & follow us:</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/wadahfoundation" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/wadahfoundation" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="instagram.com/wadahfoundation" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.youtube.com/user/wadahfoundation" class="Youtube"><i class="bx bxl-youtube"></i></a>
              <a href="https://www.linkedin.com/company/wadahfoundation" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright center">
        &copy; Copyright <strong><span>Wadah Foundation</span></strong>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('/vendor/waypoints/noframework.waypoints.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/js/main.js')}}"></script>

  <!-- CK EDITOR -->
  	
  <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

</body>

</html>