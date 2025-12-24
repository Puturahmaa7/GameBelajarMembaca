@props(['scrolled' => false])

<nav x-data="{ mobileMenuOpen: false }" class="fixed w-full z-50 nav-scroll bg-white transition-all duration-300 {{ $scrolled ? 'nav-scrolled shadow-md' : '' }}">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <div class="shrink-0">
                    <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="h-10" />
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:block ml-10">
                    <div class="flex items-baseline space-x-4">
                        <a href="#beranda" class="rounded-md px-3 py-2 text-sm font-medium {{ $scrolled ? 'text-blue-600 hover:bg-blue-50' : 'text-gray-700 hover:text-blue-600' }} transition-colors">Beranda</a>
                        <a href="#fitur" class="rounded-md px-3 py-2 text-sm font-medium {{ $scrolled ? 'text-blue-600 hover:bg-blue-50' : 'text-gray-700 hover:text-blue-600' }} transition-colors">Fitur</a>
                        <a href="#tentang" class="rounded-md px-3 py-2 text-sm font-medium {{ $scrolled ? 'text-blue-600 hover:bg-blue-50' : 'text-gray-700 hover:text-blue-600' }} transition-colors">Tentang Kami</a>
                        <a href="#kontak" class="rounded-md px-3 py-2 text-sm font-medium {{ $scrolled ? 'text-blue-600 hover:bg-blue-50' : 'text-gray-700 hover:text-blue-600' }} transition-colors">Hubungi Kami</a>
                        <a href="#testimoni" class="rounded-md px-3 py-2 text-sm font-medium {{ $scrolled ? 'text-blue-600 hover:bg-blue-50' : 'text-gray-700 hover:text-blue-600' }} transition-colors">Testimoni</a>
                    </div>
                </div>
            </div>

            <!-- Desktop Auth Buttons -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="{{ route('register') }}" 
                   class="px-4 py-2 text-sm font-medium text-blue-600 bg-white border border-blue-600 rounded-md hover:bg-blue-50 transition-colors">
                    Daftar
                </a>
                <a href="{{ route('login') }}" 
                   class="px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600 transition-colors">
                    Masuk
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        class="hamburger focus:outline-none p-2" 
                        :class="{'active': mobileMenuOpen}">
                    <div class="w-6 space-y-1.5">
                        <span class="block h-0.5 w-full bg-gray-700 hamburger-line"></span>
                        <span class="block h-0.5 w-full bg-gray-700 hamburger-line"></span>
                        <span class="block h-0.5 w-full bg-gray-700 hamburger-line"></span>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <x-mobile-menu :mobileMenuOpen="mobileMenuOpen" />
</nav>

<style>
    .nav-scroll {
        transition: all 0.3s ease;
    }
    
    .nav-scrolled {
        background-color: #3b82f6; /* blue-500 */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    
    .hamburger-line {
        transition: all 0.3s ease;
    }
    
    .hamburger.active .hamburger-line:nth-child(1) {
        transform: rotate(45deg) translate(6px, 6px);
    }
    
    .hamburger.active .hamburger-line:nth-child(2) {
        opacity: 0;
    }
    
    .hamburger.active .hamburger-line:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -6px);
    }
</style>