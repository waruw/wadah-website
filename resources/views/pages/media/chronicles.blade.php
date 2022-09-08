
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
        <h2>The Wadah Chronicles</h2>
      </div>
    </div>
    <div class="row content">
      
      <div class="container" data-aos="fade-up">
        <div class="row-12 mt-0 mb-4">
          <div class="col-md-12">
              <p style="text-align:justify">
                @if (App::currentLocale()=="en")
                The Wadah Chronicles is where you can read about the activities and events of Wadah Foundation. 
                Released every March, and September of each year, starting this 2016, 
                the Wadah Newsletter gets a new name and a new face. Simply click on the thumbnail below to start reading.
                <br><br>
                Note: Starting this year, 2021, the Wadah Chronicles will be released exclusively online twice a year 
                to make it easily accessible to more people especially during these trying times.
                @elseif (App::currentLocale()=="id")
                The Wadah Chronicles adalah media dimana Anda dapat membaca tentang kegiatan dan acara Yayasan Wadah. 
                Dirilis setiap bulan Maret, dan September setiap tahunnya, mulai tahun 2016 ini Newsletter
                Wadah mendapat nama dan wajah baru. Cukup klik thumbnail di bawah ini untuk mulai membaca.
                <br><br>
                Catatan: Mulai tahun ini, 2021, Wadah Chronicles akan dirilis secara eksklusif secara online dua 
                kali setahun agar lebih mudah diakses oleh lebih banyak orang terutama selama masa-masa sulit ini. 
                @endif
              </p>
          </div>
        </div>
      </div>

      <div class="container mb-2">
        <div class="row mb-2">
            
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                  <a href="{{ url('https://drive.google.com/file/d/1-EqlN4m9NbxbFowSr10zXxAewTU1lWs4/view')}}" target="_blank">
                    <img class="centerpic" src="{{asset('img/media/chronicles/2022-4.jpg')}}" widht="auto" height="200"></a>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                    <a href="{{ url('https://drive.google.com/file/d/1rXOeJhFAlGgLpkYAvc7addt48KtB3WNb/view')}}"target="_blank">
                      <img class="centerpic" src="{{asset('img/media/chronicles/2021-8.jpg')}}" widht="auto" height="200"></a>
                  </div>
      
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                    <a href="{{ url('https://drive.google.com/file/d/18X_Bit-qH3vWbnBCzmfWpwUYIxWOnKVQ/view')}}" target="_blank">
                      <img class="centerpic" src="{{asset('img/media/chronicles/2021-1.jpg')}}" widht="auto" height="200"></a>
                  </div>  
      
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                    <a href="{{ url('https://drive.google.com/file/d/1kt1YiYD34XQ8CTISlQUjGRDSUwcNmPvC/view')}} "target="_blank">
                      <img class="centerpic" src="{{asset('img/media/chronicles/2020-6.jpg')}}" widht="auto" height="200"></a>
                  </div>
      
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                    <a href="{{ url('https://drive.google.com/file/d/1ubYHDN9pW79VeWqeaOTJyx4Cz9dJtjCh/view')}}" target="_blank">
                      <img class="centerpic" src="{{asset('img/media/chronicles/2019-12.jpg')}}" widht="auto" height="200"></a>
                  </div>
      
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                  <a href="{{ url('https://drive.google.com/file/d/1SiA8UM7b1jyQsiFrAJg5JQecmJPlh7Jl/view')}}" target="_blank">
                    <img class="centerpic" src="{{asset('img/media/chronicles/2019-8.jpg')}}" widht="auto" height="200"></a>
                </div>
        
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                  <a href="{{ url('https://drive.google.com/file/d/13g-jGRSJVepyCzipYO1K8Nrjkkbdsoko/view')}}" target="_blank">
                    <img class="centerpic" src="{{asset('img/media/chronicles/2019-6.jpg')}}" widht="auto" height="200"></a>
                </div>
        
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                  <a href="{{ url('https://drive.google.com/file/d/1D4sFeavJkwUvWjnPD3meqCHTV0oJGyiK/view')}}" target="_blank">
                    <img class="centerpic" src="{{asset('img/media/chronicles/2018-12.jpg')}}" widht="auto" height="200"></a>
                </div>
      
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                  <a href="{{ url('https://drive.google.com/file/d/1_dHxWHG790S6alP9WImCZwLrtiGWc6j1/view')}}" target="_blank">
                    <img class="centerpic" src="{{asset('img/media/chronicles/2018-8.jpg')}}" widht="auto" height="200"></a>
                </div>
      
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                  <a href="{{ url('https://drive.google.com/file/d/12SWJucsKJheAhxxR05CwmcJ9Wis0c19a/view')}}" target="_blank">
                    <img class="centerpic" src="{{asset('img/media/chronicles/2018-4.jpg')}}" widht="auto" height="200"></a>
                </div>
          
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                  <a href="{{ url('https://drive.google.com/file/d/1MixfiXpECF01B3u2WCjbFfqebBEK4BAv/view')}}" target="_blank">
                    <img class="centerpic" src="{{asset('img/media/chronicles/2017-12.jpg')}}" widht="auto" height="200"></a>
                </div>
          
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                  <a href="{{ url('https://drive.google.com/file/d/12A1cuOXHMZeyJNkHeYE8Gwq9ZD_whKfD/view')}}" target="_blank">
                    <img class="centerpic" src="{{asset('img/media/chronicles/2017-8.jpg')}}" widht="auto" height="200"></a>
                </div>
      
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                  <a href="{{ url('https://drive.google.com/file/d/1PUg1NDYIutwVvIcborTH0Zy4IoMrIfvC/view')}}" target="_blank">
                    <img class="centerpic" src="{{asset('img/media/chronicles/2017-4.jpg')}}" widht="auto" height="200"></a>
                </div>
      
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                  <a href="{{ url('https://drive.google.com/file/d/11T3YRJuQuCnZ1OB7K0atuFw-pcYliwIW/view')}}" target="_blank">
                    <img class="centerpic" src="{{asset('img/media/chronicles/2016-12.jpg')}}" widht="auto" height="200"></a>
                </div>
            
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                  <a href="{{ url('https://drive.google.com/file/d/1Zr2vZt7BfEkLh2Ul62-VLht-PLnz6-Nn/view')}}" target="_blank">
                    <img class="centerpic" src="{{asset('img/media/chronicles/2016-8.jpg')}}" widht="auto" height="200"></a>
                </div>  
      
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                  <a href="{{ url('https://drive.google.com/file/d/19oQFSix7DeDUxz4BWYeCEoc0EmJsMZ3V/view')}}" target="_blank">
                    <img class="centerpic" src="{{asset('img/media/chronicles/2016-4.jpg')}}" widht="auto" height="200"></a>
                </div>  
                  
          </div>
        </div>

    </div>
  </div>
