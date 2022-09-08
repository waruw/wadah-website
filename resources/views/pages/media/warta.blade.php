
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
            <a href="{{ url('https://drive.google.com/file/d/1ElET7RtueqzJvZGU7M9sxUkCQOZww5qS/view')}}" target="_blank">
              <img class="centerpic" src="{{asset('img/media/warta/2022-6.jpg')}}" widht="auto" height="200"></a>
          </div>
          
          <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
              <a href="{{ url('https://drive.google.com/file/d/185eOH3nxfB9LHAvxQ_hBPgfm0KyusghX/view')}}" target="_blank">
                <img class="centerpic" src="{{asset('img/media/warta/2021-11.jpg')}}" widht="auto" height="200"></a>
            </div>
    
          <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
              <a href="{{ url('https://drive.google.com/file/d/1rmZJPZ3Bzyc8N04u_cSTwz6w6sFSuDkB/view')}}" target="_blank">
                <img class="centerpic" src="{{asset('img/media/warta/2020-9.jpg')}}" widht="auto" height="200"></a>
            </div>  
    
          <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
              <a href="{{ url('https://drive.google.com/file/d/1-N7tLCPnhJlCg54WfIAMMD4-VJ5WhjTF/view')}}" target="_blank">
                <img class="centerpic" src="{{asset('img/media/warta/2019-12.jpg')}}" widht="auto" height="200"></a>
            </div>
    
          <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
              <a href="{{ url('https://drive.google.com/file/d/1a7Efb1uXFHMqrwveZq4yrbKMgrlg3Vtr/view')}}" target="_blank">
                <img class="centerpic" src="{{asset('img/media/warta/2018-8.jpg')}}" widht="auto" height="200"></a>
            </div>
    
          <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
            <a href="{{ url('https://drive.google.com/file/d/1jZxSxvh6pbbjIytGBT9aaFo4IFBFBfvL/view')}}" target="_blank">
              <img class="centerpic" src="{{asset('img/media/warta/2017-7.jpg')}}" widht="auto" height="200"></a>
          </div>
    
          <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
            <a href="{{ url('https://drive.google.com/file/d/1PVHAetaHF0ekRyjcAq1bXXkJFdDSDzCn/view')}}" target="_blank">
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
                <a href="{{ url('https://drive.google.com/file/d/16WxKwuM-KkIN13ULZSpyY4wXePAe6dRx/view')}}" target="_blank">
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