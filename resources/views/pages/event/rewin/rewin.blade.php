
@extends('layouts.app')
@section('container')
  
<main id="main">

<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
  </div>
</section><!-- garis atas -->

<section>
  <div class="container">
    <div class="row title">
      <div class="section-title pt-4">
        <h2>REMAJA WADAH INDONESIA <br> (REWIN) </h2>
      </div>
    </div>
    <div class="row content mb-5 justify">
      <div class="mb-3">
        <p>Wadah youths from various communities in the country, led by their community coordinators, 
          conducted an activity in Arjasari Village, South Bandung, West Java. <br><br>
          The event was named Remaja Wadah Indonesia (REWIND) which was a basic leadership training 
          for teenagers from various Wadah communities in JaBoBek, West Java, Yogyakarta and Eastern 
          Indonesia (KTI) participated in this activity. </p>
      </div>

            <!-- 2016 -->
      <div class="col-md-12 p-3 mb-5">
        <div class="row mb-0">
          <div class="col mb-0">
            <div class="right">
            <h3>2016</h3>
            <h4><a>2ND REMAJA WADAH INDONESIA (REWIN)</a></h4>
            <p>BANDUNG, INDONESIA</p>
            </div>
              <div class="justify">
                <p>
                  The Second Wadah Indonesia Youth Program (REWIN) with the theme of “building a 
                  struggling spirit of the Indonesian teens”, was officially opened by the Chairperson 
                  of Wadah Foundation, Retnaning Tyas, in Cisalak football field, Cisalak Hamlet, 
                  Arjasari Village on Wednesday, July 13, 2016. <br><br>

                  REWIN programs,  which  involved teenagers from different Wadah communities in 
                  the country, aim to train devout, noble, steadfast and confident young people.
                </p>
                <div class="mt-2 mb-2 right">
                    <a href="{{ asset('/2ndrewin')}}" class="btn btn-secondary">Read More</a>
                </div>
              </div>
          </div>
  
          <div class="col pt-0 pt-lg- mb-5">

            <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="{{asset('img/event/rewin/1st/1.jpg')}}" widht="auto" height="400" alt="">
                  <div class="carousel-caption d-none d-md-block">
                    <p>2nd Remaja Wadah Indonesia (REWIN)</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="{{asset('img/event/rewin/1st/2.jpg')}}" widht="auto" height="400" alt="">
                  <div class="carousel-caption d-none d-md-block">
                    <p>2nd Remaja Wadah Indonesia (REWIN)</p>
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
  

            <!-- 2015 -->
      <div class="col-md-12 p-3 mb-5">
        <div class="row mb-0">
          <div class="col mb-0">
            <div class="right">
            <h3>2015</h3>
            <h4><a>1ST REMAJA WADAH INDONESIA (REWIN)</a></h4>
            <p>BANDUNG, INDONESIA</p>
            </div>
            <div class="justify">
            <p>
              Pemuda wadah dari berbagai komunitas di tanah air yang dipimpin oleh koordinator komunitasnya, 
              melakukan kegiatan di Desa Arjasari, Bandung Selatan, Jawa Barat, pada 29 Juli hingga 
              1 Agustus 2015. Acara tersebut diberi nama Remaja Wadah Indonesia (REWIND) yang merupakan 
              pelatihan kepemimpinan dasar bagi remaja dari berbagai komunitas Wadah. Sekitar 31 pemuda 
              dari komunitas Wadah di JaBoBek, Jawa Barat, Yogyakarta dan Indonesia Timur (KTI) mengikuti 
              kegiatan ini.
            </p>
            <div class="mt-2 mb-2 right">
                <a href="{{ asset('/1strewin')}}" class="btn btn-secondary">Read More</a>
            </div>
          </div>
          </div>
  
          <div class="col pt-0 pt-lg-">
            
            <div class="col pt-0 pt-lg-">
            
              <div id="rewin2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#rewin2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#rewin2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{asset('img/event/rewin/2nd/1.jpg')}}" widht="auto" height="400" alt="">
                    <div class="carousel-caption d-none d-md-block">
                      <p>1st Remaja Wadah Indonesia (REWIN)</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{asset('img/event/rewin/2nd/2.jpg')}}" widht="auto" height="400" alt="">
                    <div class="carousel-caption d-none d-md-block">
                      <p>1st Remaja Wadah Indonesia (REWIN)</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#rewin2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#rewin2" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              
            </div>
          </div>
        </div>
      </div>       
    </div>

  
  </div>
</section>

</main>
@endsection