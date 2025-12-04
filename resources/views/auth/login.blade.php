<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">

<div class="flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8">

  <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
    <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="mx-auto h-20 w-auto" />
    <h2 class="mt-6 text-2xl font-bold tracking-tight text-black">Masuk ke Akun Anda</h2>
  </div>

  <div class="sm:mx-auto sm:w-full sm:max-w-sm mt-6">
    <form action="{{ route('login') }}" method="POST" class="space-y-6">
      @csrf

      <div>
        <label for="email" class="block text-sm font-medium text-black">Email</label>
        <div class="mt-1">
          <input id="email" name="email" type="email" required autofocus placeholder="Masukkan email Anda"
            class="block w-full rounded-md bg-white/5 px-3 py-2 text-black placeholder-gray-500 focus:outline-2 focus:outline-offset-0 focus:outline-blue-600 sm:text-sm">
        </div>
        <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" />
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-black">Password</label>
        <div class="mt-1">
          <input id="password" name="password" type="password" required placeholder="Masukkan password Anda"
            class="block w-full rounded-md bg-white/5 px-3 py-2 text-black placeholder-gray-500 focus:outline-2 focus:outline-offset-0 focus:outline-blue-600 sm:text-sm">
        </div>
        <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-500" />
      </div>
      
    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="remember" class="ml-2 block text-sm text-black">Ingat saya</label>
        </div>
        <div class="text-sm">
            <a href="{{ route('password.request') }}" class="font-semibold text-blue-500 hover:text-blue-300">
                Lupa password?
            </a>
        </div>
    </div>
      
      <div>
        <button type="submit"
          class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-2 text-white font-semibold text-sm hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
          Masuk
        </button>
      </div>
    </form>

    <p class="mt-6 text-center text-sm text-black-300">
      Belum punya akun?
      <a href="{{ route('register') }}" class="font-semibold text-blue-500 hover:text-blue-300">Daftar sekarang</a>
    </p>
  </div>

</div>
</body>
