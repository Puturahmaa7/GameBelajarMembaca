<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">

<div class="flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8">

  <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
    <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="mx-auto h-20 w-auto" />
    <h2 class="mt-6 text-2xl font-bold tracking-tight text-black">Buat Akun Baru</h2>
  </div>

  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="{{ route('register') }}" method="POST" class="space-y-6">
      @csrf

      <div>
        <label for="name" class="block text-sm font-medium text-black">Nama Lengkap</label>
        <div class="mt-1">
          <input id="name" name="name" type="text" required autofocus autocomplete="name" placeholder="Masukkan nama Anda"
            class="block w-full rounded-md bg-white/5 px-3 py-2 text-white placeholder-gray-500 focus:outline-2 focus:outline-offset-0 focus:outline-blue-600 sm:text-sm">
        </div>
        <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-red-500" />
      </div>
      
      <div>
        <label for="email" class="block text-sm font-medium text-black">Email</label>
        <div class="mt-1">
          <input id="email" name="email" type="email" required autocomplete="email" placeholder="Masukkan email Anda"
            class="block w-full rounded-md bg-white/5 px-3 py-2 text-white placeholder-gray-500 focus:outline-2 focus:outline-offset-0 focus:outline-blue-600 sm:text-sm">
        </div>
        <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" />
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-black">Password</label>
        <div class="mt-1">
          <input id="password" name="password" type="password" required autocomplete="new-password" placeholder="Masukkan password Anda"
            class="block w-full rounded-md bg-white/5 px-3 py-2 text-white placeholder-gray-500 focus:outline-2 focus:outline-offset-0 focus:outline-blue-600 sm:text-sm">
        </div>
        <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-500" />
      </div>

      <div>
        <label for="password_confirmation" class="block text-sm font-medium text-black">Konfirmasi Password</label>
        <div class="mt-1">
          <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password" placeholder="Masukkan ulang password Anda"
            class="block w-full rounded-md bg-white/5 px-3 py-2 text-white placeholder-gray-500 focus:outline-2 focus:outline-offset-0 focus:outline-blue-600 sm:text-sm">
        </div>
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-500" />
      </div>

      <div>
        <button type="submit"
          class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-2 text-white font-semibold text-sm hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
          Daftar
        </button>
      </div>
    </form>

    <p class="mt-6 text-center text-sm text-black-300">
      Sudah punya akun?
      <a href="{{ route('login') }}" class="font-semibold text-blue-500 hover:text-blue-300">Masuk di sini</a>
    </p>
  </div>

</div>
</body>
