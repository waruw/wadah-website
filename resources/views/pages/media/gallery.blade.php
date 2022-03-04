
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
        
        <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="8" aria-label="Slide 9"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="{{asset('img/event/rewin/1st/1.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="{{asset('img/event/rewin/1st/2.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/rewin/1st/3.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/rewin/1st/4.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/rewin/1st/5.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/rewin/1st/6.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/rewin/1st/7.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/rewin/1st/8.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
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

      <div class="row mb-5">
        
        <div id="galerry" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#galerry" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#galerry" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#galerry" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#galerry" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#galerry" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#galerry" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#galerry" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#galerry" data-bs-slide-to="7" aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#galerry" data-bs-slide-to="8" aria-label="Slide 9"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="{{asset('img/event/rewin/2nd/1.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="{{asset('img/event/rewin/2nd/2.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/rewin/2nd/3.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/rewin/2nd/4.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/rewin/2nd/5.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/rewin/2nd/6.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/rewin/2nd/7.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/rewin/2nd/8.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#galerry" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#galerry" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div>

      <div class="row mb-5">
        
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

      </div>

  
  
  </div>
</section>

</main>
@endsection