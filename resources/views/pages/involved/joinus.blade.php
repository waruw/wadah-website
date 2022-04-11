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
        <h2>{{ __('general.join') }}</h2>
      </div>
    </div>
      
        <div class="row content">
            <div class="section-title">
              <h3>{{ __('general.karir') }}</h3>
            </div>
            <div class="row mb-5">
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>    
                <div class="col-md-8">
                  <ul type="disc" style="text-align:justify">
                    @if (App::currentLocale()=="en")
                    <h5>Currently no available positions.</h5>
                    <h5>You may also send us your CV/Resumé at info@wadahfoundation.or.id for future references.</h5>
                    @elseif(App::currentLocale()=="id")
                    <h5>Saat ini tidak ada posisi yang tersedia.</h5>
                    <h5>Anda dapat mengirimkan CV/Resumé anda di info@wadahfoundation.or.id untuk referensi di masa depan.</h5>
                    @endif
                </div>
            </div>

            <div class="section-title">
                <h3>{{ __('general.voluntir') }}</h3>
            </div>
            <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-1"></div>    
                  <div class="col-md-8">
                    <ul type="disc" style="text-align:justify">
                    @if (App::currentLocale()=="en")
                    <h5>Wadah Foundation works with volunteers through the “Wadah Volunteer Program.” 
                    If you are  interested in becoming a volunteer at the Wadah communities, you may 
                    send us a message through the following link: </h5>
                    @elseif(App::currentLocale()=="id")
                    <h5>Yayasan Wadah bekerja sama dengan para relawan melalui “Program Relawan Wadah”. 
                      Jika Anda tertarik untuk menjadi sukarelawan di komunitas Wadah, Anda dapat mengirimkan 
                      pesan kepada kami melalui tautan berikut: </h5>
                    @endif
                    <div class="center volunteer">
                    <a class="center" sizefont="px" href="https://forms.gle/Bb8DbyjmuHAoz8hGA"><h5>{{ __('general.linkvoluntir') }}</h5></a>
                  </div>
            </div>
        </div>
  </div>

</section>
</main><!-- End #main -->

@endsection
