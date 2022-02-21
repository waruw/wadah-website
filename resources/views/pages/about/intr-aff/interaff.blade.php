@extends('layouts.app')
@section('container')

    <main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <h2>International Affiliations</h2>
  </div>
</section><!-- End Breadcrumbs -->



 <section id="about" class="about">
  <div class="container picture1" data-aos="fade-up">
    
    <style type="text/css">
      .left { text-align: left;}
      .right { text-align: right;}
      .center { text-align: center;}
      .justify { text-align: justify;}
      .sizefont { font-size: 35px;}
      .bold { font-weight:bold;}
      .color { color: #208b3a}
      .background { background-color: #f3f5fa;}
      .backgroundd { background-color: #555;}
      .borderr{ border: 6px solid #208b3a;}
      .centerpic { display: block; margin-left: auto; margin-right: auto;}
      </style>
    <div class="row content pt-0 mb-5">
      <div class="col-lg-6">
  
                  <div id="intaf1" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#intaf1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#intaf1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#intaf1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                     </div>
                    <div class="carousel-inner" >
                      <div class="carousel-item active">
                        <img src="{{asset('img/interaff/ph/1.jpg')}}" widht="auto" height="400" alt="" />
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('img/interaff/ph/2.jpg')}}" widht="auto" height="400" alt="" />
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('img/interaff/ph/3.jpg')}}" widht="auto" height="400" alt="" />
                      </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#intaf1" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#intaf1" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-">
                    <h4>PHILIPPINES WANITA DAN HARAPAN, INC.</h4>
                    <p class="left">CEBU, PHILIPPINES</p>
                    <p style="text-align:justify"> 
                        Wanita dan Harapan means Women and Hope. We believe that access to quality 
                        community-based healthcare is a human right. We believe that each individual 
                        is an essential societal component of peace and by caring for the smallest 
                        citizens of the Philippines, the babies at birth, we are building peace, one 
                        mother, one child, one family at a time.</p>
                    <p style="text-align:justify">
                        Address: <br>
                        Greater Heights, G/F JY I.T. Center 3, Salina Drive, Lahug <br>
                        Cebu City 6000, Philippines <br>
                        Contact Person: <br>
                        Tina Ferreros - tina@wadahfoundation.or.id</p>
                        <a href="{{ asset('/ph')}}" class="btn-learn-more">Learn More</a>
                </div>
    </div>


    <div class="row content pt-5 mb-5">
      <div class="col-lg-6 pt-4 pt-lg-0">
        <h4 class="right">PERTUBUHAN WADAH KUALA LUMPUR & SELANGOR</h4>
                    <p class="right">SELANGOR, MALAYSIA</p>
                    <p style="text-align:justify"> 
                        Pertubuhan Wadah Kuala Lumpur dan Selangor was officially registered 
                        on 4th August 2014. It was formed with the purpose of carrying out the 
                        relentless pursuit and unselfish work of Ibu Anie through Wadah Foundation. 
                        Though Malaysia is blessed with a smaller population and a large pool of 
                        resources, there nevertheless exist some marginalized communities - mostly by circumstances. </p>
                    <p class="right">
                        Address: <br>
                        183A Jalan Tembusu Sierramas, 47000 Sungai Buloh <br>
                        Selangor, Malaysia <br>
                        Contact Person: <br>
                        Grace DeGuzman - fgracedeguzman@gmail.com</p>
        <a href="{{ asset('/malay')}}" class="btn-learn-more ">Learn More</a>
      </div>

            <div class="col-lg-6 pt-5">
              <div id="intaff2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#intaff2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#intaff2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('img/interaff/malay/1.jpeg')}}" widht="auto" height="400" alt="" />
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/interaff/malay/2.jpeg')}}" widht="auto" height="400" alt="" />
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#intaff2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#intaff2" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
          </div>
        </div>
    

        <div class="row content pt-5 mb-5">
      <div class="col-lg-6">
        <div id="intaf3" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#intaf3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#intaf3" data-bs-slide-to="1" aria-label="Slide 2"></button>
           </div>
          <div class="carousel-inner" >
            <div class="carousel-item active">
              <img src="{{asset('img/interaff/india/1.jpeg')}}" widht="auto" height="400" alt="" />
            </div>
            <div class="carousel-item">
              <img class="centerpic" src="{{asset('img/interaff/india/2.jpeg')}}" widht="auto" height="400" alt="" />
            </div>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#intaf3" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#intaf3" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <h4>WADAH FOUNDATION TRUST</h4>
        <p class="left">NEW DELHI, INDIA</p>
        <p style="text-align:justify"> 
            Ibu Anie Djojohadikusumo’s vision of spreading the WADAH message through her global 
            family resulted in the creation of and the activities of WADAH FOUNDATION TRUST in India. 
            It was formally established in 2016 in New Delhi.</p>
        <p style="text-align:justify">
            Address: <br>
            101 Desh Bandhu Apt’s Kalkaji 110019<br>
             New Delhi, India<br>
            Contact Person: <br>
            Babli Kalha - babli@wadahfoundation.or.id</p>
        <a href="{{ asset('/india')}}" class="btn-learn-more">Learn More</a>
      </div>
    </div>

</div>
</section>

</div>

<br><br>

</main><!-- End #main -->

@endsection