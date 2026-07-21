<x-app-layout>
    <!-- Hero Slider -->
    <div class="relative bg-slate-900 h-[80vh] overflow-hidden">
        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=1920&q=80" alt="Hero Background" class="absolute inset-0 w-full h-full object-cover opacity-40">
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto z-10">
                <p class="text-blue-500 font-bold tracking-widest uppercase text-sm mb-4">Penerimaan Siswa Baru 2026/2027</p>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white mb-6 leading-tight">
                    Unggul, Islami, Kompetitif, dan Profesional
                </h1>
                <p class="text-xl text-gray-300 mb-10 max-w-2xl mx-auto">
                    Mewujudkan generasi emas yang berkarakter, terampil di bidang vokasi, dan siap bersaing di dunia industri.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('spmb.index') }}" class="inline-flex justify-center items-center px-8 py-3 border border-transparent text-base font-bold rounded-sm text-white bg-blue-600 hover:bg-blue-700 transition shadow-lg uppercase tracking-wider">
                        Daftar SPMB
                        <svg class="ml-2 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="{{ route('profile') }}" class="inline-flex justify-center items-center px-8 py-3 border-2 border-white/50 text-base font-bold rounded-sm text-white hover:bg-white hover:text-slate-900 transition shadow-sm uppercase tracking-wider">
                        Jelajahi Profil
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Informasi Terbaru -->
    <div class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-slate-900"><span class="text-blue-600">Informasi</span> Terbaru</h2>
                <div class="mt-4 w-16 h-1 bg-blue-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($latestArticles as $article)
                <!-- News Card -->
                <div class="bg-white shadow-sm overflow-hidden group border border-gray-100 hover:shadow-xl transition-all duration-300">
                    <div class="aspect-w-16 aspect-h-10 relative overflow-hidden">
                        <img src="{{ $article->image ?? 'https://images.unsplash.com/photo-1546410531-bea5aadcb6ce?auto=format&fit=crop&w=600&q=80' }}" alt="{{ $article->title }}" class="w-full h-56 object-cover transform group-hover:scale-105 transition duration-500">
                        <div class="absolute top-0 left-0 bg-blue-600 text-white text-xs font-bold px-3 py-1 uppercase tracking-wider mt-4">
                            Berita
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-xs text-gray-500 mb-3 flex items-center">
                            <svg class="w-4 h-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            {{ $article->published_at ? $article->published_at->format('d M Y') : $article->created_at->format('d M Y') }}
                        </p>
                        <h3 class="text-lg font-bold text-slate-900 mb-3 line-clamp-2 group-hover:text-blue-600 transition">
                            <a href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            {{ Str::limit(strip_tags($article->content), 100) }}
                        </p>
                        <a href="{{ route('articles.show', $article->slug) }}" class="inline-block mt-2 text-slate-900 font-bold text-sm uppercase tracking-wider hover:text-blue-600 transition flex items-center">
                            Selengkapnya
                            <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-span-3 text-center text-gray-500 py-10">Belum ada berita terbaru.</div>
                @endforelse
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('articles.index') }}" class="inline-flex justify-center items-center px-8 py-3 border-2 border-blue-600 text-sm font-bold uppercase tracking-wider text-blue-600 bg-transparent hover:bg-blue-600 hover:text-white transition">
                    Lihat Semua Berita
                </a>
            </div>
        </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <p class="text-sm text-gray-500 mb-2">15 Mei 2026</p>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 hover:text-blue-600">
                            <a href="#">Pendaftaran SPMB Gelombang 1 Resmi Dibuka</a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            Madrasah Tsanawiyah Negeri Nusantara telah resmi membuka pendaftaran bagi calon peserta didik baru untuk tahun ajaran 2026/2027. Proses seleksi menggunakan sistem online.
                        </p>
                        <div class="mt-auto">
                            <a href="#" class="text-blue-600 font-semibold text-sm hover:text-blue-700 flex items-center">
                                Baca selengkapnya
                                <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- News Card 2 -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition flex flex-col">
                    <div class="aspect-w-16 aspect-h-9 relative">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Berita 2" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4 bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow">
                            Prestasi
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <p class="text-sm text-gray-500 mb-2">10 Mei 2026</p>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 hover:text-blue-600">
                            <a href="#">Tim Robotik MTsN Nusantara Raih Emas Nasional</a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            Sebuah kebanggaan luar biasa, tim ekstrakurikuler robotik madrasah kita berhasil meraih medali emas pada kompetisi robotik pelajar tingkat nasional di Jakarta.
                        </p>
                        <div class="mt-auto">
                            <a href="#" class="text-blue-600 font-semibold text-sm hover:text-blue-700 flex items-center">
                                Baca selengkapnya
                                <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- News Card 3 -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition flex flex-col">
                    <div class="aspect-w-16 aspect-h-9 relative">
                        <img src="https://images.unsplash.com/photo-1606761568499-6d2451b23c66?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Berita 3" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow">
                            Kegiatan
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <p class="text-sm text-gray-500 mb-2">5 Mei 2026</p>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 hover:text-blue-600">
                            <a href="#">Pesantren Kilat Ramadhan Perkuat Karakter Siswa</a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            Dalam rangka mengisi bulan suci Ramadhan, seluruh siswa mengikuti program pesantren kilat yang berfokus pada tahsin Quran dan pembentukan akhlak mulia.
                        </p>
                        <div class="mt-auto">
                            <a href="#" class="text-blue-600 font-semibold text-sm hover:text-blue-700 flex items-center">
                                Baca selengkapnya
                                <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</x-app-layout>
