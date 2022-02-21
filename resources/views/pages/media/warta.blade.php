
@extends('layouts.app')
@section('container')
  
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <h2>Warta Wadah</h2>

</section><!-- End Breadcrumbs -->

<style type="text/css">
  .left { text-align: left;}
  .right { text-align: right;}
  .center { text-align: center;}
  .justify { text-align: justify;}
  .sizefont { font-size: 35px;}
  .bold { font-weight:bold;}
  .color { color: #208b3a}
  .background { background-color: #f3f5fa;}
  .backgroundd { background-color: #555;}
  .borderr{ border: px solid #208b3a;}
  .centerpic { display: block; margin-left: auto; margin-right: auto;}
  </style>

<section id="services">

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

  <section id="breadcrumbs" class="breadcrumbs2">
    <div class="container">
  
      <h2>Tabloid Wadah</h2>
  
  </section><!-- End Breadcrumbs -->

    <div class="container mt-5">
      <div class="row-12 mt-0 mb-4">
        <div class="col-md-12">
            </p>
        </div>
      </div>
    </div>

  <div class="container pt-2">
    <div class="row mb-2">
  
        <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
            <a href="{{ url('https://drive.google.com/file/d/1od8eLURnqaqX3loDWoo3ECzFxI3SjhC-/view')}}">
              <img class="centerpic" src="{{asset('img/media/tabloid/2015-12.jpg')}}" widht="auto" height="200";;></a>
            </div>  
              
          </div>
      </div>
    </div>

  

  </section>
  </main><!-- End #main -->
  
  @endsection