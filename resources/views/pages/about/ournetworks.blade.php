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
      <h2>Wadah Networks</h2>
      </div>
    <div class="row content">
      <div class="container">
        <div class="section-title">
          <h3>{{ __('general.member') }}</h3>
        </div>
            <div class="row">
              <div class="col"></div>
              <div class="col-7">   
                <ul type="disc" style="text-align:left">
                  <h5>FILANTROPI INDONESIA</h5>
                  <h5>MIT - J-WEL: ABDUL LATIF JAMEEL WORLD EDUCATION LAB</h5>
                  <h5>GIVE2ASIA</h5>
                </ul>
              </div>
              <div class="col"></div>
            </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row title">
    <div class="row content">
      <div class="container">
        <div class="section-title">
          <h3>{{ __('general.partner') }}</h3>
        </div>
            <div class="row">
              <div class="col"></div>
              <div class="col-7">   
                <ul type="disc" style="text-align:left">
                  <h5>BAREFOOT COLLEGE INTERNATIONAL</h5>
                  <h5>PT. RETOTA SAKTI</h5>
                  <h5>REGENCY GOVERNMENTS OF NAGEKEO</h5>
                </ul>
              </div>
              <div class="col"></div>
            </div>
      </div>
    </div>
  </div>
</section>

</main><!-- End #main -->

@endsection