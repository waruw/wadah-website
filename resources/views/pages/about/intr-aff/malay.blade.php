
@extends('layouts.app')
@section('container')
  
<main id="main">

<main id="main">

  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
    </div>
  </section><!-- garis atas -->

<section>
  <div class="container">
    <div class="row title">
      <div class="section-title pt-4">
        <a href="{{ url('/int-afl')}}"><H2>International Affiliations</h2></a>
      </div>
    </div>
    <div class="row content">
      
    <div class="row content pt-0">
      <div class="col-md-4">
      <p> <img src="{{asset('img/interaff/malay/1.jpeg')}}" widht="AUTO" height="200";> 
      </div>

      <div class="col-md-8 pt-4 pt-lg-0">
          <h4>About Pertubuhan Wadah Kuala Lumpur dan Selangor</h4></p>
          <p style="text-align:justify;"> Pertubuhan Wadah Kuala Lumpur dan Selangor was officially registered 
          on 4th August 2014. It was formed with the purpose of carrying out the relentless pursuit and unselfish 
          work of Ibu Anie through Wadah Foundation. Though Malaysia is blessed with a smaller population and a 
          large pool of resources, there nevertheless exist some marginalized communities - mostly by circumstances. 
          The Stateless Children, Single Mothers, Victimized Women, Indigenous People - are but a few groups that 
          silently cry for help.
      </div>
    </div>
    </div>
  </div>
</section>
@endsection