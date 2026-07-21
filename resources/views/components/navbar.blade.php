<nav x-data="{ 
        isTop: true,
        mobileMenuOpen: false,
        init() {
            this.isTop = window.scrollY < 50;
            window.addEventListener('scroll', () => {
                this.isTop = window.scrollY < 50;
            });
        }
     }"
         :class="isTop 
             ? 'bg-transparent border-transparent' 
             : 'bg-white/70 backdrop-blur-md border-emerald-200/50 shadow-md'"
     class="fixed top-0 left-0 right-0 z-50 border-b transition-all duration-300">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Logo Section -->
            <div class="flex items-center">
                <a href="/" class="flex-shrink-0 flex items-center gap-3">
                    <img src="{{ Storage::url('SMA AL-ISLAMI.png') }}" alt="Logo SMA AL-ISLAMI" class="w-10 h-10 object-contain">
                    <span :class="isTop ? 'text-white' : 'text-emerald-900'" class="font-bold text-xl tracking-tight transition duration-300">SMA AL-ISLAMI</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex md:items-center md:space-x-4">
                
                <!-- Beranda link -->
                <a href="/" 
                   :class="isTop 
                     ? '{{ request()->routeIs('home') ? 'text-emerald-200 font-semibold' : 'text-white/90 hover:text-white' }}' 
                     : '{{ request()->routeIs('home') ? 'text-emerald-700 font-bold' : 'text-gray-700 hover:text-emerald-600' }}'"
                   class="px-3 py-2 rounded-md text-sm font-medium transition duration-200">
                   Beranda
                </a>

                <!-- Dropdown Profil -->
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" 
                            :class="isTop 
                              ? '{{ request()->routeIs('profile') ? 'text-emerald-200 font-semibold' : 'text-white/90 hover:text-white' }}' 
                              : '{{ request()->routeIs('profile') ? 'text-emerald-700 font-bold' : 'text-gray-700 hover:text-emerald-600' }}'"
                            class="px-3 py-2 rounded-md text-sm font-medium flex items-center transition duration-200">
                        Profil
                        <svg :class="isTop ? 'text-white/80' : 'text-gray-500'" class="ml-1 h-4 w-4 transition duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="absolute left-0 mt-2 w-52 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1 focus:outline-none" style="display: none;">
                        <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm font-semibold text-emerald-700 hover:bg-emerald-50 border-b border-gray-100">Profil Sekolah</a>
                        <a href="{{ route('profile') }}#sejarah" class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700">Sejarah & Identitas</a>
                        <a href="{{ route('profile') }}#visi-misi" class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700">Visi & Misi</a>
                        <a href="{{ route('profile') }}#struktur" class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700">Struktur Organisasi</a>
                        <a href="{{ route('profile') }}#fasilitas" class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700">Fasilitas Sekolah</a>
                    </div>
                </div>

                <!-- Dropdown Akademik -->
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" 
                            :class="isTop 
                              ? '{{ request()->routeIs('academic') ? 'text-emerald-200 font-semibold' : 'text-white/90 hover:text-white' }}' 
                              : '{{ request()->routeIs('academic') ? 'text-emerald-700 font-bold' : 'text-gray-700 hover:text-emerald-600' }}'"
                            class="px-3 py-2 rounded-md text-sm font-medium flex items-center transition duration-200">
                        Akademik
                        <svg :class="isTop ? 'text-white/80' : 'text-gray-500'" class="ml-1 h-4 w-4 transition duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="absolute left-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1 focus:outline-none" style="display: none;">
                        <a href="{{ route('academic') }}" class="block px-4 py-2 text-sm font-semibold text-emerald-700 hover:bg-emerald-50 border-b border-gray-100">Akademik Sekolah</a>
                        <a href="{{ route('academic') }}#kurikulum" class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700">Kurikulum Merdeka</a>
                        <a href="{{ route('academic') }}#kalender" class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700">Kalender Akademik</a>
                        <a href="{{ route('academic') }}#guru" class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700">Guru & Tenaga Kependidikan</a>
                    </div>
                </div>

                <!-- Dropdown Kesiswaan -->
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" 
                            :class="isTop 
                              ? '{{ request()->routeIs('kesiswaan') ? 'text-emerald-200 font-semibold' : 'text-white/90 hover:text-white' }}' 
                              : '{{ request()->routeIs('kesiswaan') ? 'text-emerald-700 font-bold' : 'text-gray-700 hover:text-emerald-600' }}'"
                            class="px-3 py-2 rounded-md text-sm font-medium flex items-center transition duration-200">
                        Kesiswaan
                        <svg :class="isTop ? 'text-white/80' : 'text-gray-500'" class="ml-1 h-4 w-4 transition duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="absolute left-0 mt-2 w-52 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1 focus:outline-none" style="display: none;">
                        <a href="{{ route('kesiswaan') }}" class="block px-4 py-2 text-sm font-semibold text-emerald-700 hover:bg-emerald-50 border-b border-gray-100">Kesiswaan</a>
                        <a href="{{ route('kesiswaan') }}#ekskul" class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700">Ekstrakurikuler</a>
                        <a href="{{ route('kesiswaan') }}#prestasi" class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700">Prestasi Siswa</a>
                    </div>
                </div>

                <!-- Regular Links -->
                <a href="{{ route('articles.index') }}" 
                   :class="isTop 
                     ? '{{ request()->routeIs('articles.*') ? 'text-emerald-200 font-semibold' : 'text-white/90 hover:text-white' }}' 
                     : '{{ request()->routeIs('articles.*') ? 'text-emerald-700 font-bold' : 'text-gray-700 hover:text-emerald-600' }}'"
                   class="px-3 py-2 rounded-md text-sm font-medium transition duration-200">
                   Berita
                </a>
                <a href="{{ route('contact') }}" 
                   :class="isTop 
                     ? '{{ request()->routeIs('contact') ? 'text-emerald-200 font-semibold' : 'text-white/90 hover:text-white' }}' 
                     : '{{ request()->routeIs('contact') ? 'text-emerald-700 font-bold' : 'text-gray-700 hover:text-emerald-600' }}'"
                   class="px-3 py-2 rounded-md text-sm font-medium transition duration-200">
                   Kontak
                </a>
                <a href="{{ route('downloads.index') }}" 
                   :class="isTop 
                     ? '{{ request()->routeIs('downloads.*') ? 'text-emerald-200 font-semibold' : 'text-white/90 hover:text-white' }}' 
                     : '{{ request()->routeIs('downloads.*') ? 'text-emerald-700 font-bold' : 'text-gray-700 hover:text-emerald-600' }}'"
                   class="px-3 py-2 rounded-md text-sm font-medium transition duration-200">
                   Download
                </a>

                <!-- SPMB Button CTA -->
                                <a href="{{ route('spmb.index') }}" 
                                     :class="isTop 
                                         ? 'bg-white text-emerald-900 hover:bg-emerald-50 border border-transparent shadow' 
                                         : 'bg-emerald-600 text-white hover:bg-emerald-700 shadow-sm'"
                                     class="modern-btn modern-btn-primary ml-4 px-5 py-2.5 text-xs uppercase tracking-wider">
                    Portal SPMB
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" 
                        :class="isTop ? 'text-white hover:bg-white/10' : 'text-gray-600 hover:text-emerald-600 hover:bg-gray-100'"
                        class="inline-flex items-center justify-center p-2 rounded-md focus:outline-none transition">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed -->
                    <svg x-show="!mobileMenuOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon when menu is open -->
                    <svg x-show="mobileMenuOpen" style="display: none;" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-transition class="md:hidden border-t bg-white/95 backdrop-blur-lg border-emerald-100" style="display: none;">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="/" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'text-emerald-700 bg-emerald-50' : 'text-gray-700 hover:text-emerald-600 hover:bg-emerald-50' }}">Beranda</a>
            <a href="{{ route('profile') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('profile') ? 'text-emerald-700 bg-emerald-50' : 'text-gray-700 hover:text-emerald-600 hover:bg-emerald-50' }}">Profil</a>
            <a href="{{ route('academic') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('academic') ? 'text-emerald-700 bg-emerald-50' : 'text-gray-700 hover:text-emerald-600 hover:bg-emerald-50' }}">Akademik</a>
            <a href="{{ route('kesiswaan') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('kesiswaan') ? 'text-emerald-700 bg-emerald-50' : 'text-gray-700 hover:text-emerald-600 hover:bg-emerald-50' }}">Kesiswaan</a>
            <a href="{{ route('articles.index') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('articles.*') ? 'text-emerald-700 bg-emerald-50' : 'text-gray-700 hover:text-emerald-600 hover:bg-emerald-50' }}">Berita</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('contact') ? 'text-emerald-700 bg-emerald-50' : 'text-gray-700 hover:text-emerald-600 hover:bg-emerald-50' }}">Kontak</a>
            <a href="{{ route('downloads.index') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('downloads.*') ? 'text-emerald-700 bg-emerald-50' : 'text-gray-700 hover:text-emerald-600 hover:bg-emerald-50' }}">Download</a>
            <a href="{{ route('spmb.index') }}" class="modern-btn modern-btn-primary w-full mt-4 px-3 py-2 text-center text-base uppercase tracking-wider">Portal SPMB</a>
        </div>
    </div>
</nav>
