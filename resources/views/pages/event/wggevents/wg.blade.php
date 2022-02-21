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
          <h3>Wadah Gathering</h3>
          <h4>Jakarta, Indonesia</h4>
          <h4>27 - 29 May 2009</h4> <br>
          <h3> Event</h3>
          <p>The first Wadah Gathering was held in Jakarta, Indonesia in May 2009. 
              It convened Wadah's pioneering heroes and homegrown champions who overcame 
              tremendous odds to empower communities at the grassroots level. The Gathering 
              raised the visibility of the field workers and gave them access to an 
              international audience with whom they shared their tears, their triumphs, 
              their strategies to advance progress for women and Indonesian society. 
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
                <div class="col-md-1"></div>    
		        <div class="col-md-9">
            <ul type="disc" style="text-align:left">
<h4 style="color:#208b3a">Education For Women And</h4><br>
<h5>HASAN AZHARY</h5>
<h5>KISWANTI</h5>
<h5>ADI HERMAWAN</h5>
<h5>TATA</h5>
<br>
<h4 style="color:#208b3a">Health For Women And Children</h4><br>
<h5>PURWATI</h5>
<h5>INDRAJANI PRAWOTO (SOS VILAGE - CHAIRPERSON)</h5>
<h5>BIDAN WIWIED</h5>
<h5>RICARDO HUTAHEAN</h5>
<br>
<h4 Style="color:#208b3a">Community Development</h4><br>
<h5>EUIS MINTARSI</h5>
<h5>WIJI SANTOSA</h5>
<h5>ELSA BAKKER</h5>
<h5>TATANG</h5>
</div>

<div class="section-title">

    <p class="pt-5 mb-3">Read about the happenings at the Wadah Gathering in our newsletter below:</p>
    <a href="{{ url('https://drive.google.com/file/d/1rQHQ8Za4ogEdQFYj3jlk__zofOv2QjoT/view')}}">
      <img src="{{asset('img/media/newsletter/2009-2.jpg')}}" widht="auto" height="250"> </a>
      <br><br>
  </div>

</section>
</div>
<br>

</main><!-- End #main -->

@endsection