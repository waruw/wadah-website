@extends('layouts.app')
@section('container')

    <main id="main">

      <style type="text/css">
        .left { text-align: left;}
        .right { text-align: right;}
        .center { text-align: center;}
        .justify { text-align: justify;}
        .sizefont { font-size: 35px;}
        .bold { font-weight:bold;}
        .color { color: #583d45}
        .background1 { background-color: #85b3d8;}
        .background2 { background-color: #a1e2b2;}
        .background3 { background-color: #db7e9a;}
        .backgroundd { background-color: #e7e5df;}
        .borderr{ border: 6px solid #208b3a;}
        .centerpic { display: block; margin-left: auto; margin-right: auto;}
}
        </style>

<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
  </div>
</section><!-- garis atas -->

<section>
  <div class="container">
    <div class="row title">
      <div class="section-title pt-4">
        <h2>Our Programs</h2>
      </div>
    </div>
    <div class="row content mb-4">

    <!-- EDUCATION -->
    
    <div class="col-md-12 p-3 mb-5 background1 text-white">
      <div class="row pt-0 mb-0">
        <div class="col mb-0">
    
          <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img  src="{{asset('img/program/edu/1.jpg')}}" widht="auto" height="400" alt="" />
                <div class="carousel-caption d-none d-md-block">
                  <p>Kegiatan Lomba PAUD Kartini Cibodas - Jawa Barat</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img  src="{{asset('img/program/edu/2.jpg')}}" widht="auto" height="400" alt="" />
                <div class="carousel-caption d-none d-md-block">
                  <p>Pendampingan Belajar Komunitas Cibodas - Jawa Barat</p>
                </div>
              </div>
              <div class="carousel-item">
                <img  src="{{asset('img/program/edu/3.jpg')}}" widht="auto" height="400" alt="" />
                <div class="carousel-caption d-none d-md-block">
                  <p>Pendampingan Belajar Komunitas Mutiara Abadi - Yogyakarta</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </div>

        <div class="col pt-4 pt-lg-">
          <h4 class="progcolor bold pb-3">EDUCATION</h4>
          <div>
            <p style="text-align:justify"> 
                Education is the foundation in raising awareness to becoming a trained, 
                skilled and trustworthyindividual. <br> <br>
                With formal education, Wadah facilitates third parties in providing 
                scholarships to those assisted by Wadah in elementary, middle school, 
                high school and college levels. For non-formal education, Wadah assists 
                pre-schools, assisted-learning classes and conducts various trainings. 
                During the pandemic, Wadah has also given access to informal education 
                to individuals through various FORUMS and WEBINARS.
            </div>
            <div class="pt-4 center"> 
              <a href="{{ url('/news')}}" class="btn btn-light">Read More</a></p>
            </div>
          </div>
      </div>       
    </div>

    <!-- HEALTH -->

    <div class="col-md-12 p-3 mb-5 background2 text-grey">
      <div class="row pt-0 mb-0">
        <div class="col mb-0">
    
          <div id="health" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#health" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#health" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#health" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img  src="{{asset('img/program/heal/1.jpg')}}" widht="auto" height="400" alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Kegiatan Sharing Covid Bersama MSF Komunitas Kampung Beting- Jakarta</p>
                  </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img  src="{{asset('img/program/heal/2.jpg')}}" widht="auto" height="400" alt="" />
                <div class="carousel-caption d-none d-md-block">
                  <p>Kegiatan Pendampingan Ibu Hamil Klinik Bidan Wiwied Komunitas Cibodas - Jawa Barat</p>
                </div>
              </div>
              <div class="carousel-item">
                <img  src="{{asset('img/program/heal/3.jpg')}}" widht="auto" height="400" alt="" />
                  <div class="carousel-caption d-none d-md-block">
                  <p>Kegiatan Posyandu Komunitas Koa - NTT</p>
                  </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#health" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#health" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </div>

        <div class="col pt-4 pt-lg-">
          <h4 class="progcolor bold pb-3">HEALTH</h4>
          <div>
            <p style="text-align:justify"> 
              <p style="text-align:justify"> 
                Wadah Foundation supports individuals and groups involved in Health Centers 
                and Health Service Centers to help promote awareness in healthy and clean 
                lifestyle as well as to develop skills related to health programs. <br> <br>
                Through this, it is expected that the said individuals and groups would be 
                instrumental in helping their families and communities in healthy living.
            </div>
            <div class="pt-4 center"> 
              <a href="{{ url('/news')}}" class="btn btn-light">Read More</a></p>
            </div>
          </div>
      </div>       
    </div>

    <!-- ECONOMIC -->

    <div class="col-md-12 p-3 mb-5 background3 text-white">
      <div class="row pt-0 mb-0">
        <div class="col mb-0">
    
          <div id="economic" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#economic" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#economic" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#economic" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img  src="{{asset('img/program/eco/1.jpg')}}" widht="auto" height="400" alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Kegiatan Menjahit Komunitas Kampung Beting - Jakarta</p>
                  </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img  src="{{asset('img/program/eco/2.jpg')}}" widht="auto" height="400" alt="" />
                <div class="carousel-caption d-none d-md-block">
                  <p>Kegiatan Pertanian Komunitas Cibodas - Jawa Barat</p>
                </div>
              </div>
              <div class="carousel-item">
                <img  src="{{asset('img/program/eco/3.jpg')}}" widht="auto" height="400" alt="" />
                <div class="carousel-caption d-none d-md-block">
                  <p>kegiatan Listrik Tenaga Surya Komunitas Pomat - NTT</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#economic" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#economic" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </div>

        <div class="col pt-4 pt-lg-">
          <h4 class="progcolor bold pb-3">ECONOMIC DEVELOPMENT</h4>
          <div>
            <p style="text-align:justify"> 
              <p style="text-align:justify"> 
                Wadah Foundation assists individuals and families to be trained and skilled in 
                managing their own potentials in order for them to become strong, empowered and dignified.
            </div>
            <div class="pt-4 center"> 
              <a href="{{ url('/news')}}" class="btn btn-light">Read More</a></p>
            </div>
          </div>
      </div>       
    </div>
  
  </div>
</section>

</section>



</main><!-- End #main -->

@endsection
