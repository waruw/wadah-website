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
        <img src="{{asset('img/event/wgg/wgg.png')}}" width="300" height="267">
        <h2 class="pt-4">Wadah Global Gathering</h2>
      </div>
    </div>
    <div class="row content mb-3">
      @if (App::currentLocale()=="en")
      <p>The Wadah Global Gathering (WGG) is an initiative by the Wadah Foundation dedicated 
        to celebrating women and men of impact from all over the world by sharing their 
        inspiring stories.
        <br><br>
        Over the years, the WGG has showcased amazing individuals of diverse ages and backgrounds
        --most of them invisible and unheralded-- by presenting their powerful narratives, 
        issues, plans of action, and provoking a global conversation.</p>
        @elseif(App::currentLocale()=="id")
        <p>Wadah Global Gathering (WGG) adalah sebuah kegiatan berskala internasional yang 
          diprakarsai Yayasan Wadah untuk menghimpun dan menampilkan sejumlah tokoh dan pendekar 
          kemanusiaan, laki-laki maupun perempuan dari seluruh dunia, dimana melalui kegiatan tersebut 
          mereka dapat membagikan kisah dan pengalaman inspiratif mereka.
          <br><br>
          Beberapa tahun terakhir, WGG telah menampilkan sejumlah tokoh dan pendekar kemanusiaan 
          luar biasa dengan usia serta latar belakang beragam yang sebagian besar bergerak di belakang 
          layar tanpa gembar-gembor.  Dengan narasi yang kuat mereka mengungkapkan berbagai persoalan, 
          merancang berbagai rencana aksi, dan memancing diskusi global.</p>
          @endif

    </div>

    <div class="row content mb-5">

      <!-- 2018 -->
      <div class="col-md-12 p-3 mb-5">
        <div class="row pt-0 mb-0">
          <div class="col mb-0">

            <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="{{asset('img/event/wgg/2018/1.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="{{asset('img/event/wgg/2018/2.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/wgg/2018/3.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/wgg/2018/4.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/wgg/2018/5.jpg')}}" widht="auto" height="400"  alt="" />
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

        <div class="col pt-4 pt-lg-">
          @if (App::currentLocale()=="en")
            <h3>2018</h3>
            <h4><a>3RD WADAH GLOBAL GATHERING</a></h4>
            <p>JAKARTA, INDONESIA</p>
            <p style="text-align:justify">
                The 3rd Wadah Global Gathering, conducted on 22-23 March 2018, 
                was about women leaders who had been working courageously and tirelessly 
                to address the challenges confronting their societies, cultures and communities. 
          @elseif(App::currentLocale()=="id")
            <h3>2018</h3>
            <h4><a>3RD WADAH GLOBAL GATHERING</a></h4>
            <p>JAKARTA, INDONESIA</p>
            <p style="text-align:justify">
              Wadah Global Gathering ke-3, yang diadakan pada 22-23 Maret 2018, adalah tentang para 
              pemimpin perempuan yang telah bekerja dengan berani dan tanpa lelah untuk mengatasi 
              tantangan yang dihadapi masyarakat, budaya, dan komunitas mereka. 
          @endif
            <div class="mt-2 mb-2 left">
                <a href="{{ asset('/3rd')}}" class="btn btn-secondary">Read More</a>
            </div>
        </div>
      </div>
      </div>

      <!-- 2015 -->
      <div class="col-md-12 p-3 mb-5">
        <div class="row pt-0 mb-0">
          <div class="col mb-0">
            @if (App::currentLocale()=="en")
            <h3 class="right">2015</h3>
            <h4 class="right"><a>2ND WADAH GLOBAL GATHERING</a></h4>
            <p class="right">YOGYAKARTA, INDONESIA</p>
            <p style="text-align:justify">
              At the 2nd Wadah Global Gathering held in Yogyakarta, Indonesia, 
              on March 18-20, 2015, selected youths from Afghanistan, Bhutan, 
              India, Indonesia, Nepal, and the Philippines shared the stage with 
              four CNN Heroes of the Year and held the audience in their thrall 
              with their graphic tales and heart-rending aspirations.
              @elseif(App::currentLocale()=="id")
            <h3 class="right">2015</h3>
            <h4 class="right"><a>2ND WADAH GLOBAL GATHERING</a></h4>
            <p class="right">YOGYAKARTA, INDONESIA</p>
            <p style="text-align:justify">
              Pada Wadah Global Gathering ke-2 yang diadakan di Yogyakarta, Indonesia, 
              pada tanggal 18-20 Maret 2015, pemuda terpilih dari Afghanistan, Bhutan, 
              India, Indonesia, Nepal, dan Filipina berbagi panggung dengan empat CNN 
              Heroes of the Year dan menahan penonton dalam pesona mereka dengan kisah 
              grafis dan aspirasi yang menyayat hati. 
              @endif

            <div class="mt-2 mb-2 right">
                <a href="{{ asset('/2nd')}}" class="btn btn-secondary">Read More</a>
            </div>
          </div>
  
          <div class="col pt-0 pt-lg-">
            
            <div id="wgg2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#wgg2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#wgg2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#wgg2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#wgg2" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#wgg2" data-bs-slide-to="4" aria-label="Slide 5"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="{{asset('img/event/wgg/2015/1.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="{{asset('img/event/wgg/2015/2.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/wgg/2015/3.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/wgg/2015/4.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/wgg/2015/5.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
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
        </div>       
      </div>


      <!-- 2012 -->
      <div class="col-md-12 p-3 mb-5">
        <div class="row pt-0 mb-0">
          <div class="col mb-0">
    
            <div id="wgg1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#wgg1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#wgg1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#wgg1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#wgg1" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#wgg1" data-bs-slide-to="4" aria-label="Slide 5"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="{{asset('img/event/wgg/2012/1.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="{{asset('img/event/wgg/2012/2.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/wgg/2012/3.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/wgg/2012/4.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/wgg/2012/5.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
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

        <div class="col pt-4 pt-lg-">
          @if (App::currentLocale()=="en")
          <h3>2012</h3>
          <h4><a>1ST WADAH GLOBAL GATHERING</a></h4>
          <p>BALI, INDONESIA</p>
          <p style="text-align:justify">
            The discussions, featuring illustrious personalities led by four CNN Heroes: 
            Efren Penaflorida, Anuradha Koirala, Robin Lim and Budi Suhardi; Dr. Pardis 
            Madhavi; Dr. Abdul Karim Raj; Dr. Imam Prasodjo; Fr. Rocky Evangelista; Dr. 
            Agus Priyono; Pdt Karina de Vega; Imelda Salajan; Rio and TJ Manotoc, and wonder 
            kid Kesz Valdez, were intense, rich, and varied. 
          @elseif(App::currentLocale()=="id")
          <h3>2012</h3>
          <h4><a>1ST WADAH GLOBAL GATHERING</a></h4>
          <p>BALI, INDONESIA</p>
          <p style="text-align:justify">
            Diskusi yang menampilkan tokoh-tokoh terkenal yang dipimpin oleh empat Pahlawan 
            CNN: Efren Penaflorida, Anuradha Koirala, Robin Lim dan Budi Suhardi; Dr Pardis 
            Madhavi; Dr.Abdul Karim Raj; Dr.Imam Prasodjo; Fr. Rocky Evangelista; Dr Agus 
            Priyono; Pdt Karina de Vega; Imelda Salajan; Rio dan TJ Manotoc, dan anak ajaib 
            Kesz Valdez, intens, kaya, dan beragam. 
          @endif
            <div class="mt-2 mb-2 left">
            <a href="{{ asset('/1st')}}" class="btn btn-secondary">Read More</a>
            </div>
        </div>
      </div>
      </div>


      <!-- 2010 -->
      <div class="col-md-12 p-3 mb-5">
        <div class="row pt-0 mb-0">
          <div class="col mb-0">
            @if (App::currentLocale()=="en")
            <h3 class="right">2010</h3>
            <h4 class="right"><a>1ST WADAH INTERATIONAL GATHERING</a></h4>
            <p class="right">MANILA, PHILIPPINES</p>
            <p style="text-align:justify">
              The Wadah International Gathering held in Manila from September 29 to October 2, 
              2010 penetrated global issues on which Wadah Foundation will take a stand. Global 
              Best Practices in the areas of anti-human trafficking and poverty alleviation through 
              education, community development, micro-finance and social enterprise were high on the 
              agenda.
            @elseif(App::currentLocale()=="id")
            <h3 class="right">2010</h3>
            <h4 class="right"><a>1ST WADAH INTERATIONAL GATHERING</a></h4>
            <p class="right">MANILA, PHILIPPINES</p>
            <p style="text-align:justify">
              Wadah International Gathering yang diselenggarakan di Manila pada 29 September hingga 2 
              Oktober 2010 merambah isu global yang akan menjadi pijakan Wadah Foundation. Praktik 
              Terbaik Global di bidang anti perdagangan manusia dan pengentasan kemiskinan melalui 
              pendidikan, pengembangan masyarakat, keuangan mikro dan usaha sosial menjadi agenda utama. 
            @endif
            <div class="mt-2 mb-2 right">
              <a href="{{ asset('/1stint')}}" class="btn btn-secondary">Read More</a>
            </div>
          </div>
  
          <div class="col pt-0 pt-lg-">
            
            <div id="wig1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#wig1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#wig1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#wig1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#wig1" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#wig1" data-bs-slide-to="4" aria-label="Slide 5"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="{{asset('img/event/wgg/2010/1.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="{{asset('img/event/wgg/2010/2.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/wgg/2010/3.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/wgg/2010/4.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/wgg/2010/5.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#wig1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#wig1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

            
            </div>
        </div>       
      </div>


      <!-- 2009 -->
      <div class="col-md-12 p-3 mb-5">
        <div class="row pt-0 mb-0">
          <div class="col mb-0">
    
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
                  <img src="{{asset('img/event/wgg/2009/1.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="{{asset('img/event/wgg/2009/2.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/wgg/2009/3.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/wgg/2009/4.jpg')}}" widht="auto" height="400"  alt="" />
                  <div class="carousel-caption d-none d-md-block">
                    <p>Caption</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('img/event/wgg/2009/5.jpg')}}" widht="auto" height="400"  alt="" />
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

        <div class="col pt-4 pt-lg-">
          @if (App::currentLocale()=="en")
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
            @elseif(App::currentLocale()=="id")
            <h3>2009</h3>
            <h4><a>WADAH GATHERING</a></h4>
            <p>JAKARTA, INDONESIA</p>
            <p style="text-align:justify">
              Wadah Gathering pertama diadakan di Jakarta, Indonesia pada Mei 2009. Pertemuan 
              tersebut mempertemukan para pahlawan perintis dan juara lokal Wadah yang mengatasi 
              rintangan luar biasa untuk memberdayakan masyarakat di tingkat akar rumput. 
              Pertemuan tersebut meningkatkan visibilitas para pekerja lapangan dan memberi 
              mereka akses ke audiens internasional yang dengannya mereka berbagi air mata, 
              kemenangan mereka, strategi mereka untuk memajukan kemajuan bagi perempuan dan 
              masyarakat Indonesia. 
              @endif
            <div class="mt-2 mb-2 left">
              <a href="{{ asset('/wg')}}" class="btn btn-secondary">Read More</a>
            </div>
        </div>
      </div>
      </div>

  </div>
</section>

</main><!-- End #main -->

@endsection