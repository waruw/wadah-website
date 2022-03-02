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
          <h4>1st Remaja Wadah Indonesia (REWIN)</h4>
          <h4>Bandung, Indonesia</h4>
          <h4>July 29 - August 1, 2015</h4> <br>
          <p class="justify">Wadah youths from various communities in the country, led by their community coordinators, 
            conducted an activity in Arjasari Village, South Bandung, West Java, on July 29 to August 1, 2015. 
            The event was named Remaja Wadah Indonesia (REWIND) which was a basic leadership training for 
            teenagers from various Wadah communities. About 31 youths from Wadah communities in JaBoBek, 
            West Java, Yogyakarta and Eastern Indonesia (KTI) participated in this activity.  <br> <br>

            The activities were designed to help the youth build a positive outlook in life and teach them 
            proper values. Giving importance to family history and the leadership of the head of the family 
            was also emphasized during the activities. By the end of the event, the youth were expected to 
            have a more positive response to the world so that they can grow and develop as better individuals. 
            The committee expects that there would be a continued guidance and support from their peers and 
            community after the completion of the said activity.  <br> <br>

            The opening of the activity, which was held in the center of an open field in Arjasari, was attended 
            by Mrs. Anie Djojohadikusumo, the Patron of Wadah Foundation. Also present were the village chief of 
            Arjasari and teachers from several schools around the area. The youth present for the REWIND event 
            joined the prepared activities with joy and full of zeal.</p>
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

      <p class="pt-5 mb-3 center">Read about the happenings at the 1st Remaja Wadah Indonesia in our newsletter below:</p>
      <a class="center" href="{{ url('https://drive.google.com/file/d/1VsjYAfE0mkdzdLIymPLHRw-irLVLTpf0/view')}}">
      <img class="centerpic" src="{{asset('img/media/newsletter/2015-12.jpg')}}" widht="auto" height="250"> </a>


    </div>
  </div>
</section>     

</main><!-- End #main -->

@endsection