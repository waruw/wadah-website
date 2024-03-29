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
        
          <h3>SHARING, CARING AND GIVING:</h3>
          <h3>THE PHILIPPINE EXPERIENCE</h3>
          <h3>Wadah International Gathering</h3>
          <h4>Manila, Phipippines</h4>
          <h4>29 September - 2 October 2010</h4> <br>
          <p>The Wadah International Gathering held in Manila from September 29 to 
              October 2, 2010 penetrated global issues on which Wadah Foundation will 
              take a stand. Global Best Practices in the areas of anti-human trafficking 
              and poverty alleviation through education, community development, micro-finance 
              and social enterprise were high on the agenda. The Manila Gathering proved 
              to be exhilarating as well as eye-opening.  Testaments from victims, advocates, 
              and change agents moved guests and participants to tears and onward to action, 
              inspiring Wadah to cater to a global audience and to elicit global participation, 
              thus the birth of Wadah Global Gathering.
            <br><br>

        @elseif(App::currentLocale()=="id")

          <h3>BERBAGI, PEDULI, MEMBERI:</h3>
          <h3>PENGALAMAN FILIPINA</h3>
          <h3>Wadah International Gathering</h3>
          <h4>Manila, Phipippines</h4>
          <h4>29 September - 2 Oktober 2010</h4> <br>
          <p>Wadah International Gathering yang diselenggarakan di Manila pada 29 September 
            hingga 2 Oktober 2010 merambah isu global yang akan menjadi pijakan Wadah Foundation. 
            Praktik Terbaik Dunia di bidang anti perdagangan manusia dan pengentasan kemiskinan 
            melalui pendidikan, pengembangan masyarakat, keuangan mikro dan usaha sosial menjadi 
            agenda utama. The Manila Gathering terbukti menggembirakan sekaligus membuka mata. 
            Testimoni dari para korban, advokat, dan agen perubahan membuat para tamu dan peserta 
            menangis dan terus beraksi, menginspirasi Wadah untuk melayani audiens global dan 
            untuk mendapatkan partisipasi global, sehingga lahirlah Wadah Global Gathering. 
            <br><br>

        @endif

        </div>

        <div class="center">
            <h3> Speakers </h3> <br>
        </div>
        <div class="row">

                        <div class="col-md-1"></div>
                        <div class="col-md-1"></div>    
                    <div class="col-md-9">
                    <ul type="disc" style="text-align:left">
        <h4 style="color:#208b3a">Human Trafficking</h4><br>
        <h5>CECILIA FLORES-OEBANDA</h5>
        <h5>RUBY</h5>
        <h5>ROSE</h5>
        <br>
        <h4 style="color:#208b3a">The Philippine Social Enterprise Model:
        How It Addresses Social Problomes</h4><br>
        <h5>TESS GANZO</h5>
        <h5>ANNE MELOTO-WIL</h5>
        <h5>ANNABEL BONSOL</h5>
        <br>
        <h4 Style="color:#208b3a">Exemplars of Effective Alternative Learning System
            (ALS) Programs</h4><br>
        <h5>HARIN "KUYA BON" MANALAYSAY</h5>
        <h5>EFREN PEÑFLORIDA, JR.</h5>
        <h5>EMAN BAGUAL</h5>
        <h5>CRIS "KESZ" VALDEZ</h5>
        <br>
        <h4 Style="color:#208b3a">Exemplars of Effective ALS Programs (Problem and
            Solutions By Everyday Heroes & Heroines)</h4><br>
        <h5>FR. BEINVENIDO M. DISU</h5>
        <h5>SISTER EMEROSE TUMLOS NEMENZO</h5>
        <br>
        <h4 Style="color:#208b3a">Presentation By Enda Vietnam</h4><br>
        <h5>TRAN AI MY</h5>
        <h5>PHAM THI VIET HA</h5>
        </div>

        <div class="section-title">

          <p class="pt-5 mb-3">{{ __('general.readchro') }}</p>
          <a href="{{ url('https://drive.google.com/file/d/1iQWePr81Rm2Fy9oz10QGuwhjos30veI0/view')}}">
            <img src="{{asset('img/media/newsletter/vol3no3.jpg')}}" widht="auto" height="250"> </a>
            <br><br>
        </div>

      </div>
    </div>
</section>

</main><!-- End #main -->

@endsection