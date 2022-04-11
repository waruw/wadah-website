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
        <img src="{{asset('img/event/wgg/wgg.png')}}" width="150" height="127">
        <a href="{{ url('/wgg')}}"><h2 class="pt-4">Wadah Global Gathering</h2></a>
        <h3>{{ __('general.them') }}</h3>
        </div>
    </div>
    <div class="row content">
      <div class="center mb-3">
        @if (App::currentLocale()=="en")

          <h3>WOMEN: TORCHBEARERS AND PILLARS OF HOPE</h3>
          <h3>TOWARDS ACHIEVING THE 2030 GLOBAL GOALS</h3>
          <h4>3rd Wadah Global Gathering</h4>
          <h4>Bali, Indonesia</h4>
          <h4>March 22 - 23, 2018</h4> <br>
          <p>The 3rd Wadah Global Gathering, conducted on 22-23 March 2018, 
              was about women leaders who had been working courageously and 
              tirelessly to address the challenges confronting their 
              societies, cultures and communities. </p><br>
 
          <p>This Wadah Global Gathering hoped to give a platform for women 
              from across the globe to have a voice and for it to be heard. 
              Our audience of influential, forward-thinking humanitarians 
              have the power to motivate not only people, but nations, to 
              take action.</p>
              
            <p>Wadah believes that we are all vitally connected--the land, 
                the people, all living things--a holistic worldview that 
                focuses on our intrinsic connections, as well as those of 
                our ancestors. It was a great opportunity to be a part of 
                the unfolding of history for these amazing women from Haiti, 
                India, Nepal, Malaysia, Philippines & Indonesia and we 
                learned how their small deeds can help the world achieve 
                its 2030 Global Goals.</p>

        @elseif (App::currentLocale()=="id")

        <h3>PEREMPUAN: PEMBAWA OBOR DAN PILAR HARAPAN</h3>
        <h3>MENUJU MENCAPAI TUJUAN GLOBAL 2030 </h3>
        <h4>3rd Wadah Global Gathering</h4>
        <h4>Bali, Indonesia</h4>
        <h4>22 - 23 Maret 2018</h4> <br>
        <p>Wadah Global Gathering ke-3, yang diadakan pada 22-23 Maret 2018, 
          adalah tentang para pemimpin perempuan yang telah bekerja dengan 
          berani dan tanpa lelah untuk mengatasi tantangan yang dihadapi masyarakat, 
          budaya, dan komunitas mereka.  </p><br>

        <p>Wadah Global Gathering ini diharapkan dapat memberikan wadah bagi perempuan 
          dari seluruh dunia untuk bersuara dan didengar. Penonton kami yang terdiri dari 
          orang-orang kemanusiaan yang berpengaruh dan berpikiran maju memiliki kekuatan 
          untuk memotivasi tidak hanya orang, tetapi juga negara, untuk mengambil tindakan. </p>
            
          <p>Wadah percaya bahwa kita semua terhubung secara vital--tanah, orang-orang, 
            semua makhluk hidup--pandangan dunia holistik yang berfokus pada koneksi intrinsik kita, 
            serta hubungan leluhur kita. Ini adalah kesempatan besar untuk menjadi bagian dari 
            pembukaan sejarah bagi wanita luar biasa dari Haiti, India, Nepal, Malaysia, Filipina 
            & Indonesia dan kami belajar bagaimana tindakan kecil mereka dapat membantu dunia mencapai 
            Tujuan Global 2030-nya. </p>
        @endif

        </div>

      <div class="center">
      <h3>{{ __('general.keyspeak') }}</h3> <br>
      </div>
     
      <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-1"></div>
                      <div class="col-md-1"></div>    
                  <div class="col-md-9">
                  <ul type="disc" style="text-align:left">
      <h4 style="color:#208b3a">Women Power</h4><br>
      <h5>ESTRELLITA VERENIO (PHILIPPINES)</h5>
      <h5>GOMA DEVI CHAPAGAI (BHUTAN)</h5>
      <h5>ZAKIYAH "KIKY" SAMAL (INDONESIA)</h5>
      <h5>SONAM LAHMO (BHUTAN)</h5>
      <h5>IMELDA "GEM" SIMBULAN (PHILIPPINES</h5> <br>

      <h4 style="color:#208b3a">Passion For Learning</h4><br>
      <h5>PUSHPA MADHWAL (INDIA)</h5>
      <h5>KALPANA DAS (INDIA)</h5>
      <h5>SONIA STEPHEN (MALAYSIA)</h5>
      <h5>KISWANTI (INDONESIA)</h5> <br>

      <h4 style="color:#208b3a">Health Is Wealth</h4><br>
      <h5>RACHEL DE FRETES (INDONESIA)</h5>
      <h5>WITNOWATI (INDONESIA)</h5>
      <h5>BERNADETTE PHILOGENE (HAITI)</h5> <br>

      <h4 style="color:#208b3a">Women From Afar</h4><br>
      <h5>SUMITRA TAMANG (NEPAL)</h5>
      <h5>SITA LOHANI (NEPAL)</h5>
      <h5>RASMI (INDONESIA)</h5>
      <h5>DOMINGGAS DE JESUS (INDONESIA)</h5> <br>
      </div>

      <div class="section-title">

        <p class="pt-2 mb-3">{{ __('general.readchro') }}</p>
        <a href="{{ url('https://drive.google.com/file/d/1DqUzcMta78ajEKK6gDezgv40fbDORFRO/view')}}">
          <img src="{{asset('img/media/chronicles/2018-8.jpg')}}" widht="auto" height="250"> </a>
          <br><br>
      </div>

      </div>
    </div>
</section>

</main><!-- End #main -->

@endsection