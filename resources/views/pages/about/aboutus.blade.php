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
        <h2>About US</h2>
      </div>
    </div>
    <div class="row content mb-4">
      <p style="text-align:justify">
        Yayasan Wadah Titian Harapan (“Wadah”) is a non-profit organization founded on the concerns of a 
        mother towards for the welfare of the nation, especially of the grassroots. The future of a nation 
        lies with them. We hope that through Wadah, they can achieve a better future, building towards 
        future generations that are more resilient, more empowered, and more dignified.
      <br><br>
        Wadah is an abbreviation of the words ‘Women’ and ‘Hope’ in Indonesian. Wadah has a literal meaning of  
        ‘a place;’ however, in practice, it also refers to a broader meaning of ‘a family’ or ‘a community'.          
      <br><br>
        Wadah began by inviting families to be more attentive to educating the future generations. 
        Wadah expanded its services to promoting health and strengthening the family economy, taking 
        further steps to support and train at the grassroots level holistically.    
      <br><br>
        Wadah has also broadened its reach internationally with sister organizations registered in the 
        Phillippines, Malaysia and India: Philippines Wanita dan Harapan, Inc.; Pertubuhan Wadah Kuala 
        Lumpur & Selangor; Wadah Trust India. In 2016, Wadah was granted Special Consultative Status by 
        the United Nations Economic and Social Council. A year later, in December 2017, Wadah received 
        ISO 9001:2015 Certification, which was extended in December 2020.
      </p>
    </div>

    <div class="row title">
    </div>

    <div class="row content">
        <div class="container mb-3">
              <div class="row justify-content-center pt-3 mb-3">
                  <p class="center sizefont bold color">Our Vision</p>
              </div>
                <h4 class="center">Creating an empowered and dignified society</h4>
        </div>

        <div class="container mb-3">
              <div class="row justify-content-center pt-3 mb-3">
                  <p class="center sizefont bold color">Our Mission</p>
              </div>
                <h4 class="center">Empowering individuals holistically through education, health, and economic development</h4>
        </div>

        <div class="container mb-3">
              <div class="row justify-content-center pt-3 mb-3">
                  <p class="center sizefont bold color">Our Objectives</p>
              </div>
                  <h4 class="center">To produce community leaders who are well-trained, skilled and trusted in their fields</h4>
        </div>

          <div class="container mb-3">
            <div class="row justify-content-center pt-3 mb-3">
                <p class="center sizefont bold color">Our Values</p>
                <h4 class="center pt-2">Godliness</h4>
                <h4 class="center">Honesty and Sincerity</h4>
                <h4 class="center">Inclusive</h4>
                <h4 class="center">Humility</h4>
                <h4 class="center">Unity</h4>
                <h4 class="center">Diversity</h4>
            </div>
          </div>
  
          <div class="container">
            <div class="row justify-content-center mb-3">
                <p class="center sizefont bold color">Our Programs</p>
            </div>
                <h4 class="center">With the community growth in mind, WADAH conducts 
                  various programs and activities in its supported communities</h4>
                    <div class="pt-3 mb-0">
                    <h4 class="center">Education</h3>
                    <h4 class="center">Health</h3>
                    <h4 class="center">Community Development</h3>
                    </div>
          </div>

    </div>
  </div>
</section>
    
<section>
  <div class="container background mb-3">
    <div class="row title">
      <div class="section-title pt-4">
        <h2>WHAT MAKES WADAH "UNIQUE"?</h2>
    </div>
    </div>

    <div class="row content">
          <div class="row">
            <div class="col-md-1"></div>
		        <div class="col-md-1"></div>
		        <div class="col-md-9">
            <ul type="disc" style="text-align:left">
              <li><b>WADAH CARES</b></li>
                <ul type="square">
                  <li>Its guiding principle of Caring in Sharing and Giving</li>
                  <li>It advocates values that uphold the dignity of the human being</li>
                  <li>It respects local culture and traditions</li>
                  <br>
                </ul>
              <li><b>WADAH LISTENS</b></li>
                <ul type="square">
                  <li>It is consultative, collaborative, inclusive</li>
                  <li>It does not impose its agenda of change, instead</li>
                  <li>It engages the community, its leaders, its stakeholders, its beneficiaries</li>
                  <br>
                </ul>
              <li><b>WADAH INSPIRES</b></li>
              <ul type="square">
                  <li>It seeks to bring out the best in the individual (it identifies individuals who are already doing good to become great)</li>
                  <li>It develops role models, who lead, not by word, but by deed and by example</li>
                  <br>
                </ul>
              <li><b>WADAH STAYS</b></li>
              <ul type="square">
                  <li>It is not “project”-minded</li>
                  <li>It is focused on sustainability</li>
                  <br>
                </ul>
              <br>
            </div>
		        <div class="col-md-1"></div>
		        <div class="col-md-1"></div>
		        <div class="col-md-1"></div>
		        <div class="col-md-1"></div>
		        <div class="col-md-1"></div>
	        	<div class="col-md-1"></div>
	        	<div class="col-md-1"></div>
	        	<div class="col-md-1"></div>
            <h4 class="bold center mb-3">100% OF DONATIONS AND SPONSORSHIPS 
              <br>ARE RECEIVED AND ENJOYED
              BY ITS BENEFICIARIES</h4>
        </div>
    </div>
  </section>

        <div class="row">
        <div  class="col-md-12 section-title pt-4">
          <h2>OPERATIONAL LOCATION</h2>

          <img class="img-fluid" src="{{asset('img/aboutus/28_1.jpg')}}" widht="auto" height="800";>
                                    {{-- <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 

                            <div id="map" style="idth: 100%; height: 500px;"></div>

                            <script src="http://maps.google.com/maps/api/js?sensor=false" 
                                    type="text/javascript"></script>
                                    
                            <script type="text/javascript">
                              var locations = [
                                ['Rumah Wadah', -6.205482596789312, 106.80946103774215, 4],
                                ['Rumah Wadah Daerah Kupang Koa', -10.1966638,123.6243784, 5],
                                ['Rumah Wadah Daerah Yogyakarta', -7.7858473257344745, 110.3783756966485, 3],
                                ['Rumah Wadah Daerah Sikka', -8.626132436952982, 122.22766036156979, 2],
                                ['Rumah Wadah Daerah Ambon', -3.6793064561713136, 128.19586605245004, 1]
                              ];

                              var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 10,
                                center: new google.maps.LatLng( -7.351571, 109.682181),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                              });

                              var infowindow = new google.maps.InfoWindow();

                              var marker, i;

                              for (i = 0; i < locations.length; i++) {  
                                marker = new google.maps.Marker({
                                  position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                                  map: map
                                });

                                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                  return function() {
                                    infowindow.setContent(locations[i][0]);
                                    infowindow.open(map, marker);
                                  }
                                })(marker, i));
                              }
                            </script> --}}
       </div>
      </div>

</section>
</main><!-- End #main -->

@endsection
