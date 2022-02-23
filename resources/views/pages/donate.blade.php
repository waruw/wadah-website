
@extends('layouts.app')
@section('container')
  
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
  </div>
</section><!-- End Breadcrumbs -->

<section>
  <div class="container">
    <div class="row title">
      <div class="section-title pt-4">
        <h2>Donation</h2>
        <h3>Make A Difference</h3>
        <h3>Through Life-Changing Gifts
      </div>
    </div>

    <div class="row content mb-3">

      <div class="row donatebg2">
        <div class="col-md-4">
          <h5>US$ 10<br>
            IDR 140,000
        </div>

        <div class="col-md-8">
          <ul type="disc" style="text-align:left">
            <li><h5>Counters the effect of malnutrition in a child by providing 
              a month’s supply of milk</li>
        </div>
      </div>

      <div class="row donatebg">
        <div class="col-md-4">
          <h5>US$ 100<br>
            IDR 1,400,000
        </div>

        <div class="col-md-8">
          <ul type="disc" style="text-align:left">
            <li><h5>Pays for the training and capacity building of pre-school tutors</li>
              <li><h5>Purchases a month’s supply of medicines for a community clinic</li>
        </div>
      </div>

      <div class="row donatebg2">
        <div class="col-md-4">
          <h5>US$ 150<br>
            IDR 2,100,000
        </div>

        <div class="col-md-8">
          <ul type="disc" style="text-align:left">
            <li><h5>Procures educational materials for a Wadah-assisted community</li>
        </div>
      </div>

      <div class="row donatebg">
        <div class="col-md-4">
          <h5>US$ 400<br>
            IDR 5,600,000
        </div>

        <div class="col-md-8">
          <ul type="disc" style="text-align:left">
            <li><h5>Purchases a personal computer for a community library</li>
        </div>
      </div>
    </div>


    <div class="row title">
      <div class="section-title pt-4">
        <h3>Donate Now
      </div>
    </div>

    <div class="row content mb-3 center">
      <div class="row">
      
        <div class="col-md-4">
          <h5>VIA QRIS</h5>
          <h6>YAYASAN WADAH TITIAN HARAPAN</h6>
          <img src="{{asset('img/donate/qrisywth.jpg')}}" width="200px" height="auto">
        </div>

        <div class="col-md-4"> 
          <h5>VIA BANK TRANSFER</h5>
          <h6>YAYASAN WADAH TITIAN HARAPAN</h6>
          <p> BNI Jakarta Pusat<br>
              IDR Account: 77-7720-1679<br>
              USD Account: 77-7201-6772<br>
              Swift Code BNINIDJA</p>
        </div>

        <div class="col-md-4">      
          <h5>VIA PAYPAL</h5>
          <h6>You may also show your support to Wadah Foundation and our 
            communities by donating via PayPal. Just click on the link below:
          </h6>
            <div class="justify-content-lg-start">
            <a href="https://www.paypal.com/paypalme/wadahfoundation" class="btn btn-secondary">Donate</a></p>
        </div>
      </div>
    </div>


  </div>
</section>

</main><!-- End #main -->

@endsection