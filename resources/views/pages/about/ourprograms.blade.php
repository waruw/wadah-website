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
          <div>
    </div>
    <div class="row content mb-4">
    
    <div class="col-md-12 p-3 mb-5 background1 text-white">
      <div class="row content pt-0 mb-0">
        <div class="col-6 mb-0">
    
          <div id="edu1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#edu1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#edu1" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#edu1" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner" >
              <div class="carousel-item active ">
                <img  src="{{asset('img/program/edu/1.jpg')}}" widht="auto" height="400" alt="" />
              </div>
              <div class="carousel-item">
                <img  src="{{asset('img/program/edu/2.jpg')}}" widht="auto" height="400" alt="" />
              </div>
                <div class="carousel-item">
              <img  src="{{asset('img/program/edu/3.jpg')}}" widht="auto" height="400" alt="" />
                </div>
            </div>

              <button class="carousel-control-prev" type="button" data-bs-target="#edu1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>

              <button class="carousel-control-next" type="button" data-bs-target="#edu1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>

          </div>
        </div>

        <div class="col-6 pt-4 pt-lg-">
          <h4 class="progcolor bold pb-3">EDUCATION</h4>
            <p style="text-align:justify"> 
                Education is the foundation in raising awareness to becoming a trained, 
                skilled and trustworthyindividual. <br> <br>
                With formal education, Wadah facilitates third parties in providing 
                scholarships to those assisted by Wadah in elementary, middle school, 
                high school and college levels. For non-formal education, Wadah assists 
                pre-schools, assisted-learning classes and conducts various trainings. 
                During the pandemic, Wadah has also given access to informal education 
                to individuals through various FORUMS and WEBINARS.
            <div> 
              <a href="{{ url('/news')}}" class="btn btn-light">Read More</a></p>
            </div>
          </div>
      </div>
                
      </div>
    
  
    <div class="col-md-12 p-3 mb-5 background2 ">
      <div class="row content pt-0 mb-0">
        <div class="col-lg-6 mb-0">
    
                    <div id="kes1" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#kes1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#kes1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#kes1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                       </div>
                      <div class="carousel-inner" >
                        <div class="carousel-item active">
                          <img  src="{{asset('img/program/heal/1.jpg')}}" widht="auto" height="400" alt="" />
                        </div>
                        <div class="carousel-item">
                          <img  src="{{asset('img/program/heal/2.jpg')}}" widht="auto" height="400" alt="" />
                        </div>
                        <div class="carousel-item">
                          <img  src="{{asset('img/program/heal/3.jpg')}}" widht="auto" height="400" alt="" />
                        </div>
  
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#kes1" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#kes1" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-">
                      <h4 class="progcolor bold pb-3">HEALTH</h4>
                      <p style="text-align:justify"> 
                        Wadah Foundation supports individuals and groups involved in Health Centers 
                        and Health Service Centers to help promote awareness in healthy and clean 
                        lifestyle as well as to develop skills related to health programs. <br> <br>
                        Through this, it is expected that the said individuals and groups would be 
                        instrumental in helping their families and communities in healthy living. </p>
                        <div> <a href="{{ url('/news')}}" class="btn btn-light">Read More</a></p>
                        </div>
                  </div>
                  
      </div>
    </div>

    <div class="col-md-12 p-3 mb-5 background3">
      <div class="row content pt-0 mb-0">
        <div class="col-lg-6 mb-0">
    
                    <div id="pem1" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#pem1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#pem1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#pem1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                       </div>
                      <div class="carousel-inner" >
                        <div class="carousel-item active">
                          <img  src="{{asset('img/program/eco/1.jpg')}}" widht="auto" height="400" alt="" />
                        </div>
                        <div class="carousel-item">
                          <img  src="{{asset('img/program/eco/2.jpg')}}" widht="auto" height="400" alt="" />
                        </div>
                        <div class="carousel-item">
                          <img  src="{{asset('img/program/eco/3.jpg')}}" widht="auto" height="400" alt="" />
                        </div>
  
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#pem1" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#pem1" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg- text-white">
                      <h4 class="progcolor bold pb-3">ECONOMIC DEVELOPMENT</h4>
                      <p style="text-align:justify"> 
                        Wadah Foundation assists individuals and families to be trained and skilled in 
                        managing their own potentials in order for them to become strong, empowered and dignified.
                        <div> <a href="{{ url('/news')}}" class="btn btn-light">Read More</a></p>
                        </div>
                  </div>
      </div>
    </div>
  
  </div>
</section>

</section>



</main><!-- End #main -->

@endsection
