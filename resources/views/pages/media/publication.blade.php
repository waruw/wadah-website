
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
        <h2>{{ __('general.publc') }}</h2>
      </div>
    </div>
    <div class="row content mb-5">
      
      <div class="col-md-4">
        <img src="{{asset('img/media/publication/satudasawarsawadah.jpg')}}" width="350px" height="auto">
      </div>

      <div class="col-md-8">
        <p  style="text-align:justify; color:green;"> 

          @if (App::currentLocale()=="en")

          <b>SATU DASAWARSA WADAH MENGABDI <br> A Decade of Service to Humanity 2008 - 2018 </b></p>
        <p style="font-size:14px;">   Author: Retnaning Tyas, Zul Herman, Alfredo Torno III <br>
            Publisher: Yayasan Wadah Titian Harapan (Jan 2018) <br>
            Product Dimensions: 21.5 x 23 cm <br>
            No. of Pages: 116 pages <br>
            Language: Bahasa Indonesia/English </p>
        <p style="text-align:justify;" > “A Decade of Service to Humanity” is an illustration of the colorful journey of our beloved Yayasan 
            Wadah Titian Harapan/Wadah Foundation during the last 10 years. This photo essay is a celebration of 
            the works and services of the Wadah Foundation Founder, Mrs. Anie Hashim Djojohadikusumo, who has 
            dedicated her strength, energy, mind, passion, and love together with Wadah volunteers, staff and 
            executives during the last 10 years. <br> <br>
            This book also reminds us of her struggles and sacrifices for the people whom she loves and cares for 
            in serving the communities amidst all challenges and impacts during the growth process of the communities.
            May this book also remind us all of Ibu Anie’s favorite quote from Winston Churchill: “We make a living 
            by what we get, but we make a life by what we give.” In the end, we hope that this book would give 
            everyone a better understanding of Wadah’s services, done and conducted in all sincerity, humility, 
            commitment, and provide a positive impact to everyone who reads it. <br>
        <p style="font-size:14px;" > <i>(Retnaning Tyas)</i>

          @elseif (App::currentLocale()=="id")

          <p  style="text-align:justify; color:green;"> 
            <b>SATU DASAWARSA WADAH MENGABDI <br> A Decade of Service to Humanity 2008 - 2018 </b></p>
          <p style="font-size:14px;">   Pengarang: Retnaning Tyas, Zul Herman, Alfredo Torno III <br>
              Penerbit: Yayasan Wadah Titian Harapan (Jan 2018) <br>
              Ukuran Buku: 21.5 x 23 cm <br>
              Jumlah Halaman: 116 halaman <br>
              Bahasa: Bahasa Indonesia/Inggris </p>
          <p style="text-align:justify;" > "Satu Dasawarsa Wadah Mengabdi 2008-2018” adalah sebuah buku 
              yang menggambarkan perjalanan pelayanan Yayasan Wadah yang penuh warna; bercerita tentang 
              karya-karya pendiri Wadah, Ibu Anie Hashim Djojohadikusumo dalam membangun pribad-pribadi dan 
              masyarakat termarjinalkan melalui berbagai program yang dijalankan dengan penuh dedikasi, 
              semangat, cinta kasih bersama-sama sukarelawan dan para pengurus serta staff Wadah dalam 
              kurun waktu 10 tahun terakhir.<br> <br>
              Buku ini juga mengingatkan kita kepada perjuangan dan pengorbanan beliau bagi orang-orang 
              yang dicintai dan dikasihinya dalam melakukan pelayanan di masyarakat dengan segala persoalan 
              yang ada serta dampak yang terjadi dalam proses bertumbuh kembangnya masyarakat tersebut. 
              Upaya ini juga mengingatkan kita pada ucapan Winston Churchill yang selalu Beliau kutip: 
              “Kita hidup dari apa yang kita dapatkan, tapi kita menciptakan kehidupan dengan apa yang kita berikan.”
              Pada akhirnya kami berharap semoga buku ini dapat memberikan pengetahuan tentang sebuah 
              pelayanan yang dilakukan dengan ketulusan, kerendahan hati, komitmen yang tinggi dan 
              memberikan manfaat, dampak positif bagi siapa saja yang membaca.<br>
          <p style="font-size:14px;" > <i>(Retnaning Tyas)</i>
            @endif
      </div>
    </div>

    <div class="row content mb-5">
      
      <div class="col-md-4">
        <img src="{{asset('img/media/publication/ibu.jpg')}}" width="350px" height="auto">
      </div>

      <div class="col-md-8">
        <p  style="text-align:justify; color:green;"> 

          @if (App::currentLocale()=="en")

          <b> IBU - A Pillar of Life <br> Wadah Women in Their Community </b></p>
        <p style="font-size:14px;">   Author: Bettina Casimir Clark <br>
            Publisher: Yayasan Wadah Titian Harapan (Mar 2012) <br>
            Product Dimensions: 21 x 28 cm <br>
            No. of Pages: 90 pages <br>
            Language: English <br>
            Price: IDR 150,000 </p>

        <p style="text-align:justify;" > “Ibu – A Pillar of Life, Wadah Women in Their Community” contains an important 
          message as we are becoming more and more aware of world-wide human issues. This time the experience is delivered 
          as an invitation to entice your soul and connect with women in Indonesia’s marginalized communities. It is 
          meant to shift your awareness of compassion as you become a witness of Wadah’s infinite efforts to facilitate 
          Places of Hope and Empowerment: From Women, by Women – for ALL. <br> <br>

          This book is a vehicle to communicate the Significance and Worth of Womanhood in Indonesia. Of women 
          being the Co-Creator with Life summoning their purpose and many responsibilities into One: The Mother, 
          Wife, Companion, Caretaker, Healer, Protector, Parent, Teacher – and Provider. In this book we are 
          calledto witness the struggle on their quest while letting go of our judgment. We are called to 
          facilitate and awaken further the unlimited power of the feminine spirit through Self Empowerment. 
          They are the ones who are now creating supportive communities who are inspiring progress and change. 
          We are called to Embrace Indonesia’s Women. 

          <p style="font-size:14px;" > <i>(Bettina Casimir Clark)</i>

            @elseif(App::currentLocale()=="id")

            <b> IBU - A Pillar of Life <br> Wadah Women in Their Community </b></p>
        <p style="font-size:14px;">   Pengarang: Bettina Casimir Clark <br>
            Penerbit: Yayasan Wadah Titian Harapan (Maret 2012) <br>
            Ukuran Buku: 21 x 28 cm <br>
            Jumlah Halaman: 90 halaman <br>
            Bahasa: Inggris <br>
            Harga: IDR 150,000 </p>

        <p style="text-align:justify;" > "Ibu - Pilar Kehidupan, Perempuan Wadah di Komunitas mereka" 
          mengandung pesan penting seiring dengan semakin sadarnya kita tentang berbagai masalah kemanusiaan 
          di dunia. Buku ini berusaha menampilkan kiprah dan pengalaman perempuan di masyarakat termarjinal 
          di Indonesia melalui serial foto.  <br> <br>

          Buku ini merupakan alat komunikasi untuk menyampaikan betapa penting dan berharganya masalah 
          keperempuanan di Indonesia. Perempuan dengan berbagai peran dan tanggung jawab yaitu: sebagai 
          Ibu, Istri, Sahabat, Penyembuh, Pelindung, Orang tua, Guru dan lain-lain. Melalui buku ini kita 
          dipanggil untuk bersaksi tentang perjuangan perempuan. Kita dipanggil memberikan sarana untuk 
          membangunkan kekuatan semangat keperempuanan melalui pemberdayaan diri mereka sendiri.  Merekalah 
          yang kini mengilhami kemajuan dan perubahan di tengah masyarakat. Kita dipanggil untuk merangkul 
          Perempuan Indonesia.

          <p style="font-size:14px;" > <i>(Bettina Casimir Clark)</i>

            @endif
      </div>
    </div>

    <div class="row content mb-5">
      
      <div class="col-md-4">
        <img src="{{asset('img/media/publication/obor.jpg')}}" width="350px" height="auto">
      </div>

      <div class="col-md-8">
        <p  style="text-align:justify; color:green;"> 

          @if (App::currentLocale()=="en")

          <b> Obor <br> Torchbearers of Hope </b> </p>
        <p style="font-size:14px;">   Author: Ethel Fong-Chalopin <br>
            Publisher: Yayasan Wadah Titian Harapan (Jan 2018) <br>
            Product Dimensions: 21 x 28 cm <br>
            No. of Pages: 90 pages <br>
            Language: English <br>
            Price: IDR 150,000 </p>

        <p style="text-align:justify;" > “Obor” is a collection of the personal stories of twenty extraordinary 
          individuals who have put on hold their own future to relentlessly help build the future of others. Without 
          asking anything in return, they reach out to relieve others’ misfortune and work to make a difference in 
          their lives. Their journey is one of belief, dedication, determination, love and perseverance.

        <p style="font-size:14px;" > <i>(Ethel Fong-Chalopin)</i>

          @elseif (App::currentLocale()=="id")

          <b> Obor <br> Torchbearers of Hope </b> </p>
          <p style="font-size:14px;">   Pengarang: Ethel Fong-Chalopin <br>
            Penerbit: Yayasan Wadah Titian Harapan (Jan 2012) <br>
            Ukuran Buku: 21 x 28 cm <br>
            Jumlah Halaman: 90 halaman <br>
            Bahasa: Inggris <br>
            Harga: IDR 150,000 </p>
  
          <p style="text-align:justify;" > "Obor" adalah kumpulan kisah-kisah pribadi dari dua puluh orang 
            luar biasa yang seakan melupakan   diri mereka sendiri demi membantu membangun masa depan orang 
            lain. Tanpa meminta imbalan apa pun, mereka mengulurkan tangan untuk meringankan penderitaan 
            orang lain. Perjalanan hidup mereka merupakan kepercayaan, dedikasi, tekad, cinta dan ketekunan.
  
          <p style="font-size:14px;" > <i>(Ethel Fong-Chalopin)</i>

            @endif
      </div>
    </div>

    <div class="row content mb-5">
      
      <div class="col-md-4">
        <img src="{{asset('img/media/publication/trotoar.jpg')}}" width="350px" height="auto">
      </div>

      <div class="col-md-8">
        <p  style="text-align:justify; color:green;"> 

          @if (App::currentLocale()=="en")

          <b>TROTOAR <br> THE LOST CHILDREN OF INDONESIA </b> </p>
        <p style="font-size:14px;"> Author: Tanis Chalopin <br>
          Publisher: Yayasan Wadah Titian Harapan (Aug 2010) <br>
          Product Dimensions: 21 x 28 cm <br>
          No. of Pages: 80 pages <br>
          Language: English <br>
          Price: IDR 150,000 </p>

        <p style="text-align:justify;" > “TROTOAR” , the Lost Children of Indonesia” ia a photographic essay on 
          how children slip through the cracks of our society and vanish from our view because of mind-numbing 
          poverty, and our own tragic and selfish inattention. This book is a small step towards understanding 
          and reaching out. Let’s make sure together that it will become the first solid stone of a contribution 
          towards the rehabilitation of these children. <br> <br>

          In Indonesian Trotoar (‘Trottoir” in French) means ‘sidewalk’. Born to poor to pay for official 
          registration, many children in large cities of Indonesia are without identity cards. <br> <br>

          “In photographing their secret struggle, living off sidewalks, railroads, garbage dumps, flooded 
          riversides, performing in the street, begging or selling themselves, I wanted to show their courage 
          of surviving, each and every day in face of adversity and suffering, yet with that unmistakable 
          sparkle of hope in their eyes.  I feel privileged to have been invited to photograph these children 
          for the first book of Wadah Foundation. I hope that this book will serve as a tool to spread a 
          message of love and generosity towards all the children in the world”.

          <p style="font-size:14px;" > <i>(Tanis Chalopin)</i>

            @elseif(App::currentLocale()=="id")

            <b>TROTOAR <br> THE LOST CHILDREN OF INDONESIA </b> </p>
        <p style="font-size:14px;"> Pengarang: Tanis Chalopin <br>
          Penerbit: Yayasan Wadah Titian Harapan (Aug 2010) <br>
          Ukuran Buku: 21 x 28 cm <br>
          Jumlah Halaman: 80 halaman <br>
          Bahasa: Inggris <br>
          Harga: IDR 150,000 </p>

        <p style="text-align:justify;" > “TROTOAR, the Lost Children of Indonesia” adalah sebuah esai foto 
          tentang bagaimana anak-anak bertahan hidup dalam riuhnya derap kehidupan masyarakat di perkotaan 
          yang luput dari pandangan kita karena kemiskinan dan ketidakpedulian kita. Buku ini merupakan 
          langkah kecil menuju pemahaman dan menjangkau mereka yang terpinggirkan tersebut. Mari kita 
          pastikan bersama-sama bahwa ini akan menjadi langkah awal untuk mengubah dan memperbaiki kehidupan 
          anak-anak tersebut.   <br> <br>

          Trotoar atau Trottoir dalam bahasa Perancis,  berarti pinggir jalan tempat pejalan kaki. Banyak 
          anak yang lahir tidak memiliki identitas karena semua itu harus dibayar dan mereka tidak punya 
          uang untuk membayarnya.  <br> <br>

          "Dengan memotret perjuangan anak-anak yang terpaksa hidup bergelandangan di trotoar, di rel kereta api, 
          di tempat pembuangan sampah, di pinggiran sungai yang sering banjir, mengamen di jalan, mengemis atau 
          bahkan menjual diri mereka sendiri, saya ingin menunjukkan keberanian mereka untuk bertahan hidup; 
          setiap hari menghadapi kesulitan dan penderitaan, namun dengan jelas masih ada harapan di mata mereka. 
          Saya merasa terhormat telah diundang untuk memotret anak-anak ini untuk buku pertama saya yang 
          diterbitkan Yayasan Wadah. Saya berharap buku ini akan berfungsi sebagai alat untuk menyebarkan 
          pesan cinta dan kemurahan hati untuk anak-anak di manapun mereka berada."

          <p style="font-size:14px;" > <i>(Tanis Chalopin)</i>

            @endif
      </div>
    </div>

       
  </div>
</section>

</main>
@endsection