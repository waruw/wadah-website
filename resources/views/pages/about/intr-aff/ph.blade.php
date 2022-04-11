
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
        <a href="{{ url('/int-afl')}}"><H2>{{ __('general.affint') }}</h2></a>
      </div>
    </div>
    <div class="row content">
      
      <div class="row content pt-0">
        <div class="col-md-4">
      <p> <img src="{{asset('img/interaff/ph/ph.png')}}" widht="AUTO" height="200";>
          
      </div>
      <div class="col-md-8 pt-4 pt-lg-0">
          <h4>About Philippines Wanita dan Harapan Inc.</h4></p>
        <p style="text-align:justify;">   Wanita dan Harapan means Women and Hope. We believe that access to quality community-based 
            healthcare is a human right. We believe that each individual is an essential societal component 
            of peace and by caring for the smallest citizens of the Philippines, the babies at birth, 
            we are building peace, one mother, one child, one family at a time. Our service is built on 
            three simple principles: respect for nature, respect for culture, and the wise implementation 
            of the science of medicine. We know that love is healing, and so we work in a circle of love 
            and gratitude. <br> <br>

            Our focus is family health, maternal healthcare and infant survival with an emphasis on gentle 
            childbirth. We also have programs that support capacity-building of essential lifesaving midwifery 
            skills. We assist in community transformation via youth and adult education, organic farming and 
            protecting the environment. <br> <br>

            Wanita dan Harapan Philippines Inc. is governed by a Board of Trustees and an Executive Director. 
            We make decisions based on consensus. Our core group includes: Anie Djojohadikusumo, Robin Lim, 
            Christina Ferreros, Maita Manglapus, Rose Cupin, Teresa Maniego. <br> <br>

            <b>We are a humanitarian organization</b>, committed to bring excellent healthcare, educational opportunity, 
            capacity-building and sustainability to the most heartbroken people with love and dignity. We protect 
            the human right to clean water, food, shelter, healthcare, education and peace.
      </div>
    </div>
  </div>

</section>
@endsection