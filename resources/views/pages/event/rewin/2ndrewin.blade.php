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
    <div class="row content">
      <div class="center mb-0">
          <h3>Wadah Youth Join Leadership Training in the Village of Arjasari</h3>
          <h4>2nd Remaja Wadah Indonesia (REWIN)</h4>
          <h4>Bandung, Indonesia</h4>
          <h4>July 11 - 16, 2016</h4> <br>
          <p class="justify">The Second Wadah Indonesia Youth Program (REWIN) with the theme of “building a struggling 
            spirit of the Indonesian teens”, was officially opened by the Chairperson of Wadah Foundation, 
            Retnaning Tyas, in Cisalak football field, Cisalak Hamlet, Arjasari Village on Wednesday, 
            July 13, 2016. On this occasion, Retnaning Tyas delivered a written speech of Mrs. 
            Anie Hashim Djojohadikusomo, Wadah Patron, who could not join the ceremony because she 
            was still abroad. In her written speech, Mrs. Anie said that in the future, Wadah expects 
            all teenagers in Arjasari Village would have an opportunity to participate in the REWIN 
            program and in the future,  teenagers from various corners of the archipelago could 
            even join the program. <br><br>

            REWIN programs,  which  involved teenagers from different Wadah communities in the country, 
            aim to train devout, noble, steadfast and confident young people. <br><br>
            
            The second REWIN, which was held on 11 to 16 July 2016 was joined by 47 youths (aged 13-18) 
            from various Wadah communities including Jakarta, Bogor, Bekasi, Bandung, Yogyakarta, Kupang, 
            Sikka, Ternate, Malifut and Ambon. Preceding  the opening ceremony of REWIN, the participants 
            had the opportunity to know more closely the Arjasari village by taking a village tour and they 
            visited several places of cultural heritage in the village.</p>
      </div>
    </div>
  </div>
</section>


<section>
  <div class="container">
    <div class="row title center mb-4">
        <h4>REWIN GALLERY</h4>
    </div>
    <div class="row content">
      
    <div class="row content mb-0">
      
      <div class="row">
        
      <div class="col-md-6">
        
        <div id="#rewin1" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#rewin1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#rewin1" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#rewin1" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#rewin1" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('img/event/rewin/2nd/1.jpg')}}" widht="auto" height="400" alt="">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/rewin/2nd/2.jpg')}}" widht="auto" height="400" alt="">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/rewin/2nd/3.jpg')}}" widht="auto" height="400" alt="">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/event/rewin/2nd/4.jpg')}}" widht="auto" height="400" alt="">
              <div class="carousel-caption d-none d-md-block">
                <p>Caption</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#rewin1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#rewin1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

        </div>

      </div>
      
      <div class="col-md-6">
       
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#rewin11" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#rewin11" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#rewin11" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#rewin11" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('img/event/rewin/2nd/5.jpg')}}" widht="auto" height="400" alt="">
            <div class="carousel-caption d-none d-md-block">
              <p>Caption</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/event/rewin/2nd/6.jpg')}}" widht="auto" height="400" alt="">
            <div class="carousel-caption d-none d-md-block">
              <p>Caption</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/event/rewin/2nd/7.jpg')}}" widht="auto" height="400" alt="">
            <div class="carousel-caption d-none d-md-block">
              <p>Caption</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/event/rewin/2nd/8.jpg')}}" widht="auto" height="400" alt="">
            <div class="carousel-caption d-none d-md-block">
              <p>Caption</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#rewin11" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#rewin11" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>
    </div>
    
    <p class="pt-5 mb-3 center">Read about the happenings at the 2nd Remaja Wadah Indonesia in our newsletter below:</p>
    <a class="center" href="{{ url('https://drive.google.com/file/d/1J8DZA2WtL6JpKwhEkFI_qammG2k6WE7Z/view')}}">
      <img class="centerpic" src="{{asset('img/media/chronicles/2016-12.jpg')}}" widht="auto" height="250"> </a>

  </div>
</section>


</main><!-- End #main -->

@endsection