</section>


<section>
  <div class="container">
    <div class="row title">
      <div class="section-title pt-4">
        <h2>Wadah Newsletter</h2>
      </div>
    </div>
    <div class="row content">
      
      <div class="container" data-aos="fade-up">
        <div class="row-12 mt-0 mb-4">
          <div class="col-md-12">
            <p style="text-align:justify">
              @if (App::currentLocale()=="en")
              Released every June, August and December of each year, the Wadah Newsletter is where you can 
              read about the activities and events of Wadah Foundation. Simply click on the thumbnail below 
              to start reading.
              <br><br>
              Final release date: December 2015
              @elseif (App::currentLocale()=="id")
              Dirilis setiap bulan April, Agustus dan Desember setiap tahun, Wadah Newsletter adalah tempat 
              Anda dapat membaca tentang kegiatan dan acara Yayasan Wadah. Cukup klik thumbnail di bawah ini 
              untuk mulai membaca.
              <br><br>
              Tanggal rilis terakhir: Desember 2015 
              @endif
            </p>
          </div>
        </div>
      </div>

      <div class="container mb-2">
        <div class="row mb-2">
            
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
              <a href="{{ url('https://drive.google.com/file/d/1_RwRWrNXybdN3nSjiaqwhYIPpnHzpmtk/view')}}" target="_blank">
                <img class="centerpic" src="{{asset('img/media/newsletter/2015-12.jpg')}}" widht="auto" height="200"></a>
              </div>  

          <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
              <a href="{{ url('https://drive.google.com/file/d/1sRQQbg8h4WZ9NZ4QVmaQBGSndyKb3Mnm/view')}}" target="_blank">
                <img class="centerpic" src="{{asset('img/media/newsletter/wgg.jpg')}}" widht="auto" height="200"></a>
            </div>  

          <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
              <a href="{{ url('https://drive.google.com/file/d/1QQVqZze0sNpLLw5M9w23cPu4pYSIyUBa/view')}}" target="_blank">
                <img class="centerpic" src="{{asset('img/media/newsletter/2015-4.jpg')}}" widht="auto" height="200"></a>
            </div>  
          
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                  <a href="{{ url('https://drive.google.com/file/d/1HZRtdxNsAVOYllLn5EKFrV9g_F7hqRMD/view')}}" target="_blank">
                    <img class="centerpic" src="{{asset('img/media/newsletter/2014-12.jpg')}}" widht="auto" height="200"></a>
                </div>  

            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                  <a href="{{ url('https://drive.google.com/file/d/1Xeb8MRptLn7fnpzxkDmhDdoDMOk9jN4E/view')}}" target="_blank">
                    <img class="centerpic" src="{{asset('img/media/newsletter/2014-8.jpg')}}" widht="auto" height="200"></a>
                </div>  

            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                  <a href="{{ url('https://drive.google.com/file/d/1rXesVk8lE_GKr1xO4nn_1ouAtXenh4Iq/view')}}" target="_blank">
                    <img class="centerpic" src="{{asset('img/media/newsletter/2014-4.jpg')}}" widht="auto" height="200"></a>
                </div>  

            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                  <a href="{{ url('https://drive.google.com/file/d/137ik2tlYGTz2vqOlf2hv-bAUod6wIBOB/view')}}" target="_blank">
                    <img class="centerpic" src="{{asset('img/media/newsletter/2013-12.jpg')}}" widht="auto" height="200"></a>
                </div>  

            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                <a href="{{ url('https://drive.google.com/file/d/1LR768aSeD0eUJDYxZu3ZJis7DLMt-cjD/view')}}" target="_blank">
                  <img class="centerpic" src="{{asset('img/media/newsletter/2013-7.jpg')}}" widht="auto" height="200"></a>
              </div>  
      
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                <a href="{{ url('https://drive.google.com/file/d/1ZmKtjwST71pqVCbZ5dgiMP1fVcrN8Lgs/view')}}" target="_blank">
                  <img class="centerpic" src="{{asset('img/media/newsletter/2013-4.jpg')}}" widht="auto" height="200"></a>
              </div>
      
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                <a href="{{ url('https://drive.google.com/file/d/1z7f7buTAo41pXfBy2eEO3rnigGZTIEBd/view')}}" target="_blank">
                  <img class="centerpic" src="{{asset('img/media/newsletter/2012-11.jpg')}}" widht="auto" height="200"></a>
              </div>

            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                <a href="{{ url('https://drive.google.com/file/d/1rag8wleLDWloD-HRDGcXG9Pzxe2YdCxN/view')}}" target="_blank">
                  <img class="centerpic" src="{{asset('img/media/newsletter/2012-7.jpg')}}" widht="auto" height="200"></a>
              </div>

            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                <a href="{{ url('https://drive.google.com/file/d/1DVkyOKYb2LfHlHVrkT4n3Y3yDW1Ivfzd/view')}}" target="_blank">
                  <img class="centerpic" src="{{asset('img/media/newsletter/2012-3.jpg')}}" widht="auto" height="200"></a>
              </div>
        
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                <a href="{{ url('https://drive.google.com/file/d/1rLCvY3fGfy04HpDedXAacnjHJ8gxRNqi/view')}}" target="_blank">
                  <img class="centerpic" src="{{asset('img/media/newsletter/2011-12.jpg')}}" widht="auto" height="200"></a>
              </div>
        
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                <a href="{{ url('https://drive.google.com/file/d/1uyVPd1cAVUPYoMVwN1u2htiuhdM2dmAK/view')}}" target="_blank">
                  <img class="centerpic" src="{{asset('img/media/newsletter/2011-8.jpg')}}" widht="auto" height="200"></a>
              </div>

            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                <a href="{{ url('https://drive.google.com/file/d/1pPh6wbMMYwiAGsQYPqms0Y8ckssRZwnt/view')}}" target="_blank">
                  <img class="centerpic" src="{{asset('img/media/newsletter/2011-4.jpg')}}" widht="auto" height="200"></a>
              </div>

            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                <a href="{{ url('https://drive.google.com/file/d/1BFvNYil6s3-K1qyD1MKZL9KtnKVawJ0i/view')}}" target="_blank">
                  <img class="centerpic" src="{{asset('img/media/newsletter/vol3no3.jpg')}}" widht="auto" height="200"></a>
              </div>
          
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                <a href="{{ url('https://drive.google.com/file/d/1usEUhC98H-BRNdBF4FsTBAYk8c6BNZxz/view')}}" target="_blank">
                  <img class="centerpic" src="{{asset('img/media/newsletter/vol3no2.jpg')}}" widht="auto" height="200"></a>
              </div>  

            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                <a href="{{ url('https://drive.google.com/file/d/1i7HhlqaikA0qvziv-waZaKGdZGC8_qVa/view')}}" target="_blank">
                  <img class="centerpic" src="{{asset('img/media/newsletter/vol3no1.jpg')}}" widht="auto" height="200"></a>
              </div>  

            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                <a href="{{ url('https://drive.google.com/file/d/1uziUhwQtmzqVaj6NuvQXwlIfrB9lLwED/view')}}" target="_blank">
                  <img class="centerpic" src="{{asset('img/media/newsletter/2009-3.jpg')}}" widht="auto" height="200"></a>
              </div>  

            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                <a href="{{ url('https://drive.google.com/file/d/1uKB-FdBX2dOb7GnPmc_CmB77q14UtPAn/view')}}" target="_blank">
                  <img class="centerpic" src="{{asset('img/media/newsletter/2009-2.jpg')}}" widht="auto" height="200"></a>
              </div>  

            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                <a href="{{ url('https://drive.google.com/file/d/1KIFBdQm9LGsgL7Ozl-UtgxJ2TPXTrf-5/view')}}" target="_blank">
                  <img class="centerpic" src="{{asset('img/media/newsletter/2009-1.jpg')}}" widht="auto" height="200"></a>
              </div>  

            <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-2">
                <a href="{{ url('https://drive.google.com/file/d/1GVU7t8pJj4Na4cdVMO0xpDcd5puMTBM5/view')}}" target="_blank">
                  <img class="centerpic" src="{{asset('img/media/newsletter/2008.jpg')}}" widht="auto" height="200"></a>
              </div>  
                  
          </div>
        </div>
        
    </div>
  </div>
</section>

</main><!-- End #main -->
  
@endsection