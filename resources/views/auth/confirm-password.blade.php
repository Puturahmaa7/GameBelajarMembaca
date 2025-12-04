<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Password</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">

<div class="flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8">

    <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
        <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="mx-auto h-20 w-auto" />
        <h2 class="mt-6 text-2xl font-bold tracking-tight text-black">Konfirmasi Password</h2>
    </div>

    <div class="sm:mx-auto sm:w-full sm:max-w-sm mt-6">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}" class="space-y-6">
            @csrf

            <div>
                <label for="password" class="block text-sm font-medium text-black">Password</label>
                <input id="password" type="password" name="password" required
                       autocomplete="current-password"
                       placeholder="Masukkan password Anda"
                       class="block w-full rounded-md bg-white/5 px-3 py-2 text-black placeholder-gray-500 focus:outline-2 focus:outline-offset-0 focus:outline-blue-600 sm:text-sm mt-1">
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-500" />
            </div>

            <div>
                <button type="submit"
                        class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-2 text-white font-semibold text-sm hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                    Konfirmasi
                </button>
            </div>
        </form>
    </div>

</div>
</body>
