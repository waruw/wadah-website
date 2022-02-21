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
        .borderr{ border: 2px solid #208b3a;}
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
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">
                    <img src="{{asset($news->image)}}" style="object-fit: cover; width:600px; height:auto ">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-3">
                                <a href="">{{$news->category->nama_kategori}}</a>
                                    <span class="px-1"></span>
                                    <span>{{$news->created_at->format('d/m/Y')}}</span>
                                
                            </div>
                        <div>
                    <h1 class="mb-3">{{$news->title}}</h1>
                    <p> {!! html_entity_decode($news->article) !!}</p>
                    </div>
                </div>
        </div>
                    <!-- News Detail End -->

                    <!-- Comment List Start
                    <div class="bg-light mb-3" style="padding: 30px;">
                        <h3 class="mb-4">3 Comments</h3>
                        <div class="media mb-4">
                            <img src="{{asset('img/news/user.jpg')}}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                    Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor
                                    consetetur at sit.</p>
                                <button class="btn btn-sm btn-outline-secondary">Reply</button>
                            </div>
                        </div>
                    </div>
                    Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="bg-light mb-3" style="padding: 30px;">
                        <h3 class="mb-4">Leave a comment</h3>
                        <form>
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave a comment"
                                    class="btn btn-primary font-weight-semi-bold py-2 px-3">
                            </div>
                        </form>
                    </div>
                     Comment Form End -->
                </div>

                
                    
                </section>

</div>

<br><br>

</main><!-- End #main -->

@endsection