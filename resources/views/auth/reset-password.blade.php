<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">

<div class="flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8">

    <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center mb-6">
        <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="mx-auto h-20 w-auto" />
        <h2 class="mt-6 text-2xl font-bold tracking-tight text-black">Reset Password</h2>
    </div>
    
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <form method="POST" action="{{ route('password.store') }}" class="space-y-6">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div>
                <label for="email" class="block text-sm font-medium text-black">Email</label>
                <input id="email" type="email" name="email" required
                    value="{{ old('email', $request->email) }}"
                    class="block w-full rounded-md bg-gray-100 px-3 py-2 text-gray-700 sm:text-sm mt-1 cursor-not-allowed"
                    readonly>
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" />
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-black mt-4">Password Baru</label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                       class="block w-full rounded-md bg-white/5 px-3 py-2 text-black placeholder-gray-500 focus:outline-2 focus:outline-offset-0 focus:outline-blue-600 sm:text-sm mt-1">
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-500" />
            </div>
            
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-black mt-4">Konfirmasi Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                       class="block w-full rounded-md bg-white/5 px-3 py-2 text-black placeholder-gray-500 focus:outline-2 focus:outline-offset-0 focus:outline-blue-600 sm:text-sm mt-1">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-500" />
            </div>

            <div>
                <button type="submit"
                        class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-2 text-white font-semibold text-sm hover:bg-blue-500 focus:outline-2 focus:outline-offset-2 focus:outline-blue-600 mt-4">
                    Reset Password
                </button>
            </div>
        </form>
    </div>

</div>
</body>
