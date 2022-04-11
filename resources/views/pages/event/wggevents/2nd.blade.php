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
        <img src="{{asset('img/event/wgg/wgg.png')}}" width="150" height="127">
        <a href="{{ url('/wgg')}}"><h2 class="pt-4">Wadah Global Gathering</h2></a>
        <h3>{{ __('general.them') }}</h3>
        </div>
    </div>
    <div class="row content">
      <div class="center mb-3">
        @if (App::currentLocale()=="en")
        <h3>EDUCATION: BUILDING BLOCKS</h3>
        <h3>OF A BETTER FUTURE</h3>
        <h4>2nd Wadah Global Gathering</h4>
        <h4>Yogyakarta, Indonesia</h4>
        <h4>March 18 - 20, 2015</h4> <br>
        <p>At the 2nd Wadah Global Gathering held in Yogyakarta, Indonesia, 
          on March 18-20, 2015, selected youths from Afghanistan, Bhutan, 
          India, Indonesia, Nepal, and the Philippines shared the stage 
          with four CNN Heroes of the Year and held the audience in their 
          thrall with their graphic tales and heart-rending aspirations.</p><br>
        @elseif(App::currentLocale()=="id")
        <h3>PENDIDIKAN: BUILDING BLOCKS</h3>
        <h3>MASA DEPAN YANG LEBIH BAIK</h3>
        <h4>Wadah Global Gathering ke-2</h4>
        <h4>Yogyakarta, Indonesia</h4>
        <h4>18 - 20 Maret 2015</h4> <br>
        <p>Pada Wadah Global Gathering ke-2 yang diadakan di Yogyakarta, Indonesia, 
          pada tanggal 18-20 Maret 2015, pemuda terpilih dari Afghanistan, Bhutan, India, 
          Indonesia, Nepal, dan Filipina berbagi panggung dengan empat CNN Heroes of the 
          Year dan membuat penonton terpesona dengan kisah grafis dan aspirasi yang menyayat hati.</p><br>
        @endif
          
          <img src="{{asset('img/event/wgg/buildingblocks.png')}}" width="300" height="110">

          @if (App::currentLocale()=="en")
          <p>Adopting the theme, “Education: Building Blocks of a Better 
            Future,” the Next Generation made a statement and unleashed their 
            leadership potential.</p>
          @elseif(App::currentLocale()=="id")
          <p>Mengadopsi tema, “Pendidikan: Building Blocks Masa Depan yang Lebih Baik,” Generasi Berikutnya 
            membuat pernyataan dan mengeluarkan potensi kepemimpinan mereka. </p>
          @endif
        </div>


        <div class="center">
        <h3>{{ __('general.keyspeak') }}</h3> <br>
        </div>
        <div class="row">

                        <div class="col-md-1"></div>
                        <div class="col-md-1"></div>
                          
                    <div class="col-md-9">
                    <ul type="disc" style="text-align:left">
        <h5>DR. SIMA SAMAR</h5>
        <br> </div>

        <div class="container">
        <div style="text-align:center">
        <h3> {{ __('general.gspeak') }}</h3> <br>
        </div>
        <div class="row">

                        <div class="col-md-1"></div>
                        <div class="col-md-1"></div>   
                    <div class="col-md-9">
                    <ul type="disc" style="text-align:left">
        <h5>EFREN PEÑFLORIDA, JR.</h5>
        <h5>MUHAMMAD ZHARIFF AFANDI</h5>
        <br>
        </div>

        <div class="container">
        <div style="text-align:center">
            <h3>{{ __('general.msesi') }}</h3> <br>
        </div>
        <div class="row">

                <div class="col-md-1"></div>
                <div class="col-md-1"></div>    
            <div class="col-md-9">
            <ul type="disc" style="text-align:left">

                    <h4 style="color:#208b3a">Dreamer's From Afar</h4><br>
                    <h5>SONAM PEM</h5>
                    <br>

                    <h4 style="color:#208b3a">From Nowhere To Somewhere</h4><br>
                    <h5>ROBIN LIM</h5>
                    <br>

                    <h4 Style="color:#208b3a">Jewels In The Bustling Cities</h4><br>
                    <h5>EFREN PEÑFLORIDA, JR.</h5>
                    <br>

                    <h4 Style="color:#208b3a">Abandoned No More</h4><br>
                    <h5>PUSHPHA BASNET</h5>
                    <br>

                    <h4 Style="color:#208b3a">Victors True And Through</h4><br>
                    <h5>FR. BEINVENIDO "NED" BISU</h5>
                    <br>

                       
        </div>

        <div class="container">
        <div style="text-align:center">
            <h3>{{ __('general.yspeak') }}</h3> <br>
        </div>
        <div class="row">

                        <div class="col-md-1"></div>
                        <div class="col-md-1"></div>   
                    <div class="col-md-9">
                    <ul type="disc" style="text-align:left">
        <h4 style="color:#208b3a">Dreamer's From Afar</h4><br>
        <h5>TARAYANA FOUNDATION</h5>
        <h6>KINLEY ZANGMO, NGAWANG RABSEL WANGCHUK, 
          TSHERING TENZIN DORJI, YANGCHEN TSHOGYAL<h6>
        <br>

        <h5>RAISE A VILLAGE</h5>
        <h6>DIVINE SOLIS, JELANE TORREJOS, RICAJANE MOLINA<h6>
        <br>

        <h5>WADAH FOUNDATION</h5>
        <h6>FRANCE WIBOWO, ROSITA NUR FITRIANI<h6>
        <br>

        <h4 style="color:#208b3a">Jewels Of The Bustling Cities</h4><br>
        <h5>CHAMPIONING COMMUNITY CHILDREN</h5>
        <h6>CHRIS "KESZ" VALDEZ, JERIEMAY CUEVAS, ZHENKIE JOY TUBIANOSA<h6>
        <br>

        <h5>WADAH FOUNDATION</h5>
        <h6>INKA ANDIANI, ZAFRIAH NUR AMALLA<h6>
        <br>

        <h4 style="color:#208b3a">From Nowhere To Somewhere</h4><br>
        <h5>SHUHADA ORGANIZATIION</h5>
        <h6>AMIN NAWID, MOHAMMAD ALI NAVID, MARIAM SAMAR, FARZANA SAMAR<h6>
        <br>

        <h5>GITA EKLESIA FOUNDATION</h5>
        <h6>FRIDOLIN DJOREBE, DANIEL KAWALO, DEVI KUSUMAWATI, 
          KEZIA AMANDA, CAHYA NIGRUM<h6>
        <br>

        <h4 style="color:#208b3a">From Nowhere To Somewhere</h4><br>
        <h5>SHUHADA ORGANIZATIION</h5>
        <h6>AMIN NAWID, MOHAMMAD ALI NAVID, MARIAM SAMAR, FARZANA SAMAR<h6>
        <br>

        <h5>GITA EKLESIA FOUNDATION</h5>
        <h6>FRIDOLIN DJOREBE, DANIEL KAWALO, DEVI KUSUMAWATI, 
          KEZIA AMANDA, CAHYA NIGRUM<h6>
        <br>

        <h4 style="color:#208b3a">Abandoned No More</h4><br>
        <h5>SOS CHILDRENS'S VILLAGE</h5>
        <h6>ROBERTO CARLOS PARU<h6>
        <br>

        <h5>TULOY FOUNDATION</h5>
        <h6>AGELYN SOLIS, JOIMIE DACLES, NELYN HATOL<h6>
        <br>

        <h5>UDAYAN CARE</h5>
        <h6>SHEETAL PAL, MUSKAN<h6>
        <br>

        <h4 style="color:#208b3a">Victors True & Through</h4><br>
        <h5>MAITI NEPAL</h5>
        <h6>PUJA PARIYAR<h6>
        <h6>YUBRAJ POKHREL<h6>
        <h6>MADHU REGMI<h6>
        <br>

        <h5>SAKSHAM</h5>
        <h6>CHETNA NAGPAL, MUSKAN<h6>
        <br>
        </div>

        <div class="section-title">

          <p class="pt-2 mb-3">{{ __('general.readchro') }}</p>
          <a href="{{ url('https://drive.google.com/file/d/107YVu4PWA52zdt-bNQfUelCqpcpzKbfh/view')}}">
            <img src="{{asset('img/media/newsletter/wgg.jpg')}}" widht="auto" height="250"> </a>
            <br><br>
        </div>

        </div>
  </div>
</section>

</main><!-- End #main -->

@endsection