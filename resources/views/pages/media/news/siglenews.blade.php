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
            <h2>{{ __('general.newsmed') }}</h2>
        </div>
    </div>
    <div class="row content">
        <div class="row">

            <div class="col-md-8">
                <!-- News Detail Start -->
                <div class="col-md-12">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset($news->image)}}" style="object-fit: cover; min-height:300px; max-height:500px; widht:auto;">
                                <div class="overlay position-relative mb-3">
                                    <a>{{$news->category->nama_kategori}}</a>
                                    <span class="px-1"></span>
                                    <span>{{$news->created_at->format('d/m/Y')}}</span>
                                </div>
                                <div>
                                    <h1 class="mb-3">{{$news->title}}</h1>
                                    <a style="text-align: justify"> {!! html_entity_decode($news->article) !!}</a>
                                </div>
                    </div>
                </div>

                <div>

                </div>    

                <!-- Comment Form Start -->
                <div class="bg-light mb-3" style="padding: 30px;">
                    <h3 class="mb-4">{{ __('general.leavecom') }}</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">{{ __('general.namemed') }} *</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="website">Website *</label>
                            <input type="url" class="form-control" id="website">
                        </div>

                        <div class="form-group">
                            <label for="message">{{ __('general.messagemed') }} *</label>
                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group mt-2 mb-0">
                            <input type="submit" value="{{ __('general.leavecom') }}"
                                class="btn btn-primary font-weight-semi-bold py-2 px-3">
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-md-4">
                <div class="bg-light py-2 px-4 mb-3">

                    <h3 class="mb-3">{{ __('general.simil') }}</h3>
 
                        @foreach ($newsByCategory as $news)
                            <div class="d-flex mb-3">
                                <a class="sizepicside" href="{{route('news.show', $news->slug)}}"> <img src="{{asset($news->image)}}" style="object-fit: cover; min-height:100px; max-height:100px; widht:auto;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;"> </a>
                                    <div class="mb-1 capother">
                                        <a href='{{route('news.show', $news->slug)}}'>{{$news->title}}</a>
                                    <div class="mb-1 capcatdate">
                                        <a>{{$news->category->nama_kategori}}</a><br>
                                        <span>{{$news->created_at->format('d/m/Y')}}</span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
            
            <h6 class="back mt-4"> <a href="{{ url('/news')}}"><< {{ __('general.back') }}</a></h6>
                
        </div>
    </div>


</section>

</main><!-- End #main -->

@endsection