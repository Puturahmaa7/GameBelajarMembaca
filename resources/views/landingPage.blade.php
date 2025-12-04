<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game Belajar Membaca</title>
</head>
<body class="bg-black-50 text-black-700">

    <nav class="w-full px-8 py-4 flex justify-between items-center bg-blue-50 shadow-sm">
        <div>
          <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="h-10">
        </div>

        <ul class="hidden md:flex gap-6">
            <li><a href="#beranda" class="hover:text-blue-600">Beranda</a></li>
            <li><a href="#fitur" class="hover:text-blue-600">Fitur</a></li>
            <li><a href="#tentang" class="hover:text-blue-600">Tentang Kami</a></li>
            <li><a href="#kontak" class="hover:text-blue-600">Hubungi Kami</a></li>
            <li><a href="#testimoni" class="hover:text-blue-600">Testimoni</a></li>
        </ul>

        <div class="flex gap-4 items-center">
          <a href="{{ route('register') }}" 
            class="px-4 py-2 bg-white text-black rounded-lg
                    hover:bg-blue-600 hover:text-white transition">
            Daftar
          </a>

          <a href="{{ route('login') }}" 
            class="px-4 py-2 bg-white text-black rounded-lg
                    hover:bg-blue-600 hover:text-white transition">
            Masuk
          </a>
        </div>

    </nav>

    <section id="beranda" class="px-8 lg:px-32 py-10 grid lg:grid-cols-2 gap-10">
        <div>
            <p class="mt-4 text-sm text-gray-600">
                Selamat datang di platform edukasi interaktif untuk anak-anak!
            </p>
            <h1 class="text-4xl font-extrabold leading-snug">
                BELAJAR HURUF, SUKU KATA, DAN KATA
                <br />
                DENGAN SUARA DAN KUIS SERU!
            </h1>

            <p class="mt-4 text-sm text-gray-600">
                Platform edukasi yang membantu anak belajar huruf, suku kata, dan kata dengan cara yang seru dan mudah dipahami. Kami mendampingi anak belajar membaca dari nol melalui tampilan huruf yang menarik, suara otomatis yang berulang, dan kuis interaktif yang melatih pengenalan huruf hingga kata.
            </p>

            <a href="#" 
              class="inline-block mt-6 bg-white text-blue-600 border border-blue-600 
                      px-6 py-3 rounded-lg
                      hover:bg-blue-600 hover:text-white hover:border-blue-600
                      transition">
                Belajar Sekarang
            </a>

        </div>

        <div class="flex justify-end"> 
          <img src="{{ asset('images/KidsLearning.png') }}" 
          class="w-140 object-cover rounded-xl"> 
        </div>
    </section>
    
    <section id="fitur" class="pt-8 lg:px-32 py-12 text-center bg-blue-50 shadow-sm">
        <h2 class="text-xl md:text-2xl font-semibold mb-2">Fitur</h2>
        <p class="mt-3 text-sm max-w-xl mx-auto">
            Aplikasi belajar membaca yang dirancang khusus untuk anak dengan tampilan ramah anak dan interaktif, sehingga proses belajar terasa menyenangkan seperti bermain.
        </p>

        <div class="mt-8 grid md:grid-cols-3 gap-6">
            <!-- Item Huruf -->
            <div>
                <div class="flex justify-center">
                    <img src="{{ asset('images/Huruf.png') }}" class="w-20 object-cover rounded-xl" alt="Gambar">
                </div>
                <h3 class="mt-2 font-semibold text-base">Huruf</h3>
                <p class="mt-1 text-xs">
                    Belajar huruf A-Z dengan suara pelafalan yang jelas dan ilustrasi menarik. Anak dapat mengenali huruf sambil mendengar dan menirukan bunyinya.
                </p>
            </div>

            <!-- Item Suku Kata -->
            <div>
                <div class="flex justify-center">
                    <img src="{{ asset('images/SukuKata.png') }}" class="w-20 object-cover rounded-xl" alt="Gambar">
                </div>
                <h3 class="mt-2 font-semibold text-base">Suku Kata</h3>
                <p class="mt-1 text-xs">
                    Belajar membaca suku kata dengan cara menyenangkan. Anak mendengar huruf dan menyusun suku kata untuk memahami dasar membaca lebih cepat.
                </p>
            </div>

            <!-- Item Kata -->
            <div>
                <div class="flex justify-center">
                    <img src="{{ asset('images/Kata.png') }}" class="w-20 object-cover rounded-xl" alt="Gambar">
                </div>
                <h3 class="mt-2 font-semibold text-base">Kata</h3>
                <p class="mt-1 text-xs">
                    Belajar membaca kata dengan huruf, gambar, dan audio. Anak dapat mengenali kata sambil melihat visual dan mendengar cara pengucapannya.
                </p>
            </div>
        </div>
    </section>

    <section id="tentang" class="pt-2 lg:px-32 py-20 text-center bg-white  shadow-sm">
      <h2 class="text-3xl font-semibold mb-6 text-center mt-8">Tentang Kami</h2>

      <div class="pt-3 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

        <div class="text-left">
          <p class="text-sm leading-relaxed">
            ABC Fun Land adalah platform game edukasi yang dirancang untuk membantu anak belajar membaca dengan metode yang menyenangkan, interaktif, dan mudah dipahami. Aplikasi ini berfokus pada konsep 
            <strong>Digital Edutainment</strong>, yaitu menggabungkan pembelajaran dengan unsur hiburan agar proses belajar terasa seperti bermain.
          </p>

          <p class="mt-4 text-sm leading-relaxed">
            Dengan visual yang menarik, audio pelafalan yang jelas, serta mini kuis pendukung, ABC Fun Land membantu orang tua dan pendidik menciptakan pengalaman belajar membaca yang 
            <strong>efektif</strong> dan <strong>ramah anak</strong>.
          </p>
        </div>

        <div class="flex justify-center">
          <img 
            src="{{ asset('images/Logo.png') }}" 
            class="w-120 object-contain"
            alt="Logo ABC Fun Land"
          >
        </div>
      </div>

      <h2 class="text-2xl font-semibold mb-7 mt-7 text-center">Founders</h2>
      <div class="grid md:grid-cols-4 gap-6">
            
            <div class="bg-blue-50 p-6 rounded-2xl shadow-md">
                <img 
                  src="{{ asset('images/Profile.png') }}" 
                  class="w-30 h-30 rounded-full mx-auto object-cover"
                >

                <h3 class="font-semibold text-lg mt-4 text-left">Nama Founder</h3>
                <p class="text-sm text-gray-600 text-left font-medium">Role Founder</p>
            </div>

            <div class="bg-blue-50 p-6 rounded-2xl shadow-md">
                <img 
                  src="{{ asset('images/Profile.png') }}" 
                  class="w-30 h-30 rounded-full mx-auto object-cover"
                >  
                <h3 class="font-semibold text-lg mt-4 text-left">Nama Founder</h3>
                <p class="text-sm text-gray-600 text-left font-medium">Role Founder</p>
            </div>

            <div class="bg-blue-50 p-6 rounded-2xl shadow-md">
                <img 
                  src="{{ asset('images/Profile.png') }}" 
                  class="w-30 h-30 rounded-full mx-auto object-cover"
                >
                <h3 class="font-semibold text-lg mt-4 text-left">Nama Founder</h3>
                <p class="text-sm text-gray-600 text-left font-medium">Role Founder</p>
            </div>

            <div class="bg-blue-50 p-6 rounded-2xl shadow-md">
                <img 
                  src="{{ asset('images/Profile.png') }}" 
                  class="w-30 h-30 rounded-full mx-auto object-cover"
                >
                <h3 class="font-semibold text-lg mt-4 text-left">Nama Founder</h3>
                <p class="text-sm text-gray-600 text-left font-medium">Role Founder</p>
            </div>

        </div>

    </section>

   <section id="kontak" class="pt-15 lg:px-32 text-center bg-blue-50 shadow-sm pb-13 py-10">
        <h2 class=" text-3xl font-semibold">Hubungi Kami</h2>
        <p class="mt-7 text-sm max-w-xl mx-auto mb-7">
           Butuh bantuan atau punya pertanyaan? Tim kami siap membantu kapan saja. Silakan hubungi kami melalui kontak berikut.
        </p>

      <div class="pl-10 pr-10 grid md:grid-cols-3 gap-6 pb-10">

          <div class="bg-white p-6 rounded-2xl shadow-md flex flex-col items-center text-center">
              <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center mb-3">
                  <img src="{{ asset('images/Whatsapp.png') }}" class="w-9 h-9 opacity-80">
              </div>
              <h3 class="font-semibold text-gray-800 text-lg">Telepon</h3>
              <p class="text-sm text-gray-600 mt-1">
                  Jika membutuhkan respon cepat, hubungi kami melalui telepon.
              </p>
              <p class="font-semibold text-sm text-gray-600 mt-1">
                  (+62) 812-3456-7890
              </p>
          </div>

          <div class="bg-white p-6 rounded-2xl shadow-md flex flex-col items-center text-center">
              <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center mb-3">
                  <img src="{{ asset('images/Gmail.png') }}" class="w-8 h-8 opacity-80">
              </div>
              <h3 class="font-semibold text-gray-800 text-lg">Email</h3>
              <p class="text-sm text-gray-600 mt-1">
                  Untuk pertanyaan umum, kerja sama, atau dukungan teknis, kirim pesan ke:
              </p>
              <p class="font-semibold text-sm text-gray-600 mt-1">
                  ABCFunLand@edu.ac.id
              </p>
          </div>

          <div class="bg-white p-6 rounded-2xl shadow-md flex flex-col items-center text-center">
              <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center mb-3">
                  <img src="{{ asset('images/Alamat.png') }}" class="w-8 h-8 opacity-80">
              </div>
              <h3 class="font-semibold text-gray-800 text-lg">Alamat</h3>
              <p class="text-sm text-gray-600 mt-1">
                  Kunjungi kantor kami untuk konsultasi langsung:
              </p>
              <p class="font-semibold text-sm text-gray-600 mt-1 text-center">
                  Jl. Raya Kampus Udayana, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361
              </p>
          </div>

      </div>
    </section>

    <section id="testimoni" class="px-8 lg:px-32 bg-white text-center pb-15 py-10">
        <h2 class="text-2xl font-semibold mb-6">Testimoni</h2>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach (range(1,3) as $i)
            <div class="p-6 rounded-xl shadow bg-gray-50">
                <div class="flex gap-1 justify-center mb-3">
                    @foreach (range(1,5) as $star)
                    ⭐
                    @endforeach
                </div>
                <p class="text-sm italic">“Definitely one of the best platform!”</p>
                <p class="text-xs mt-2 text-gray-500">Jack Smith</p>
            </div>
            @endforeach
        </div>
    </section>

    <footer class="py-5 text-center bg-blue-50 text-sm">
        <div class="flex justify-center">
            <img src="{{ asset('images/Logo.png') }}" 
                class="h-20 object-cover rounded-xl" 
                alt="Gambar">
        </div>

        <div class="flex justify-center gap-4 mt-4">
            <span>
              <img src="{{ asset('images/Whatsapp.png') }}" 
                class="w-7 object-cover rounded-xl" >
            </span>
            <span>
              <img src="{{ asset('images/Gmail.png') }}" 
                class="w-7 object-cover rounded-xl" >
            </span>
            <span>
              <img src="{{ asset('images/Alamat.png') }}" 
                class="w-7 object-cover rounded-xl" >
            </span>
        </div>
        <p class="mt-4 text-xs text-gray-500">
            ©2024 ABCFunLand | All Rights Reserved.
        </p>
    </footer>
</body>
</html>