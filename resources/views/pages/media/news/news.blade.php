@extends('layouts.app')
@section('container')
<main id="main">

    <style type="text/css">
        .left { text-align: left;}
        .right { text-align: right;}
        .center { text-align: center;}
        .justify { text-align: justify;}
        .sizefont { font-size: 35px;}
        .bold { font-weight:bold;}
        .color { color: #583d45}
        .background1 { background-color: #85b3d8;}
        .background2 { background-color: #a1e2b2;}
        .background3 { background-color: #db7e9a;}
        .backgroundd { background-color: #e7e5df;}
        .borderr{ border: 2px solid #ececec;}
        .centerpic { display: block; margin-left: auto; margin-right: auto;}
        </style>

<section>
</section>

<section class="inner-page">
<div class="container">
<div class="col-md-12 p-3 mb-3 backgroundd">
<div class="color bold">
  <h2>Wadah News</h2>
</div>
</div>

        <div class="row">
            <div class="col-md-8">
                    <div class="col-8 col-sm-4 col-md-4 col-lg-2 mb-2">
                    </div>
                    @foreach ($allNews as $news)
                    <div class="col-lg-12 mb-5">
                        <div class="borderr">
                        <div class="position-relative mb-6 border-end-0">
                            <img class="img-fluid w-100" src="{{asset($news->image)}}" 
                            style="object-fit: cover; min-height:500px; max-height:300px; widht:auto;">
                            <div class="overlay position-relative bg-light">
                                <a class="h4 fw-bolder" href="{{route('news.show', $news->slug)}}">{{$news->title}}</a>
                                <div class=" pt-1 mb-2" style="font-size: 14px;">
                                    <a href="">{{$news->category->nama_kategori}}</a>
                                    <small class="align-self-center fw-light fst-italic">{{$news->created_at->format('d/m/Y')}}</small>
                                </div>
                                <p style="text-align:justify"; class="pt-3">{{\Illuminate\Support\Str::limit($news->article, 289, '...')}} 
                                    <a href='{{route('news.show', $news->slug)}}' class="float-end btn btn-sm btn-outline-dark">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    </div>    
                    @endforeach
            </div>
            
            <div class="col-md-4">
                <div class="col-12 col-md-12 col-sm-12 ">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Other Wadah News:</h3>
                    </div>
                    @foreach ($allReads as $news)
                    <div class="d-flex mb-3">
                        <img class="img-fluid w-100" src="{{asset($news->image)}}" 
                            style="object-fit: cover; min-height:100px; max-height:100px; widht:auto;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">                            
                            <div class="mb-1" style="font-size: 12px;">
                            <a class="" href='{{route('news.show', $news->slug)}}'>{{$news->title}}</a>
                            <div class="mb-1" style="font-size: 10px;">
                                <a href="">{{$news->category->nama_kategori}}</a><br>
                                <span>{{$news->created_at->format('d/m/Y')}}</span>
                            </div >
                            </div>
                        </div>
                    </div>  
                    @endforeach       
                </div>
            </div>
          </div>
</div>

                    
                </section>

</div>

</main><!-- End #main -->

@endsection