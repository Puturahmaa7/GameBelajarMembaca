<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">

<div class="flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8">

    <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
        <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="mx-auto h-20 w-auto" />
        <h2 class="mt-6 text-2xl font-bold tracking-tight text-black">Lupa Password</h2>
        <p class="mt-6 text-sm text-gray-600">
            Masukkan email Anda dan kami akan mengirimkan tautan reset password.
        </p>
    </div>

    <div class="sm:mx-auto sm:w-full sm:max-w-sm mt-2">

        <div class="mb-4 text-sm text-green-600">
            {{ session('status') }}
        </div>

        <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-black">Email</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" required autofocus placeholder="Masukkan email Anda"
                        class="block w-full rounded-md bg-white/5 px-3 py-2 text-black placeholder-gray-500 focus:outline-2 focus:outline-offset-0 focus:outline-blue-600 sm:text-sm">
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" />
            </div>

            <div>
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-2 text-white font-semibold text-sm hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                    Kirim Tautan Reset Password
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm text-gray-600">
            Kembali ke <a href="{{ route('login') }}" class="font-semibold text-blue-500 hover:text-blue-300">Login</a>
        </p>
    </div>

</div>
</body>
