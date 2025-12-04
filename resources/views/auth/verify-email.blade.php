<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">

<div class="flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8">

    <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center mb-6">
        <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="mx-auto h-20 w-auto" />
        <h2 class="mt-6 text-2xl font-bold tracking-tight text-black">Verifikasi Email</h2>
    </div>

    <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center mb-6 text-sm text-gray-600">
        Terima kasih telah mendaftar! Sebelum memulai, silakan verifikasi alamat email Anda dengan mengeklik tautan yang telah kami kirimkan. 
        Jika tidak menerima email, kami akan dengan senang hati mengirim yang baru.
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="sm:mx-auto sm:w-full sm:max-w-sm mb-4 p-4 bg-green-100 text-green-700 rounded-md text-sm text-center">
            Tautan verifikasi baru telah dikirim ke alamat email Anda.
        </div>
    @endif

    <div class="sm:mx-auto sm:w-full sm:max-w-sm flex flex-col gap-4">
        
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit"
                class="w-full flex justify-center rounded-md bg-blue-600 px-3 py-2 text-white font-semibold text-sm hover:bg-blue-500 focus:outline-2 focus:outline-offset-2 focus:outline-blue-600">
                Kirim Ulang Email Verifikasi
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="w-full flex justify-center rounded-md bg-gray-200 px-3 py-2 text-black font-semibold text-sm hover:bg-gray-300 focus:outline-2 focus:outline-offset-2 focus:outline-gray-400">
                Keluar
            </button>
        </form>
    </div>

</div>
</body>
