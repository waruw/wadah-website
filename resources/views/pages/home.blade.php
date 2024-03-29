@extends('layouts.app')
@section('container')
    <!-- ======= HEADER DIV======= -->
    <div class="">
        <div id="slideheader" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#slideheader" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#slideheader" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#slideheader" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#slideheader" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/header/1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>We grow to serve and we serve
                            so that others may grow together with us</h1>
                        <p>Anie Hashim Djojohadikusumo, Founder</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/header/2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>We grow to serve and we serve
                            so that others may grow together with us</h1>
                        <p>Anie Hashim Djojohadikusumo, Founder</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/header/3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>We grow to serve and we serve
                            so that others may grow together with us</h1>
                        <p>Anie Hashim Djojohadikusumo, Founder</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/header/4.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>We grow to serve and we serve
                            so that others may grow together with us</h1>
                        <p>Anie Hashim Djojohadikusumo, Founder</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#slideheader" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slideheader" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    {{-- <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=xMnjjAFMdBQ&t=40s" class="glightbox btn-watch-video"><i
                class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}

    <!-- END HEADER DIV -->


    <!-- ======= ABOUT US SECTION ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ __('general.about') }}</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <img src="{{ asset('/img/aboutus.jpg') }}" widht="330" height="280" class="card-img-top"
                        alt="...">
                </div>

                @if (App::currentLocale() == 'en')
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p style="text-align:justify">
                            Yayasan Wadah Titian Harapan ("WADAH") is a non-profit organization founded on the concerns
                            of a
                            mother towards for the welfare of the nation, especially of the grassroots. The future of a
                            nation
                            lies with them. We hope that through Wadah, they can achieve a better future, building
                            towards
                            future generations that are more resilient, more empowered, and more dignified.
                            <br><br>
                            Wadah is an abbreviation of the words ‘Women’ and ‘Hope’ in Indonesian. Wadah has a literal
                            meaning of
                            'a place;’ however, in practice, it also refers to a broader meaning of ‘a family’ or ‘a
                            community’.
                        </p>
                        <a href="{{ asset('/about-us') }}" class="float-fix btn btn-secondary btn-sm">Read More</a>
                    </div>
                @elseif(App::currentLocale() == 'id')
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p style="text-align:justify">
                            Yayasan Wadah Titian Harapan (Yayasan Wadah) adalah sebuah lembaga sosial berstandar
                            internasional
                            yang berkantor di Jakarta, Indonesia. Wadah didirikan karena keprihatinan seorang Ibu
                            terhadap kondisi
                            sumber daya manusia di tataran akar rumput.
                            <br> <br>
                            Wadah adalah singkatan dari kata Wanita dan Harapan. Wadah, yang dalam Bahasa Indonesia
                            secara harafiah
                            berarti tempat, namun dalam prakteknya berarti juga keluarga atau komunitas.
                        </p>
                        <a href="{{ asset('/about-us') }}" class="float-fix btn btn-secondary btn-sm">Selengkapnya</a>
                    </div>
                @endif
            </div>

        </div>
    </section><!-- END ABOUT US SECTION -->

    <!-- ======= PROGRAM SECTION ======= -->
    <section id="program" class="program section-bg">
        <div class="container" data-aos="fade-up">

            @if (App::currentLocale() == 'en')
                <div class="section-title">
                    <h2>Our Programs</h2>
                    <p>With the community growth in mind, Wadah conducts various programs and activities in its
                        supported communities.</p>
                </div>

                <div class="row content">
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box icon-boxpen">
                            <h4><a href="{{ asset('/our-programs') }}">{{ __('general.edu') }}</a></h4>
                            <p style="text-align: justify">Education is the foundation in raising awareness to becoming
                                a trained,
                                skilled and trustworthy individual.</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box icon-boxkes">
                            <h4><a href="{{ asset('/our-programs') }}">{{ __('general.health') }}</a></h4>
                            <p style="text-align: justify">Wadah Foundation supports individuals and groups involved in
                                Health
                                Centers and Health Service Centers to help promote awareness in healthy and clean
                                lifestyle as
                                well as to develop skills related to health programs.</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md- d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box icon-boxpem">
                            <h4><a href="{{ asset('/our-programs') }}">{{ __('general.econom') }}</a></h4>
                            <p style="text-align: justify">Wadah Foundation assists individuals and families to be
                                trained and
                                skilled in managing their own potentials in order for them to become strong, empowered
                                and dignified.</p>
                        </div>
                    </div>
                </div>
            @elseif(App::currentLocale() == 'id')
                <div class="section-title">
                    <h2>Program Kami</h2>
                    <p>Dengan mempertimbangkan pertumbuhan komunitas, Wadah melakukan berbagai program dan kegiatan di
                        komunitas yang didukungnya. </p>
                </div>

                <div class="row content">
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box icon-boxpen">
                            <h4><a href="{{ asset('/our-programs') }}">{{ __('general.edu') }}</a></h4>
                            <p style="text-align: justify">Pendidikan adalah salah satu alat untuk melahirkan pribadi
                                dan
                                keluarga di masyarakat yang tangguh, berdaya dan bermartabat.</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box icon-boxkes">
                            <h4><a href="{{ asset('/our-programs') }}">{{ __('general.health') }}</a></h4>
                            <p style="text-align: justify">Yayasan Wadah mendukung pribadi atau kelompok yang terlibat
                                di Posyandu
                                dan Pusat Pelayanan Kesehatan, agar sadar akan pola hidup bersih dan sehat serta
                                memiliki keterampilan
                                dibidang kesehatan.</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box icon-boxpem">
                            <h4><a href="{{ asset('/our-programs') }}">{{ __('general.econom') }}</a></h4>
                            <p style="text-align: justify">Yayasan Wadah mendampingi pribadi dan keluarga agar terlatih
                                dan terampil
                                mengelola potensi yang dimiliki, sehingga tangguh, berdaya dan bermartabat.</p>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </section><!-- End program Section -->

    <!-- ======= Latest News ======= -->
    <section>
        <div class="container" data-aos="fade-up">

            <div class="section-title news-padding-bot" data-aos="fade-up">
                <h2>{{ __('general.news') }}</h2>

                <div class="row content">
                    @foreach ($allNews as $news)
                        <div class="col-lg-4 col-md-12 d-flex align-items-stretch">
                            <div class="icon-boxx">
                                <a href='{{ route('news.show', $news->slug) }}'><img src="{{ asset($news->image) }}" class="card-img-top morenews-img" alt="..."
                                    style="object-fit: cover; min-height:250px; max-height:350px; widht:250px;">
                                <div class="card-body">
                                    <h5 class="card-title mt-1">
                                        <a href="{{ route('news.show', $news->slug) }}">{{ $news->title }}</a>
                                    </h5>
                                    <div class="news-boxx">
                                        <a href="">{{ $news->category->nama_kategori }}</a>
                                        <small>{{ $news->created_at->format('d/m/Y') }}</small>
                                    </div>
                                    <p class="parag-box"> {!! \Illuminate\Support\Str::limit($news->article, 100, '....') !!}
                                    <div>
                                        <a href='{{ route('news.show', $news->slug) }}'
                                        class="read-box float-fix btn btn-secondary btn-sm">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <p class="morenews-box">{{ __('general.morenews') }}<a
                            href="{{ url('/news') }}">{{ __('general.here') }}</a></p>

            </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">
            <div class=" section-title">
                <h2>{{ __('general.contact') }}</h2>
                <p>{{ __('general.call') }}</p>
            </div>
            <div class="row content">
                <div class="col-lg-5 d-flex align-items-stretch left">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>{{ __('general.loc') }}</h4>
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
                            <h4>{{ __('general.phone') }}</h4>
                            <p>(+62)21 5799-2162</p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.440328177692!2d106.
                80945969999999!3d-6.2055025999999955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6a5ae595bc7%3A0x3339aebde3c0f0cf!2sRumah%20Wadah!5e0!3m2!1sid!2sid!4v1632470361467!5m2!1sid!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">{{ __('general.name') }}</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">{{ __('general.email') }}</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">{{ __('general.subj') }}</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">{{ __('general.mess') }}</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">{{ __('general.notif') }}</div>
                        </div>
                        <div class="text-center"><button type="submit">{{ __('general.send') }}</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section> <!-- End Contact Section -->
@endsection
