
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
        <h2>WADAH GALLERY</h2>
      </div>
    </div>
    <div class="row content mb-5">
      
      <div class="col-md-12 center">
        <img src="{{asset('img/media/publication/satudasawarsawadah.jpg')}}" width="350px" height="auto">
      </div>

      <div class="col-md-12">
        <p  style="text-align:center; color:green;"> 
          <b>Caption <br> Video </b></p>
      </div>

    </div>

    <div class="row content mb-5">
      
        <div class="col-md-12 center">
          <img src="{{asset('img/media/publication/satudasawarsawadah.jpg')}}" width="350px" height="auto">
        </div>
  
        <div class="col-md-12">
          <p  style="text-align:center; color:green;"> 
            <b>Caption <br> Video </b></p>
        </div>
  
      </div>

      <div class="row content mb-5">
      
        <div class="col-md-12 center">
          <img src="{{asset('img/media/publication/satudasawarsawadah.jpg')}}" width="350px" height="auto">
        </div>
  
        <div class="col-md-12">
          <p  style="text-align:center; color:green;"> 
            <b>Caption <br> Video </b></p>
        </div>
  
      </div>
  
  </div>
</section>

</main>
@endsection