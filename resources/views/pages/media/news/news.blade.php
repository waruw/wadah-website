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
            <h2>Wadah News</h2>
        </div>
    </div>
    <div class="row content">
    
        <div class="row">
            <div class="col-md-8">
                
                @foreach ($allNews as $news)
                <div class="col-lg-12 mb-2 newslastpost">
                    <div class="position-relative">
                        <div>
                        <img class="img-fluid w-100" src="{{asset($news->image)}}" 
                        style="object-fit: cover; min-height:500px; max-height:300px; widht:auto;">
                        </div>
                        <div class="overlay position-relative">
                            <a class="titlelaspost" href="{{route('news.show', $news->slug)}}">{{$news->title}}</a>
                            <div class=" pt-1 mb-2" style="font-size: 14px;">
                                <a href="">{{$news->category->nama_kategori}}</a>
                                <small class="align-self-center fw-light fst-italic">{{$news->created_at->format('d/m/Y')}}</small>
                            </div>
                            <p style="text-align:justify"; class="pt-3">{!!\Illuminate\Support\Str::limit($news->article, 289, '...')!!} 
                                <a href='{{route('news.show', $news->slug)}}' class="float-end btn btn-sm btn-outline-dark">Read More</a></p>
                        </div>
                    </div>
                </div>
                @break
                @endforeach

                <div class="row">
                    @foreach ($allNews as $news)
                    @if ($loop->first) @continue @endif
                        <div class="col-6">
                            <div class="col-lg-12 mb-2 postnewsconten">
                                <div class="position-relative mb-6 border-end-0">
                                    <div>
                                    <img class="img-fluid w-100" src="{{asset($news->image)}}" 
                                    style="object-fit: cover; min-height:200px; max-height:200px; widht:auto;">
                                    </div>
                                    <div class="overlay position-relative ">
                                        <a class="titlenewspost" href="{{route('news.show', $news->slug)}}">{{$news->title}}</a>
                                        <div class=" pt-1 mb-2" style="font-size: 14px;">
                                            <a href="">{{$news->category->nama_kategori}}</a>
                                            <small class="align-self-center fw-light fst-italic">{{$news->created_at->format('d/m/Y')}}</small>
                                        </div>
                                        <div class="pnewspost">
                                            <p style="text-align:justify";>{!!\Illuminate\Support\Str::limit($news->article, 130, '...')!!} 
                                            <a href='{{route('news.show', $news->slug)}}' class="float-end btn btn-sm btn-outline-dark">Read More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Other Wadah News:</h3>
                </div>
                @foreach ($allReads as $news)
                <div class="d-flex mb-3">
                        <img class="img-fluid w-100" src="{{asset($news->image)}}" 
                            style="object-fit: cover; min-height:100px; max-height:100px; widht:auto;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                                    
                        <div class="mb-1 capother">
                            <a href='{{route('news.show', $news->slug)}}'>{{$news->title}}</a>
                        <div class="mb-1 capcatdate">
                            <a href="">{{$news->category->nama_kategori}}</a><br>
                            <span>{{$news->created_at->format('d/m/Y')}}</span>
                        </div>
                        </div>
                    </div>
                </div>  
                @endforeach  
            </div>

      </div>
    </div>
  </section>
  

</main><!-- End #main -->

@endsection