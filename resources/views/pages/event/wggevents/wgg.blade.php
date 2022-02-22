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
        <img src="{{asset('img/event/wgg.png')}}" width="300" height="267">
        <h2 class="pt-4">Wadah Global Gathering</h2>
      </div>
    </div>
    <div class="row content mb-5">
      <p>The Wadah Global Gathering (WGG) is an initiative by the Wadah Foundation dedicated 
        to celebrating women and men of impact from all over the world by sharing their 
        inspiring stories.
        <br>
        <br>
        Over the years, the WGG has showcased amazing individuals of diverse ages and backgrounds
        --most of them invisible and unheralded-- by presenting their powerful narratives, 
        issues, plans of action, and provoking a global conversation.</p>
    </div>

    <div class="row content mb-5">

      <!-- 2018 -->
      <div class="col-md-12 p-3 mb-5">
        <div class="row pt-0 mb-0">
          <div class="col mb-0">
          <div id="wgg0" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#wgg0" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#wgg0" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#wgg0" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#wgg0" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#wgg0" data-bs-slide-to="3" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner" >
              <div class="carousel-item active">
                <img src="{{asset('img/event/2018/1.jpg')}}" widht="auto" height="400"  alt="" />
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/event/2018/2.jpg')}}" widht="auto" height="400" alt="" />
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/event/2018/3.jpg')}}" widht="auto" height="400" alt="" />
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/event/2018/4.jpg')}}" widht="auto" height="400" alt="" />
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/event/2018/5.jpg')}}" widht="auto" height="400"  alt="" />
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#wgg0" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#wgg0" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

        <div class="col pt-4 pt-lg-">
            <h3>2018</h3>
            <h4><a>3RD WADAH GLOBAL GATHERING</a></h4>
            <p>JAKARTA, INDONESIA</p>
            <p style="text-align:justify">
                The 3rd Wadah Global Gathering, conducted on 22-23 March 2018, 
                was about women leaders who had been working courageously and tirelessly 
                to address the challenges confronting their societies, cultures and communities. 
            <div class="mt-2 left">
                <a href="{{ asset('/3rd')}}" class="btn btn-secondary">Read More</a>
            </div>
        </div>
      </div>
      </div>

      <!-- 2015 -->
      <div class="col-md-12 p-3 mb-5">
        <div class="row pt-0 mb-0">
          <div class="col mb-0">
            <h3 class="right">2015</h3>
            <h4 class="right"><a>2ND WADAH GLOBAL GATHERING</a></h4>
            <p class="right">YOGYAKARTA, INDONESIA</p>
            <p style="text-align:justify">
              At the 2nd Wadah Global Gathering held in Yogyakarta, Indonesia, 
              on March 18-20, 2015, selected youths from Afghanistan, Bhutan, 
              India, Indonesia, Nepal, and the Philippines shared the stage with 
              four CNN Heroes of the Year and held the audience in their thrall 
              with their graphic tales and heart-rending aspirations.
            <div class="mt-2 right">
                <a href="{{ asset('/2nd')}}" class="btn btn-secondary">Read More</a>
            </div>
          </div>
  
          <div class="col pt-0 pt-lg-">
            
            <div id="#wgg1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#wgg1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#wgg1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#wgg1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#wgg1" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#wgg1" data-bs-slide-to="4" aria-label="Slide 5"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{asset('img/event/2015/1.jpg')}}" widht="auto" height="400" alt="" />
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/2015/2.jpg')}}" widht="auto" height="400" alt="" />
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/2015/3.jpg')}}" widht="auto" height="400" alt="" />
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/2015/4.jpg')}}" widht="auto" height="400" alt="" />
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/2015/5.jpg')}}" widht="auto" height="400" alt="" />
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#wgg1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#wgg1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
  
            </div>
            </div>
        </div>       
      </div>


      <!-- 2012 -->
      <div class="col-md-12 p-3 mb-5">
        <div class="row pt-0 mb-0">
          <div class="col mb-0">
    
          <div id="#wgg2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#wgg2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#wgg2" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#wgg2" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#wgg2" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#wgg2" data-bs-slide-to="3" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner" >
              <div class="carousel-item active">
                <img src="{{asset('img/event/2012/1.jpg')}}" widht="auto" height="400"  alt="" />
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/event/2012/2.jpg')}}" widht="auto" height="400" alt="" />
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/event/2012/3.jpg')}}" widht="auto" height="400" alt="" />
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/event/2012/4.jpg')}}" widht="auto" height="400" alt="" />
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/event/2012/5.jpg')}}" widht="auto" height="400"  alt="" />
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#wgg2" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#wgg2" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

        <div class="col pt-4 pt-lg-">
          <h3>2012</h3>
          <h4><a>1ST WADAH GLOBAL GATHERING</a></h4>
          <p>BALI, INDONESIA</p>
          <p style="text-align:justify">
            The discussions, featuring illustrious personalities led by four CNN Heroes: 
            Efren Penaflorida, Anuradha Koirala, Robin Lim and Budi Suhardi; Dr. Pardis 
            Madhavi; Dr. Abdul Karim Raj; Dr. Imam Prasodjo; Fr. Rocky Evangelista; Dr. 
            Agus Priyono; Pdt Karina de Vega; Imelda Salajan; Rio and TJ Manotoc, and wonder 
            kid Kesz Valdez, were intense, rich, and varied. 
            <div class="mt-2 left">
            <a href="{{ asset('/1st')}}" class="btn btn-secondary">Read More</a>
            </div>
        </div>
      </div>
      </div>


      <!-- 2010 -->
      <div class="col-md-12 p-3 mb-5">
        <div class="row pt-0 mb-0">
          <div class="col mb-0">
            <h3 class="right">2010</h3>
            <h4 class="right"><a>1ST WADAH INTERATIONAL GATHERING</a></h4>
            <p class="right">MANILA, PHILIPPINES</p>
            <p style="text-align:justify">
              The Wadah International Gathering held in Manila from September 29 to October 2, 
              2010 penetrated global issues on which Wadah Foundation will take a stand. Global 
              Best Practices in the areas of anti-human trafficking and poverty alleviation through 
              education, community development, micro-finance and social enterprise were high on the 
              agenda.
            <div class="mt-2 right">
              <a href="{{ asset('/1stint')}}" class="btn btn-secondary">Read More</a>
            </div>
          </div>
  
          <div class="col pt-0 pt-lg-">
            
            <div id="wgg3" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#wgg3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#wgg3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#wgg3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#wgg3" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#wgg3" data-bs-slide-to="4" aria-label="Slide 5"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{asset('img/event/2010/1.jpg')}}" widht="auto" height="400" alt="" />
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/2010/2.jpg')}}" widht="auto" height="400" alt="" />
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/2010/3.jpg')}}" widht="auto" height="400" alt="" />
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/2010/4.jpg')}}" widht="auto" height="400" alt="" />
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/2010/5.jpg')}}" widht="auto" height="400" alt="" />
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#wgg3" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#wgg3" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
  
            </div>
            </div>
        </div>       
      </div>


      <!-- 2012 -->
      <div class="col-md-12 p-3 mb-5">
        <div class="row pt-0 mb-0">
          <div class="col mb-0">
    
          <div id="wgg4" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#wgg4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#wgg4" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#wgg4" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#wgg4" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#wgg4" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('img/event/2009/1.jpg')}}" widht="auto" height="400" alt="" />
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/event/2009/2.jpg')}}" widht="auto" height="400" alt="" />
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/event/2009/3.jpg')}}" widht="auto" height="400" alt="" />
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/event/2009/4.jpg')}}" widht="auto" height="400" alt="" />
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/event/2009/5.jpg')}}" widht="auto" height="400" alt="" />
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#wgg4" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#wgg4" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

        <div class="col pt-4 pt-lg-">
          <h3>2009</h3>
          <h4><a>WADAH GATHERING</a></h4>
          <p>JAKARTA, INDONESIA</p>
          <p style="text-align:justify">
            The first Wadah Gathering was held in Jakarta, Indonesia in May 2009. 
            It convened Wadah's pioneering heroes and homegrown champions who overcame 
            tremendous odds to empower communities at the grassroots level. 
            The Gathering raised the visibility of the field workers and gave them 
            access to an international audience with whom they shared their tears, 
            their triumphs, their strategies to advance progress for women and Indonesian society. 
            <div class="mt-2 left">
              <a href="{{ asset('/wg')}}" class="btn btn-secondary">Read More</a>
            </div>
        </div>
      </div>
      </div>

  </div>
</section>

</main><!-- End #main -->

@endsection