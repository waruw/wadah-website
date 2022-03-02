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
          <h2>International Affiliations</h2>
        </div>
    </div>

    <div class="row content">
      
      <!-- Philipina -->

      <div class="col-md-12 p-3 mb-5">
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
                  <img src="{{asset('img/interaff/ph/1.jpg')}}" widht="auto" height="400" alt="" />
                    <div class="carousel-caption d-none d-md-block">
                      <p>BAYANIHAN AWARD 2015. Pres. Benigno Aquino III presenting the Bayanihan Award to Cristina Ferreros of Wadah Philippines.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="{{asset('img/interaff/ph/2.jpg')}}" widht="auto" height="400" alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>NATIONAL ANTHEM. The awardees together with the officials singing the national anthem,
                      Lupang Hinirang.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/interaff/ph/3.jpg')}}" widht="auto" height="400" alt="" />
                <div class="carousel-caption d-none d-md-block">
                  <p>Philippines Wanita Dan Harapan, Inc. was one of the two NGO awardees honored by the 2nd Air Division, Philippine Air Force, during its 37th Founding Anniversary.</p>
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
            <h4>PHILIPPINES WANITA DAN HARAPAN, INC.</h4>
            <div>
                      <p class="left">CEBU, PHILIPPINES</p>
                      <p style="text-align:justify"> 
                          Wanita dan Harapan means Women and Hope. We believe that access to quality 
                          community-based healthcare is a human right. We believe that each individual 
                          is an essential societal component of peace and by caring for the smallest 
                          citizens of the Philippines, the babies at birth, we are building peace, one 
                          mother, one child, one family at a time.</p>
                      <p style="text-align:justify">
                          Address:
                          Greater Heights, G/F JY I.T. Center 3, Salina Drive, Lahug <br>
                          Cebu City 6000, Philippines <br>
                          Contact Person:
                          Tina Ferreros</p>
                         <div class="left mb-3">
                          <a href="{{ asset('/ph')}}" class="btn btn-secondary">Read More</a>
                        </div>
              </div>
            </div>
        </div>       
      </div>

      <!-- Malaysia -->

      <div class="col-md-12 p-3 mb-5">
        <div class="row pt-0 mb-0">
          <div class="col mb-0">

            <h4 class="right">PERTUBUHAN WADAH KUALA LUMPUR & SELANGOR</h4>
            <div>
              <p class="right">SELANGOR, MALAYSIA</p>
              <p style="text-align:justify"> 
                Pertubuhan Wadah Kuala Lumpur dan Selangor was officially registered 
                on 4th August 2014. It was formed with the purpose of carrying out the 
                relentless pursuit and unselfish work of Ibu Anie through Wadah Foundation. 
                Though Malaysia is blessed with a smaller population and a large pool of 
                resources, there nevertheless exist some marginalized communities - mostly by circumstances. </p>
            <p class="right">
                Address:
                183A Jalan Tembusu Sierramas, 47000 Sungai Buloh <br>
                Selangor, Malaysia <br>
                Contact Person:
                Grace DeGuzman </p>
                <div class="right mb-3">
                <a href="{{ asset('/malay')}}" class="btn btn-secondary right">Read More</a>
                </div>
              </div>
          </div>
  
          <div class="col pt-0 pt-lg-">
            
            <div id="malay" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#malay" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#malay" data-bs-slide-to="1" aria-label="Slide 2"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="{{asset('img/interaff/malay/1.jpg')}}" widht="auto" height="400" alt="" />
                    <div class="carousel-caption d-none d-md-block">
                      <p>Spotlight Kuala Lumpur</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="{{asset('img/interaff/malay/2.jpg')}}" widht="auto" height="400" alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Spotlight Kuala Lumpur</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#malay" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#malay" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

          </div>
        </div>       
      </div>

       <!-- India -->

       <div class="col-md-12 p-3">
        <div class="row pt-0 mb-0">
          <div class="col mb-0">
            
            <div id="india" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#india" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#india" data-bs-slide-to="1" aria-label="Slide 2"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="{{asset('img/interaff/india/1.jpg')}}" widht="auto" height="400" alt="" />
                    <div class="carousel-caption d-none d-md-block">
                      <p>Babli Kalha of Wadah India is in full support of Ankur Gupta’s launching of his new song “Tore Naina.”</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="{{asset('img/interaff/india/2.jpg')}}" widht="auto" height="400" alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>-</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#india" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#india" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
      
          </div>
        
  
          <div class="col pt-4 pt-lg-">
            <h4>WADAH FOUNDATION TRUST</h4>
            <div>
              <p class="left">NEW DELHI, INDIA</p>
              <p style="text-align:justify"> 
                Ibu Anie Djojohadikusumo’s vision of spreading the WADAH message through her global 
                family resulted in the creation of and the activities of WADAH FOUNDATION TRUST in India. 
                It was formally established in 2016 in New Delhi.</p>
                  <p style="text-align:justify">
                Address:
                101 Desh Bandhu Apt’s Kalkaji 110019<br>
                New Delhi, India<br>
                Contact Person:
                Babli Kalha</p>
                  <div class="left mb-3">
                  <a href="{{ asset('/india')}}" class="btn btn-secondary">Read More</a>
                  </div>
              </div>
              </div>
            </div>
        </div>       
      </div>
    
  </div>
</div>
  </div>
</section>




</div>
</section>

</div>

<br><br>

</main><!-- End #main -->

@endsection