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
        <h3>{{ __('general.event') }}</h3>
        </div>
    </div>
    <div class="row content">
      <div class="center mb-3">

        @if (App::currentLocale()=="en")

          <h3>STOMP FOR CHANGE</h3>
          <h4>1st Wadah Global Gathering</h4>
          <h4>Bali, Indonesia</h4>
          <h4>March 29 - 31, 2012</h4> <br>
          <p>More than 200 like-minded and kind-hearted individuals gathered 
              at the  Ayana Resort and Hotel in Bali, Indonesia, in March of 
              2012 to Stomp for Change.<br> <br>

              The discussions, featuring illustrious personalities led by four 
              CNN Heroes: Efren Penaflorida, Anuradha Koirala, Robin Lim and 
              Budi Suhardi; Dr. Pardis Madhavi; Dr. Abdul Karim Raj; Dr. Imam 
              Prasodjo; Fr. Rocky Evangelista; Dr. Agus Priyono; Pdt Karina de 
              Vega; Imelda Salajan; Rio and TJ Manotoc, and wonder kid Kesz 
              Valdez, were intense, rich, and varied. </p>

        @elseif(App::currentLocale()=="id")

          <h3>MELANGKAH UNTUK PERUBAHAN</h3>
          <h4>Wadah Global Gathering ke-1</h4>
          <h4>Bali, Indonesia</h4>
          <h4>29 - 31 Maret 2012</h4> <br>
          <p>Lebih dari 200 orang yang berpikiran sama dan baik hati berkumpul di 
              Ayana Resort and Hotel di Bali, Indonesia, pada bulan Maret 2012 
              untuk Stomp for Change.<br> <br>

              Diskusi yang menampilkan tokoh-tokoh terkenal yang dipimpin oleh 
              empat Pahlawan CNN: Efren Penaflorida, Anuradha Koirala, Robin Lim 
              dan Budi Suhardi; Dr Pardis Madhavi; Dr.Abdul Karim Raj; Dr.Imam Prasodjo; 
              Fr. Rocky Evangelista; Dr Agus Priyono; Pdt Karina de Vega; 
              Imelda Salajan; Rio dan TJ Manotoc, dan anak luar biasa Kesz Valdez, 
              membuat diskusi menjadiintens, kaya, dan beragam. </p>

          @endif

      </div>

      <div class="center">
        <h3> {{ __('general.speak') }} </h3> <br>
        <H4>Stomp For Poverty<h4>
      </div>
      <div class="row">

                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>    
                <div class="col-md-9">
                <ul type="disc" style="text-align:left">
      <h4 style="color:#208b3a">Women Empowerment</h4><br>
      <h5>IMAM PRASODJO</h5>
      <h5>DR. RAJ ABDUL KARIM</h5>
      <br>
      <h4 style="color:#208b3a">Education - The Way Out & Up</h4><br>
      <h5>PEFREN PEÑFLORIDA, JR.</h5>
      <h5>GREGOR HADI NITIHARDJO</h5>
      <h5>AGUS PRIYONO</h5>
      <h5>MURTI BUNANTA</h5> <br>
      </div>

      <div style="text-align:center">
      <H4>Stomp For Human Trafficking<h4>
      </div>
      <div class="row">

                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>    
                <div class="col-md-9">
                <ul type="disc" style="text-align:left">
      <h4 style="color:#208b3a">Prevention And Re-Integration</h4><br>
      <h5>Pardis Mahdavi</h5>
      <h5>Anuradha Koirala</h5>
      <br>
      <h4 style="color:#208b3a">Interception And Prosecution</h4><br>
      <h5>AARON COHEN</h5>
      <h5>IMELDA SALAJAN</h5> <br>
      </div>

      <div style="text-align:center">
      <H4>Heroes & Their War Stories<h4>
      </div>
      <div class="row">

                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>    
                <div class="col-md-9">
                <ul type="disc" style="text-align:left">
      <h4 style="color:#208b3a"></h4><br>
      <h5>KARINA DE VEGA</h5>
      <h5>BUDI SOEHARDI</h5>
      <h5>ROBIN LIM</h5><br>
      </div>

      <div class="section-title">

      <p class="pt-2 mb-3">{{ __('general.readchro') }}</p>
      <a href="{{ url('https://drive.google.com/file/d/1DdKfGnriA5BWcIATL5fCslwIpxj1ICmV/view')}}">
        <img src="{{asset('img/media/newsletter/2012-7.jpg')}}" widht="auto" height="250"> </a>
        <br><br>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

@endsection