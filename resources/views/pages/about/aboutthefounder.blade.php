
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
          <h2>{{ __('general.found') }}</h2>
        </div>
      </div>

      {{-- {{App::currentLocale()}} "cara mengecek kondisi bahasa yang berlaku" --}}
      @if (App::currentLocale()=="en")
        <div class="row content mb-4">
          <p  style="text-align:justify;"> 
            <img style="float:left; margin-right: 18px; margin-bot: 40px" src="{{asset('img/founder/2.jpg')}}" widht="auto" height="230";>
              Mrs. Anie Harjati Djojohadikusumo is the Founder and currently the President of Wadah Titian Harapan 
              Foundation (“Wadah”), a Jakarta-based international social organization. She was born in Nganjuk, 
              East Java, on 9 August 1956. She is, first and foremost, a wife and mother of three children. 
              <br> <br>
              WADAH stands by its vision: <i>“Envisages empowered and dignified individuals and communities.”</i> 
              To achieve its vision, Wadah is guided by its mission of: <i>“Empowering individuals and communities 
              by utilizing a holistic blend of education, health and economic development programs.”</i> 
              <br> <br>
              Operating at the impoverished and underprivileged levels of society, Wadah supports Indonesian women 
              and their children by offering the opportunity to manage their lives beyond family survival, lifting 
              them out of the spiral of illiteracy and poverty. 
              <br> <br>
              She was vastly enriched by her proximity to some of the best teachers imaginable, her late parents and 
              father-in-law, Prof. Dr. Sumitro Djojohadikusumo, who to this day, remains a legend in his country. 
              By attending seminars and workshops conducted by the Young Presidents’ Organization (YPO), the World 
              Economic Forum, CNN and countless others, Ibu Anie was inspired to stage her very own Wadah Gatherings. 
              <br> <br>
              These Wadah Gatherings serve as a venue for heroes and champions, sung and (mostly) unsung alike to tell 
              their stories of sharing, caring and giving to inspire each other. Those gatherings were not conferences, 
              forums, seminars, workshops, but a gathering of like-minded and like-spirited individuals who are already 
              doing good and aspire to do great. 
              <br> <br>
              To date, Wadah has supported thousands of underprivileged children in/through(?) communities directly being 
              assisted by Wadah, as well as partner organizations within and outside of Indonesia, i.e. the Philippines, 
              Nepal, India, Bhutan, and Malaysia. 
              <br> <br>
              Under Ibu Anie's leadership, Wadah has achieved notable achievements: in 2016, Wadah received a Special 
              Consultative Status at the United Nations Economic and Social Council (ECOSOC); in 2017, Wadah successfully 
              obtained ISO 9001-2015 Quality Management System certificate; and in 2018,  Wadah became an Affiliate 
              Member of the Massachusetts Institute of Technology (MIT) under the Abdul Latif Jameel World Education 
              Lab or JWEL. 
          </p>
        </div>

      @elseif(App::currentLocale()=="id")
      <div class="row content mb-4">
        <p  style="text-align:justify;"> 
          <img style="float:left; margin-right: 18px; margin-bot: 40px" src="{{asset('img/founder/ahd1.jpg')}}" widht="auto" height="230";>
          Mrs. Anie Harjati Djojohadikusumo is the Founder and currently the President of Wadah Titian Harapan 
          Foundation (“Wadah”), a Jakarta-based international social organization. She was born in Nganjuk, 
          East Java, on 9 August 1956. She is, first and foremost, a wife and mother of three children. 
          <br> <br>
          WADAH stands by its vision: <i>“Envisages empowered and dignified individuals and communities.”</i> 
          To achieve its vision, Wadah is guided by its mission of: <i>“Empowering individuals and communities 
          by utilizing a holistic blend of education, health and economic development programs.”</i> 
          <br> <br>
          Operating at the impoverished and underprivileged levels of society, Wadah supports Indonesian women 
          and their children by offering the opportunity to manage their lives beyond family survival, lifting 
          them out of the spiral of illiteracy and poverty. 
          <br> <br>
          She was vastly enriched by her proximity to some of the best teachers imaginable, her late parents and 
          father-in-law, Prof. Dr. Sumitro Djojohadikusumo, who to this day, remains a legend in his country. 
          By attending seminars and workshops conducted by the Young Presidents’ Organization (YPO), the World 
          Economic Forum, CNN and countless others, Ibu Anie was inspired to stage her very own Wadah Gatherings. 
          <br> <br>
          These Wadah Gatherings serve as a venue for heroes and champions, sung and (mostly) unsung alike to tell 
          their stories of sharing, caring and giving to inspire each other. Those gatherings were not conferences, 
          forums, seminars, workshops, but a gathering of like-minded and like-spirited individuals who are already 
          doing good and aspire to do great. 
          <br> <br>
          To date, Wadah has supported thousands of underprivileged children in/through(?) communities directly being 
          assisted by Wadah, as well as partner organizations within and outside of Indonesia, i.e. the Philippines, 
          Nepal, India, Bhutan, and Malaysia. 
          <br> <br>
          Under Ibu Anie's leadership, Wadah has achieved notable achievements: in 2016, Wadah received a Special 
          Consultative Status at the United Nations Economic and Social Council (ECOSOC); in 2017, Wadah successfully 
          obtained ISO 9001-2015 Quality Management System certificate; and in 2018,  Wadah became an Affiliate 
          Member of the Massachusetts Institute of Technology (MIT) under the Abdul Latif Jameel World Education 
          Lab or JWEL.
        </p>
      </div>
      @endif
      
  
      
    </div>
</section>
</main>                    
@endsection