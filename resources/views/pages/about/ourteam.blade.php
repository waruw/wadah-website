
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
  .color { color: #208b3a}
  .background { background-color: #f3f5fa;}
  .backgroundd { background-color: #555;}
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
        <h2>Our Team</h2>
      </div>
    </div>

    <div class="row content">

        <div class="col-md-4">
            <img class="borderr centerpic" src="{{asset('img/team/ahd.jpg')}}" widht="auto" height="250";>
            <div class="center">
              <h5 class="mb-0">Anie Djojohadikusumo</h5>
              <p>President</p>
            </div>
            </div>

        <div class="col-md-4">
          <img class="borderr centerpic" src="{{asset('img/team/psl.jpg')}}" widht="auto" height="250";>
          <div class="center">
          <h5 class="mb-0">Paula S. N. Landowero</h5>
          <p>Secretary General</p>
          </div>
        </div>

        <div class="col-md-4">
          <img class="borderr centerpic" src="{{asset('img/team/lj.jpg')}}" widht="auto" height="250";>
          <div class="center">
          <h5 class="mb-0">Lilik Juniarti</h5>
          <p>Treasurer</p>
          </div>
        </div>

        <div class="col-md-4">
          <img class="borderr centerpic" src="{{asset('img/team/zs.jpg')}}" widht="auto" height="250";>
          <div class="center">
          <h5 class="mb-0">Zakiyah Samal</h5>
          <p>Head - Operations Department</p>
          </div>
        </div>

        <div class="col-md-4">
          <img class="borderr centerpic" src="{{asset('img/team/lp.jpg')}}" widht="auto" height="250";>
          <div class="center">
          <h5 class="mb-0">Cecilia Parengkuan</h5>
          <p>Head - HR Department</p>
          </div>
        </div>

        <div class="col-md-4">
          <img class="borderr centerpic" src="{{asset('img/team/yg.jpg')}}" widht="auto" height="250";>
          <div class="center">
          <h5 class="mb-0">Ghewa Yohanes</h5>
          <p>Head - R&D Department</p>
          </div>
        </div>

    </div>
  </div>
</section>  

  

  <section>
    <div class="container">
      <div class="row title">
        
      </div>
      <div class="row content">
        <p style="text-align:justify">
          @if (App::currentLocale()=="en")
          Since 1st July 2020, for the organizational development, Wadah Foundation has created 
          an organizational platform to ensure a more solid and effective collaboration between 
          various departments in line with efforts to achieve Wadah's Vision and Mission.
          <br><br>
          The Management has appointed a Secretary-General under the Chairperson, who is given 
          the task of managing the day-to-day activities assisted by the Operations Department, 
          Human Resources and General Affairs Department and the Research & Development Department, 
          while financial management is directly under the supervision of the Treasurer.
          </p>
          @elseif (App::currentLocale()=="id")
          Sejalan dengan perkembangan organisasi, sejak 1 Juli 2020, Yayasan Wadah membuat sebuah 
          platform organisasi agar Kerjasama antar Departemen semakin kokoh dan selaras dengan upaya 
          tercapainya Visi dan Misi Wadah.
          <br><br>
          Pengurus mengangkat seorang Sekretaris Jendral dibawah Ketua, yang diberi tugas mengelola 
          sehari-hari dibantu oleh Departemen Operasional, Departemen Sumber Daya Manusia dan Umum 
          serta Departemen Pengembangan dan Penelitian sedangkan pengelolaan Keuangan langsung dibawah 
          pengawasan Bendahara.
          @endif
        <div class="col-12">
          <img src="{{asset('img/team/iso.jpg')}}" class="borderr centerpic" widht="100" height="300">
        </div>

      </div>
    </div>
  </section>

  </main><!-- End #main -->
  
  @endsection