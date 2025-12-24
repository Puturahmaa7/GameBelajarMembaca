@props(['mobileMenuOpen' => false])

<!-- Mobile Menu Overlay -->
<div x-show="{{ $mobileMenuOpen }}" 
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     class="fixed inset-0 bg-black/50 z-40 md:hidden" 
     @click="{{ $mobileMenuOpen }} = false">
</div>

<!-- Mobile Menu Content -->
<div x-show="{{ $mobileMenuOpen }}" 
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="-translate-x-full"
     x-transition:enter-end="translate-x-0"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="translate-x-0"
     x-transition:leave-end="-translate-x-full"
     class="fixed top-0 left-0 w-64 h-full bg-white z-50 shadow-lg md:hidden mobile-menu"
     :class="{'active': {{ $mobileMenuOpen }}}">
    
    <div class="h-full overflow-y-auto">
        <!-- Mobile Menu Header -->
        <div class="flex items-center justify-between p-4 border-b">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="h-8" />
            <button @click="{{ $mobileMenuOpen }} = false" class="text-gray-600 hover:text-gray-900 p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        <!-- Mobile Navigation Links -->
        <div class="p-4">
            <a href="#beranda" @click="{{ $mobileMenuOpen }} = false" 
               class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-md mb-1">
                Beranda
            </a>
            <a href="#fitur" @click="{{ $mobileMenuOpen }} = false"
               class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-md mb-1">
                Fitur
            </a>
            <a href="#tentang" @click="{{ $mobileMenuOpen }} = false"
               class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-md mb-1">
                Tentang Kami
            </a>
            <a href="#kontak" @click="{{ $mobileMenuOpen }} = false"
               class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-md mb-1">
                Hubungi Kami
            </a>
            <a href="#testimoni" @click="{{ $mobileMenuOpen }} = false"
               class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-md mb-1">
                Testimoni
            </a>
            
            <!-- Mobile Auth Buttons -->
            <div class="mt-8 pt-6 border-t border-gray-200">
                <a href="{{ route('register') }}" @click="{{ $mobileMenuOpen }} = false"
                   class="block w-full text-center py-3 px-4 text-blue-600 border border-blue-600 rounded-md hover:bg-blue-50 mb-3">
                    Daftar
                </a>
                <a href="{{ route('login') }}" @click="{{ $mobileMenuOpen }} = false"
                   class="block w-full text-center py-3 px-4 text-white bg-blue-500 rounded-md hover:bg-blue-600">
                    Masuk
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .mobile-menu {
        transition: transform 0.3s ease;
        transform: translateX(-100%);
    }
    
    .mobile-menu.active {
        transform: translateX(0);
    }
</style>