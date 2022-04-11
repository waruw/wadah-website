@extends('layouts.app')
@section('container')

    <main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
  </div>
</section><!-- End Breadcrumbs -->

<header>
    
  {{-- <div class="embed-responsive embed-responsive-16by9" id="holder" style="pointer-events: none;">
    <iframe class="frame" width="auto" height="auto" 
       src="https://www.youtube.com/watch?v=xMnjjAFMdBQ&amp; 
       controls=0&amp;showinfo=0;autoplay=1&mute=1&loop=1&playlist=4hIZUCKsio 
       0" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; 
       picture- 
       in-picture" allowfullscreen></iframe>
 </div> --}}

 
  {{-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">

      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen></iframe>
      </div>
      

      <div class="carousel-item active" style="background-image">
        <img src="{{asset('img/header/1.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image">
        <img src="{{asset('img/header/2.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image">
        <img src="{{asset('img/header/3.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image">
        <img src="{{asset('img/header/4.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> --}}


</header>

<section>
  <div class="container">
    <div class="row title">
      <div class="section-title pt-4">
        <h2>{{ __('general.about') }}</h2>
      </div>
    </div>

    @if (App::currentLocale()=="en")

    <div class="row content mb-4">
      <p style="text-align:justify">
        Yayasan Wadah Titian Harapan (“Wadah”) is a non-profit organization founded on the concerns of a 
        mother towards for the welfare of the nation, especially of the grassroots. The future of a nation 
        lies with them. We hope that through Wadah, they can achieve a better future, building towards 
        future generations that are more resilient, more empowered, and more dignified.
      <br><br>
        Wadah is an abbreviation of the words ‘Women’ and ‘Hope’ in Indonesian. Wadah has a literal meaning of  
        ‘a place;’ however, in practice, it also refers to a broader meaning of ‘a family’ or ‘a community'.          
      <br><br>
        Wadah began by inviting families to be more attentive to educating the future generations. 
        Wadah expanded its services to promoting health and strengthening the family economy, taking 
        further steps to support and train at the grassroots level holistically.    
      <br><br>
        Wadah has also broadened its reach internationally with sister organizations registered in the 
        Phillippines, Malaysia and India: Philippines Wanita dan Harapan, Inc.; Pertubuhan Wadah Kuala 
        Lumpur & Selangor; Wadah Trust India. In 2016, Wadah was granted Special Consultative Status by 
        the United Nations Economic and Social Council. A year later, in December 2017, Wadah received 
        ISO 9001:2015 Certification, which was extended in December 2020.
      </p>
    </div>
    @elseif(App::currentLocale()=="id")

    <div class="row content mb-4">
      <p style="text-align:justify">
        Yayasan Wadah Titian Harapan (Yayasan Wadah) adalah sebuah lembaga sosial berstandar internasional 
        yang berkantor di Jakarta, Indonesia. Wadah didirikan karena keprihatinan seorang Ibu terhadap kondisi 
        sumber daya manusia di tataran akar rumput.
        <br><br>
        Wadah adalah singkatan dari kata Wanita dan Harapan. Wadah, yang dalam Bahasa Indonesia secara harafiah 
        berarti tempat, namun dalam prakteknya berarti juga keluarga atau komunitas.
        <br><br>
        Yayasan Wadah memulai pelayanannya dengan mengajak pribadi dan keluarga untuk mempersiapkan generasi 
        bangsa yang lebih baik dengan memberikan perhatian kepada dunia pendidikan.  
        <br><br>
        Wadah juga telah memperluas jangkauannya secara internasional dengan organisasi serupa yang terdaftar 
        di Filipina, Malaysia dan India: Philippines Wanita dan Harapan, Inc.; Pertubuhan Wadah Kuala Lumpur & 
        Selangor; Wadah Trust India. Pada tahun 2016, Wadah mendapat Status Konsultatif Khusus oleh Dewan Ekonomi 
        dan Sosial PBB. Setahun kemudian, pada Desember 2017, Wadah mendapatkan Sertifikasi ISO 9001:2015, yang telah
        diperpanjang pada Desember 2020. 
      </p>
    </div>
    @endif
    

    <div class="row title">
    </div>

    @if (App::currentLocale()=="en")

    <div class="row content">
        <div class="container mb-3">
              <div class="row justify-content-center pt-3 mb-3">
                  <p class="center sizefont bold color">Our Vision</p>
              </div>
                <h4 class="center">Creating an empowered and dignified society</h4>
        </div>

        <div class="container mb-3">
              <div class="row justify-content-center pt-3 mb-3">
                  <p class="center sizefont bold color">Our Mission</p>
              </div>
                <h4 class="center">Empowering individuals holistically through education, health, and economic development</h4>
        </div>

        <div class="container mb-3">
              <div class="row justify-content-center pt-3 mb-3">
                  <p class="center sizefont bold color">Our Objectives</p>
              </div>
                  <h4 class="center">To produce community leaders who are well-trained, skilled and trusted in their fields</h4>
        </div>

          <div class="container mb-3">
            <div class="row justify-content-center pt-3 mb-3">
                <p class="center sizefont bold color">Our Values</p>
                <h4 class="center pt-2">Godliness</h4>
                <h4 class="center">Honesty and Sincerity</h4>
                <h4 class="center">Inclusive</h4>
                <h4 class="center">Humility</h4>
                <h4 class="center">Unity</h4>
                <h4 class="center">Diversity</h4>
            </div>
          </div>
  
          <div class="container">
            <div class="row justify-content-center mb-3">
                <p class="center sizefont bold color">Our Programs</p>
            </div>
                <h4 class="center">With the community growth in mind, WADAH conducts 
                  various programs and activities in its supported communities</h4>
                    <div class="pt-3 mb-0">
                    <h4 class="center">Education</h3>
                    <h4 class="center">Health</h3>
                    <h4 class="center">Community Development</h3>
                    </div>
          </div>

    </div>

    @elseif(App::currentLocale()=="id")

    <div class="row content">
      <div class="container mb-3">
            <div class="row justify-content-center pt-3 mb-3">
                <p class="center sizefont bold color">Visi Kami</p>
            </div>
              <h4 class="center">Mewujudkan masyarakat yang berdaya dan bermartabat</h4>
      </div>

      <div class="container mb-3">
            <div class="row justify-content-center pt-3 mb-3">
                <p class="center sizefont bold color">Misi Kami</p>
            </div>
              <h4 class="center">Memberdayakan pribadi-pribadi secara holistik melalui bidang pendidikan, 
                kesehatan, dan penguatan ekonomi</h4>
      </div>

      <div class="container mb-3">
            <div class="row justify-content-center pt-3 mb-3">
                <p class="center sizefont bold color">Tujuan Kami</p>
            </div>
                <h4 class="center">Melahirkan tokoh masyarakat yang terlatih, terampil dan terpercaya dibidangnya</h4>
      </div>

        <div class="container mb-3">
          <div class="row justify-content-center pt-3 mb-3">
              <p class="center sizefont bold color">Nilai-Nilai</p>
              <h4 class="center pt-2">Ketuhanan yang Maha Esa</h4>
              <h4 class="center">Ketulus-ikhlasan</h4>
              <h4 class="center">Kekeluargaan</h4>
              <h4 class="center">Kerendahan Hati</h4>
              <h4 class="center">Kebersamaan</h4>
              <h4 class="center">Keberagaman</h4>
          </div>
        </div>

        <div class="container">
          <div class="row justify-content-center mb-3">
              <p class="center sizefont bold color">Program Kami</p>
          </div>
              <h4 class="center">Seiring dengan pertumbuhan komunitas yang didukung, didampingi dan dibina, 
                maka Yayasan Wadah membuat berbagai program dan kegiatan yang sesuai dengan kebutuhan komunitas 
                tersebut, yaitu:</h4>
                  <div class="pt-3 mb-0">
                  <h4 class="center">Pendidikan</h3>
                  <h4 class="center">Kesehatan</h3>
                  <h4 class="center">Penguatan Ekonomi</h3>
                  </div>
        </div>

  </div>
  
  @endif

  </div>
</section>
    
<section>
  @if (App::currentLocale()=="en")

  <div class="services section-bg mb-3">
    <div class="row title">
      <div class="section-title pt-4">
        <h2>WHAT MAKES WADAH "UNIQUE"?</h2>
    </div>
    </div>

    <div class="row content">
          <div class="row">
            <div class="col-md-1"></div>
		        <div class="col-md-1"></div>
		        <div class="col-md-9">
            <ul type="disc" style="text-align:left">
              <li><b>WADAH CARES</b></li>
                <ul type="square">
                  <li>Its guiding principle of Caring in Sharing and Giving</li>
                  <li>It advocates values that uphold the dignity of the human being</li>
                  <li>It respects local culture and traditions</li>
                  <br>
                </ul>
              <li><b>WADAH LISTENS</b></li>
                <ul type="square">
                  <li>It is consultative, collaborative, inclusive</li>
                  <li>It does not impose its agenda of change, instead</li>
                  <li>It engages the community, its leaders, its stakeholders, its beneficiaries</li>
                  <br>
                </ul>
              <li><b>WADAH INSPIRES</b></li>
              <ul type="square">
                  <li>It seeks to bring out the best in the individual (it identifies individuals who are already doing good to become great)</li>
                  <li>It develops role models, who lead, not by word, but by deed and by example</li>
                  <br>
                </ul>
              <li><b>WADAH STAYS</b></li>
              <ul type="square">
                  <li>It is not “project”-minded</li>
                  <li>It is focused on sustainability</li>
                  <br>
                </ul>
              <br>
            </div>
		        <div class="col-md-1"></div>
		        <div class="col-md-1"></div>
		        <div class="col-md-1"></div>
		        <div class="col-md-1"></div>
		        <div class="col-md-1"></div>
	        	<div class="col-md-1"></div>
	        	<div class="col-md-1"></div>
	        	<div class="col-md-1"></div>
            <h4 class="bold center mb-3">100% OF DONATIONS AND SPONSORSHIPS 
              <br>ARE RECEIVED AND ENJOYED
              BY ITS BENEFICIARIES</h4>
        </div>
    </div>

    @elseif(App::currentLocale()=="id")

    <div class="services section-bg mb-3">
      <div class="row title">
        <div class="section-title pt-4">
          <h2>APA YANG MEMBUAT WADAH ITU "UNIK"?</h2>
      </div>
      </div>
  
      <div class="row content">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-1"></div>
              <div class="col-md-9">
              <ul type="disc" style="text-align:left">
                <li><b>PEDULI</b></li>
                  <ul type="square">
                    <li>Kepedulian adalah panduan utama Wadah dalam Berbagi dan Memberi</li>
                    <li>Mendukung nilai-nilai yang menjunjung tinggi martabat manusia</li>
                    <li>Menghargai budaya dan tradisi setempat</li>
                    <br>
                  </ul>
                <li><b>MENDENGARKAN</b></li>
                  <ul type="square">
                    <li>Berkonsultasi, bekerjasama dan melibatkan semua pihak</li>
                    <li>Tidak memaksakan program perubahan sendiri, sebaliknya</li>
                    <li>Selalu melibatkan komunitas, para pemimpinnya, pemangku kepentingan dan penerima manfaat</li>
                    <br>
                  </ul>
                <li><b>MEMBERI INSPIRASI</b></li>
                <ul type="square">
                    <li>Berupaya menggali yang terbaik dari diri seseorang (mengenali mereka yang telah berbuat baik untuk ditingkatkan menjadi lebih baik lagi)</li>
                    <li>Berupaya mengembangkan tokoh panutan yang mampu memimpin melalui perbuatan dan teladan, bukan sekedar kata-kata</li>
                    <br>
                  </ul>
                <li><b>TETAP BERSAMA KOMUNITAS</b></li>
                <ul type="square">
                    <li>Tidak berpola pikir "proyek"</li>
                    <li>Fokus pada keberlanjutan</li>
                    <br>
                  </ul>
                <br>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-1"></div>
              <div class="col-md-1"></div>
              <div class="col-md-1"></div>
              <div class="col-md-1"></div>
              <div class="col-md-1"></div>
              <div class="col-md-1"></div>
              <div class="col-md-1"></div>
              <h4 class="bold center mb-3">100% SUMBANGAN DAN BANTUAN 
                <br>DITERIMA DAN DINIKMATI OLEH PENERIMA MANFAAT</h4>
          </div>
      </div>

      @endif

  </section>

        <div class="row">
        <div  class="col-md-12 section-title pt-4">
          <h2>{{ __('general.locmap') }}</h2>

          <img class="img-fluid" src="{{asset('img/aboutus/28_1.jpg')}}" widht="auto" height="800";>

       </div>
      </div>

</section>
</main><!-- End #main -->

@endsection
