
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
        <h2>Warta Wadah</h2>
      </div>
    </div>
    <div class="row content">

      <div class="container" data-aos="fade-up">
        <div class="row-12 mt-0 mb-4">
          <div class="col-md-12">
              <p style="text-align:justify">
                @if (App::currentLocale()=="en")
                Warta Wadah is where you can read about the activities and events of Wadah Foundation in Bahasa. 
                Released every June, and December of each year.
                @elseif (App::currentLocale()=="id")
                The Wadah Chronicles adalah media dimana Anda dapat membaca tentang kegiatan dan acara Yayasan Wadah dalam Bahasa Indonesia. 
                Dirilis setiap bulan Juni, dan Desember setiap tahunnya.
                @endif
              </p>
          </div>
        </div>
      </div>
      
      <div class="container mb-2">
        <div class="row mb-2">
          
          <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
              <a href="{{ url('https://drive.google.com/file/d/1cID-HB4gHBrWZ0vW-fABUPLeTkFaxTMs/view')}}">
                <img class="centerpic" src="{{asset('img/media/warta/2021-11.jpg')}}" widht="auto" height="200"></a>
            </div>
    
          <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
              <a href="{{ url('https://drive.google.com/file/d/1lZe229sSJT_STY8Pbcn9mkt3Q1FzErB0/view')}}">
                <img class="centerpic" src="{{asset('img/media/warta/2020-9.jpg')}}" widht="auto" height="200"></a>
            </div>  
    
          <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
              <a href="{{ url('https://drive.google.com/file/d/1QLaP0jZOyVAgYrPHcMlBfcdO0QrLbzVk/view')}}">
                <img class="centerpic" src="{{asset('img/media/warta/2019-12.jpg')}}" widht="auto" height="200"></a>
            </div>
    
          <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
              <a href="{{ url('https://drive.google.com/file/d/1FeY4N6ihgyQY3NL_L-mm0VrqdCHKv7ZK/view')}}">
                <img class="centerpic" src="{{asset('img/media/warta/2018-8.jpg')}}" widht="auto" height="200"></a>
            </div>
    
          <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
            <a href="{{ url('https://drive.google.com/file/d/1rRmz9XvH7K2SJJvoXWXzQbgD197YYawI/view')}}">
              <img class="centerpic" src="{{asset('img/media/warta/2017-7.jpg')}}" widht="auto" height="200"></a>
          </div>
    
          <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
            <a href="{{ url('https://drive.google.com/file/d/1X2zQYip3owQBXXEa0G9F8i_24MJGQJt4/view')}}">
              <img class="centerpic" src="{{asset('img/media/warta/2016-8.jpg')}}" widht="auto" height="200"></a>
          </div>
                
        </div>
      </div>

    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row title">
      <div class="section-title pt-4">
        <h2>Tabloid Wadah</h2>
      </div>
    </div>
    <div class="row content">
      
      <div class="container pt-2">
        <div class="row mb-2">
      
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                <a href="{{ url('https://drive.google.com/file/d/1od8eLURnqaqX3loDWoo3ECzFxI3SjhC-/view')}}">
                  <img class="centerpic" src="{{asset('img/media/tabloid/2015-12.jpg')}}" widht="auto" height="200";;></a>
                </div>  
            </div>
        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
  
@endsection