@extends('layouts.app')
@section('container')

    <main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <h2></h2>
  </div>
</section><!-- End Breadcrumbs -->

<div class="container">
        <br>
        <div class="section-title">

        <img src="{{asset('img/event/wgg.png')}}" width="150" height="127">
        <br>
        <br>
          <h3>SHARING, CARING AND GIVING:</h3>
          <h3>THE PHILIPPINE EXPERIENCE</h3>
          <h3>Wadah International Gathering</h3>
          <h4>Manila, Phipippines</h4>
          <h4>29 September - 2 October 2010</h4> <br>
          <h3> Theme & Event</h3>
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
        </div>
      </div>

<div class="container">
<div style="text-align:center">
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

  <p class="pt-5 mb-3">Read about the happenings at the Wadah Gathering in our newsletter below:</p>
  <a href="{{ url('https://drive.google.com/file/d/1iQWePr81Rm2Fy9oz10QGuwhjos30veI0/view')}}">
    <img src="{{asset('img/media/newsletter/vol3no3.jpg')}}" widht="auto" height="250"> </a>
    <br><br>
</div>


</section>
</div>
<br>

</main><!-- End #main -->

@endsection