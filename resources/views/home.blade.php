<x-app-layout>
    <!-- Hero Slider -->
    <div x-data="{ 
            activeSlide: 0, 
            slides: [
                { 
                    tagline: 'Penerimaan Siswa Baru 2026/2027', 
                    title: 'Unggul, Islami, Kompetitif, dan Profesional', 
                    description: 'Mewujudkan generasi emas yang berkarakter, terampil di bidang vokasi, dan siap bersaing di dunia industri.',
                    bgImage: 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1920&q=80',
                    primaryBtnText: 'Daftar SPMB',
                    primaryBtnUrl: '{{ route('spmb.index') }}',
                    secondaryBtnText: 'Jelajahi Profil',
                    secondaryBtnUrl: '{{ route('profile') }}'
                },
                { 
                    tagline: 'Fasilitas Vokasi Modern', 
                    title: 'Kurikulum Berbasis Industri & Teknologi', 
                    description: 'Menyediakan sarana laboratorium praktik tercanggih guna mempersiapkan lulusan yang siap kerja dan berwirausaha.',
                    bgImage: 'https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1920&q=80',
                    primaryBtnText: 'Info Akademik',
                    primaryBtnUrl: '#',
                    secondaryBtnText: 'Hubungi Kami',
                    secondaryBtnUrl: '{{ route('contact') }}'
                },
                { 
                    tagline: 'Prestasi & Ekstrakurikuler', 
                    title: 'Mengembangkan Potensi Terbaik Siswa', 
                    description: 'Membina minat, bakat, keagamaan, serta karakter kepemimpinan siswa melalui segudang prestasi nasional.',
                    bgImage: 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1920&q=80',
                    primaryBtnText: 'Lihat Berita',
                    primaryBtnUrl: '{{ route('articles.index') }}',
                    secondaryBtnText: 'Unduhan Brosur',
                    secondaryBtnUrl: '{{ route('downloads.index') }}'
                }
            ],
            next() {
                this.activeSlide = (this.activeSlide + 1) % this.slides.length;
            },
            prev() {
                this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length;
            },
            init() {
                setInterval(() => {
                    this.next();
                }, 6000);
            }
         }"
         class="relative bg-slate-900 h-[70vh] sm:h-[80vh] overflow-hidden">
        
        <!-- Slides Wrapper -->
        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="activeSlide === index"
                 x-transition:enter="transition ease-out duration-1000"
                 x-transition:enter-start="opacity-0 scale-105"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-500"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="absolute inset-0 w-full h-full">
                
                <!-- Background Image -->
                <img :src="slide.bgImage" :alt="slide.title" class="absolute inset-0 w-full h-full object-cover opacity-40 select-none">
                
                <!-- Content Overlay -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto z-10">
                        <p x-text="slide.tagline" class="text-emerald-300 font-bold tracking-widest uppercase text-xs sm:text-sm mb-3 sm:mb-4 drop-shadow-md"></p>
                        <h1 x-text="slide.title" class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-white mb-4 sm:mb-6 leading-tight drop-shadow-lg"></h1>
                        <p x-text="slide.description" class="text-base sm:text-xl text-gray-200 mb-8 sm:mb-10 max-w-2xl mx-auto drop-shadow-md"></p>
                        
                        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center items-center">
                            <a :href="slide.primaryBtnUrl" class="modern-btn modern-btn-primary w-full sm:w-auto px-8 py-3 uppercase tracking-wider text-sm sm:text-base">
                                <span x-text="slide.primaryBtnText"></span>
                                <svg class="ml-2 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                            <a :href="slide.secondaryBtnUrl" class="modern-btn modern-btn-secondary w-full sm:w-auto px-8 py-3 uppercase tracking-wider text-sm sm:text-base">
                                <span x-text="slide.secondaryBtnText"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </template>

        <!-- Slider Controls (Arrows) -->
        <button @click="prev()" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white p-2 rounded-full transition z-20 focus:outline-none hidden sm:flex items-center justify-center">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button @click="next()" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white p-2 rounded-full transition z-20 focus:outline-none hidden sm:flex items-center justify-center">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <!-- Slider Indicators (Dots) -->
        <div class="absolute bottom-6 left-0 right-0 flex justify-center space-x-2.5 z-20">
            <template x-for="(slide, index) in slides" :key="index">
                <button @click="activeSlide = index" 
                        class="w-3 h-3 rounded-full transition-all duration-300 focus:outline-none"
                        :class="activeSlide === index ? 'bg-emerald-500 scale-125' : 'bg-white/50 hover:bg-white/80'"></button>
            </template>
        </div>
    </div>

    <!-- Tautan Cepat (Shortcuts) -->
    <div class="relative z-20 -mt-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="modern-card modern-card-soft modern-card-hover p-6 md:p-8 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            
            <!-- Shortcut 1: SPMB -->
            <a href="{{ route('spmb.index') }}" class="modern-card modern-card-hover flex flex-col items-center text-center p-4 group">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mb-3 group-hover:bg-emerald-600 group-hover:text-white transition duration-300">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                </div>
                <span class="text-xs sm:text-sm font-bold text-gray-800 group-hover:text-emerald-600 transition">Daftar SPMB</span>
                <span class="text-[10px] text-gray-400 mt-1 hidden sm:block">Penerimaan Siswa Baru</span>
            </a>

            <!-- Shortcut 2: Alur Pendaftaran -->
            <a href="{{ route('spmb.index') }}#alur-pendaftaran" class="modern-card modern-card-hover flex flex-col items-center text-center p-4 group">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mb-3 group-hover:bg-emerald-600 group-hover:text-white transition duration-300">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5h6M9 9h6M9 13h3m8 0a8 8 0 11-16 0 8 8 0 0116 0z" />
                    </svg>
                </div>
                <span class="text-xs sm:text-sm font-bold text-gray-800 group-hover:text-emerald-600 transition">Alur Pendaftaran</span>
                <span class="text-[10px] text-gray-400 mt-1 hidden sm:block">Langkah dan prosedur daftar</span>
            </a>

            <!-- Shortcut 3: Profil -->
            <a href="{{ route('profile') }}" class="modern-card modern-card-hover flex flex-col items-center text-center p-4 group">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mb-3 group-hover:bg-emerald-600 group-hover:text-white transition duration-300">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <span class="text-xs sm:text-sm font-bold text-gray-800 group-hover:text-emerald-600 transition">Profil Sekolah</span>
                <span class="text-[10px] text-gray-400 mt-1 hidden sm:block">Visi Misi & Sejarah</span>
            </a>

            <!-- Shortcut 4: Berita -->
            <a href="{{ route('articles.index') }}" class="modern-card modern-card-hover flex flex-col items-center text-center p-4 group">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mb-3 group-hover:bg-emerald-600 group-hover:text-white transition duration-300">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                </div>
                <span class="text-xs sm:text-sm font-bold text-gray-800 group-hover:text-emerald-600 transition">Berita & Acara</span>
                <span class="text-[10px] text-gray-400 mt-1 hidden sm:block">Informasi Terbaru</span>
            </a>

            <!-- Shortcut 5: Download -->
            <a href="{{ route('downloads.index') }}" class="modern-card modern-card-hover flex flex-col items-center text-center p-4 group">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mb-3 group-hover:bg-emerald-600 group-hover:text-white transition duration-300">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                </div>
                <span class="text-xs sm:text-sm font-bold text-gray-800 group-hover:text-emerald-600 transition">Pusat Unduhan</span>
                <span class="text-[10px] text-gray-400 mt-1 hidden sm:block">Brosur & Dokumen</span>
            </a>

            <!-- Shortcut 6: Kontak -->
            <a href="{{ route('contact') }}" class="modern-card modern-card-hover flex flex-col items-center text-center p-4 group">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mb-3 group-hover:bg-emerald-600 group-hover:text-white transition duration-300">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <span class="text-xs sm:text-sm font-bold text-gray-800 group-hover:text-emerald-600 transition">Hubungi Kami</span>
                <span class="text-[10px] text-gray-400 mt-1 hidden sm:block">Alamat & Media Sosial</span>
            </a>

        </div>
    </div>

    <!-- Visi & Misi Singkat -->
    <div class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                
                <!-- Kolom Kiri: Visual/Gambar -->
                <div class="lg:col-span-5 relative">
                    <!-- Ornamen Dekoratif Belakang -->
                    <div class="absolute -top-4 -left-4 w-72 h-72 bg-emerald-100 rounded-2xl -z-10"></div>
                    <div class="absolute -bottom-4 -right-4 w-72 h-72 bg-green-50 rounded-2xl -z-10"></div>
                    
                    <!-- Gambar Utama -->
                    <div class="relative modern-card overflow-hidden aspect-w-4 aspect-h-3 border-4 border-white bg-slate-200 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1541178735463-3ee7c74af011?auto=format&fit=crop&w=800&q=80" alt="Siswa Belajar" class="w-full h-80 object-cover">
                    </div>

                    <!-- Badge Pencapaian/Statistik -->
                    <div class="absolute bottom-6 -right-6 md:right-8 rounded-2xl backdrop-blur-md p-4 border-2 border-emerald-400 flex items-center gap-3 bg-emerald-800/95 shadow-xl shadow-emerald-900/40">
                        <svg class="w-10 h-10 text-yellow-300 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        <div>
                            <p class="text-[10px] uppercase tracking-widest font-bold text-emerald-200">Terakreditasi</p>
                            <p class="text-base font-black text-white leading-tight">Grade A</p>
                            <p class="text-xs text-emerald-100 font-semibold">Sangat Baik</p>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan: Teks Visi & Misi -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-50 border border-emerald-100 rounded-full text-emerald-600 text-xs font-bold uppercase tracking-wider">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Visi & Misi Utama
                    </div>
                    
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 leading-tight">
                        Membimbing Generasi Hebat, Berakhlak, dan <span class="text-emerald-600">Unggul</span>
                    </h2>
                    
                    <!-- Visi -->
                    <div class="border-l-4 border-emerald-600 pl-6 my-6 bg-slate-50 py-4 pr-4 rounded-r-lg">
                        <span class="text-xs uppercase font-extrabold tracking-wider text-emerald-600 block mb-1">Visi Kami</span>
                        <p class="text-lg italic text-slate-700 font-medium">
                            "Mewujudkan lembaga pendidikan yang hebat bermartabat dengan keunggulan akhlak, akademik, dan literasi teknologi menuju generasi emas."
                        </p>
                    </div>

                    <!-- Misi Singkat -->
                    <div class="space-y-4">
                        <span class="text-xs uppercase font-extrabold tracking-wider text-emerald-600 block">Misi Utama</span>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mt-0.5 flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="text-slate-600 text-sm">Menyelenggarakan pendidikan yang integratif dan berkarakter mulia.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mt-0.5 flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="text-slate-600 text-sm">Meningkatkan prestasi akademik dan non-akademik siswa secara kompetitif.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mt-0.5 flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="text-slate-600 text-sm">Membekali siswa dengan keterampilan teknologi dan literasi digital.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mt-0.5 flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="text-slate-600 text-sm">Membangun lingkungan sekolah yang asri, aman, dan nyaman untuk belajar.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="pt-4">
                        <a href="{{ route('profile') }}" class="inline-flex items-center text-sm font-bold text-emerald-600 hover:text-emerald-700 transition gap-1.5 group">
                            Selengkapnya Tentang Kami
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Informasi Terbaru -->
    <div class="py-24 bg-gray-50 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-50 border border-emerald-100 rounded-full text-emerald-600 text-xs font-bold uppercase tracking-wider mb-4">
                    Kanal Berita
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
                    <span class="text-emerald-600">Informasi</span> Terbaru
                </h2>
                <div class="mt-4 w-12 h-1 bg-emerald-600 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($latestArticles as $article)
                <!-- News Card -->
                <div class="modern-card modern-card-hover group flex flex-col h-full">
                    <div class="aspect-w-16 aspect-h-10 relative overflow-hidden bg-slate-200">
                        <img src="{{ $article->image ?? 'https://images.unsplash.com/photo-1546410531-bea5aadcb6ce?auto=format&fit=crop&w=600&q=80' }}" alt="{{ $article->title }}" class="w-full h-56 object-cover transform group-hover:scale-105 transition duration-500">
                        <div class="absolute top-4 left-4 bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded uppercase tracking-wider shadow">
                            Berita
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <p class="text-xs text-gray-500 mb-3 flex items-center">
                            <svg class="w-4 h-4 mr-1.5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            {{ $article->published_at ? $article->published_at->format('d M Y') : $article->created_at->format('d M Y') }}
                        </p>
                        <h3 class="text-lg font-bold text-slate-900 mb-3 line-clamp-2 group-hover:text-emerald-600 transition">
                            <a href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3 flex-grow">
                            {{ Str::limit(strip_tags($article->content), 120) }}
                        </p>
                        <div class="pt-4 border-t border-gray-50 mt-auto">
                            <a href="{{ route('articles.show', $article->slug) }}" class="modern-btn modern-btn-secondary px-4 py-2 text-slate-900 text-xs uppercase tracking-wider w-fit group/link">
                                Selengkapnya
                                <svg class="ml-1.5 h-4 w-4 transform group-hover/link:translate-x-1 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-3 text-center text-gray-500 py-16 modern-card modern-card-soft">
                    <svg class="w-12 h-12 text-gray-300 mx-auto mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2" />
                    </svg>
                    <p class="text-sm font-medium">Belum ada berita terbaru saat ini.</p>
                </div>
                @endforelse
            </div>
            
            <div class="text-center mt-16">
                <a href="{{ route('articles.index') }}" class="modern-btn modern-btn-primary px-8 py-3 text-sm uppercase tracking-wider">
                    Lihat Semua Berita
                </a>
            </div>
        </div>
    </div>
</x-app-layout>

