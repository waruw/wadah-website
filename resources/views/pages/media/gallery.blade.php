
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
        <h2>WADAH GALLERY</h2>
      </div>
    </div>
    <div class="row content mb-5">


      
      <div class="row mb-5">
        
        <div id="gallery1" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#gallery1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#gallery1" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#gallery1" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#gallery1" data-bs-slide-to="3" aria-label="Slide 4"></button>

          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="{{asset('img/gallery/gallery1/pendarcibodas.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Kegiatan Latihan Pendampingan Belajar Komunitas Cibodas - Jawa Barat</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="{{asset('img/gallery/gallery1/bibitarjasari.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Kegiatan Pembibitan Komunitas Arjasari - Jawa Barat</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/gallery/gallery1/pengemasancibodas.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Kegiatan Usaha Pengemasan Komunitas Cibodas - Jawa Barat</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/gallery/gallery1/uin4.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Kegiatan Kunjungan Mahasiswa UIN ke Kantor Wadah - Jakarta</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#gallery1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#gallery1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div>


      <div class="row mb-5">
        <div class="col-6">
          <div id="gallery2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#gallery2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#gallery2" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#gallery2" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#gallery2" data-bs-slide-to="3" aria-label="Slide 4"></button>
  
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{asset('img/gallery/gallery2/alor.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <p>Peresmian Bengkel Listrik Tenaga Surya di Alor - NTT</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('img/gallery/gallery2/alor1.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <p>Peresmian Bengkel Listrik Tenaga Surya di Alor - NTT</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/gallery/gallery2/nagekeo.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <p>Peresmian Bengkel Listrik Tenaga Surya di Nagekeo - NTT</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/gallery/gallery2/nagekeo2.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <p>Peresmian Bengkel Listrik Tenaga Surya di Nagekeo - NTT</p>
                </div>
              </div>
            </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#gallery2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#gallery2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div>
    
        <div class="col-6">
          <div id="gallery3" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#gallery3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#gallery3" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#gallery3" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#gallery3" data-bs-slide-to="3" aria-label="Slide 4"></button>
  
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{asset('img/gallery/gallery3/beting.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <p>Pembagian Bingkisan Natal di Komunitas Kampung Beting - Jakarta</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('img/gallery/gallery3/despuri.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <p>Pembagian Bingkisan Natal di Komunitas Kampung Despuri - Jakarta</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/gallery/gallery3/penjaringan.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <p>Pembagian Bingkisan Natal di Komunitas Kampung Penjaringan - Jakarta</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/gallery/gallery3/warabal.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <p>Pembagian Bingkisan Natal di Komunitas Kampung Warabal - Jawa Barat</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#gallery3" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#gallery3" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
      </div>

      <div class="row mb-5">
        
        <div id="galerry" class="carousel slide" data-bs-ride="carousel">
          <div id="gallery4" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#gallery4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#gallery4" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#gallery4" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#gallery4" data-bs-slide-to="3" aria-label="Slide 4"></button>
  
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{asset('img/gallery/gallery4/iso1.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <p>Kegiatan Audit ACM ISO 9001:2015 Kantor Wadah - Jakarta</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('img/gallery/gallery4/iso2.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <p>Kegiatan Audit ACM ISO 9001:2015 Kantor Wadah - Jakarta</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/gallery/gallery4/iso3.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <p>Kegiatan Audit ACM ISO 9001:2015 Kantor Wadah - Jakarta</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/gallery/gallery4/iso4.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <p>Kegiatan Audit ACM ISO 9001:2015 Kantor Wadah - Jakarta</p>
                </div>
              </div>
            </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#gallery4" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#gallery4" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div>

      {{-- <div class="row mb-5">
        
        <div id="wg" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#wg" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#wg" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#wg" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#wg" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#wg" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="{{asset('img/event/wgg/2009/1.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="{{asset('img/event/wgg/2009/2.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/wgg/2009/3.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/wgg/2009/4.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/wgg/2009/5.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#wg" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#wg" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div> --}}


  

  </div>


</section>

</main>
@endsection