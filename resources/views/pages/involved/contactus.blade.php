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
        <h2>{{ __('general.call') }}</h2>
      </div>
    </div>
  
    <div class="row content mb-4">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.440328177692!2d106.80945969999999!3d-6.2055025999999955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6a5ae595bc7%3A0x3339aebde3c0f0cf!2sRumah%20Wadah!5e0!3m2!1sid!2sid!4v1632470361467!5m2!1sid!2sid" 
      frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>

      <section id="contact" class="contact">
      <div data-aos="fade-up">

      <div class="row">

      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>{{ __('general.loc') }}</h4>
            <p><b>Rumah Wadah</b> <br>
              Jl. Penjernihan II No. 7<br>
              Kel. Bendungan Hilir, Kec. Tanah abang<br>
              Jakarta Pusat 10210<br>
              Indonesia </p>
              
            <p><b>Rumah Wadah Daerah Yogyakarta</b> <br>
              Jl. Dr. Wahidin Sudiro Husodo No. 26 B<br>
              Yogyakarta 55222</p>

            <p><b>Rumah Wadah Daerah Sikka</b> <br>
              Jl. Don Juan, RT. 002/RW. 004, Ke. Kota Uneng, Kec. Alok, Kab. Sikka<br>
              Nusa Tenggara Timur 86111</p>

            <p><b>Rumah Wadah Daerah Kupang-Koa</b> <br>
              Jl. TDM 3 RT. 19 RW 05, Samping Apotik Kimia Farma TDM<br>
              Nusa Tenggara Timur 86111</p>

            <p><b>Rumah Wadah Daerah Ambon</b> <br>
              Kebun Cengkeh, RT. 007 RW. 009 Sirimau<br>
              Ambon 97128</p>
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
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">{{ __('general.send') }}</button></div>
        </form>
      </div>

    </div>
  </section>
</main> 
@endsection