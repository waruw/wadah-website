@extends('layouts.app')
@section('container')

<style type="text/css">
  .left { text-align: left;}
  .right { text-align: right;}
  .center { text-align: center;}
  .justify { text-align: justify;}
  .progcolor { color: #208b3a}
  .bold {font-weight:bold;}
  .picsize { width:600px; height: 400px;}
  .sizefont { font-size: 60px;}
  </style>

<!-- Masthead-->
<header class="masthead">
  <div class="container">
      <div class="masthead-heading text-uppercasec left ">We grow to serve and 
        <br>we serve so that others 
        <br>may grow together with us. </div>
      <div class="masthead-subheading left">Anie Hashim Djojohadikusumo, Founder</div>
      <div class="d-flex justify-content-center justify-content-lg-start">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=xMnjjAFMdBQ" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>   Watch Video</span></a>
      </div>
  </div>
</header>

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>
        
        <div class="row content">
          <div class="col-lg-6">
          <img src="{{ asset('/img/aboutus.jpg') }}" widht="330" height="280" class="card-img-top" alt="...">  
            
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p style="text-align:justify">
              Yayasan Wadah Titian Harapan ("WADAH") is a non-profit organization founded on the concerns of a 
              mother towards for the welfare of the nation, especially of the grassroots. The future of a nation 
              lies with them. We hope that through Wadah, they can achieve a better future, building towards 
              future generations that are more resilient, more empowered, and more dignified.
              <br><br>
              Wadah is an abbreviation of the words ‘Women’ and ‘Hope’ in Indonesian. Wadah has a literal meaning of  
              'a place;’ however, in practice, it also refers to a broader meaning of ‘a family’ or ‘a community’. 
            </p>
            <a href="{{ asset('/about-us')}}" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Program Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Programs</h2>
          <p>With the community growth in mind, Wadah conducts various programs and activities in its supported communities.</p>
        </div>

        <div class="row content">
          <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-boxpen">
              <h4><a href="{{ asset('/our-programs')}}">Education</a></h4>
              <p style="text-align: justify">Education is the foundation in raising awareness to becoming a trained, 
                skilled and trustworthy individual.</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box icon-boxkes">
              <h4><a href="{{ asset('/our-programs')}}">Health</a></h4>
              <p style="text-align: justify">Wadah Foundation supports individuals and groups involved in Health 
                Centers and Health Service Centers to help promote awareness in healthy and clean lifestyle as 
                well as to develop skills related to health programs.</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box icon-boxpem">
              <h4><a href="{{ asset('/our-programs')}}">Economic Development  </a></h4>
              <p style="text-align: justify">Wadah Foundation assists individuals and families to be trained and 
                skilled in managing their own potentials in order for them to become strong, empowered and dignified.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Latest News ======= -->
    <section>
      <div class="container" data-aos="fade-up">

        <div class="section-title pt-5">
          <h2>NEWS</h2>
        <div class="row content">

        @foreach ($allNews as $news)

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="card">
              <img src="{{asset($news->image)}}" class="card-img-top" alt="..." style="object-fit: cover; min-height:300px; max-height:300px; widht:auto;">
              <div class="card-body pt-1">
                  
                <h5 class="card-title mt-2"><a href="{{route('news.show', $news->slug)}}">{{$news->title}}</a></h5>
                <div style="font-size: 13px;">
                  <a href="">{{$news->category->nama_kategori}}</a> 
                  <small class="fw-light fst-italic">{{$news->created_at->format('d/m/Y')}}</small>
                </div>
                    <p class="card-text" style="text-align:justify"> {!!\Illuminate\Support\Str::limit($news->article, 150, '....')!!}
                <div>
                      <a href='{{route('news.show', $news->slug)}}' class="float-fix btn btn-sm btn-outline-dark">Read More</a></p>
                </div>
                    {{-- <div class="d-flex justify-content-end">
                <a href='{{route('news.show', $news->slug)}}' class="btn-learn-more">Read More</a>
                    </div> --}}
              </div>
            </div>
          </div>
        @endforeach
        
        </div>
      </div>
      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">
        <div class=" section-title">
          <h2>Contact</h2>
          <p>Call or visit.</p>
        </div>
        <div class="row content">
          <div class="col-lg-5 d-flex align-items-stretch left">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Penjernihan II No. 7<br>
              Kel. Bendungan Hilir, Kec. Tanah abang<br>
              Jakarta Pusat 10210<br>
              Indonesia </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@wadahfoundation.or.id</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>(+62)21 5799-2162</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.440328177692!2d106.
                80945969999999!3d-6.2055025999999955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6a5ae595bc7%3A0x3339aebde3c0f0cf!2sRumah%20Wadah!5e0!3m2!1sid!2sid!4v1632470361467!5m2!1sid!2sid"
              frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section> <!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection