<x-app-layout>
    <x-page-header 
        label="Pengembangan Bakat & Prestasi"
        title="Kesiswaan"
        subtitle="Ruang pembinaan siswa yang menampilkan ekstrakurikuler, prestasi, dan kegiatan pengembangan potensi secara lebih terarah dan modern."
    >
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4 text-left">
            <div class="modern-card p-4 bg-emerald-600 border-0 shadow-lg shadow-emerald-950/20">
                <p class="text-[10px] uppercase tracking-widest text-emerald-100 font-bold mb-1">Ekstrakurikuler</p>
                <p class="text-lg font-black text-white">{{ $totalEkskul }} Program Aktif</p>
            </div>
            <div class="modern-card p-4 bg-emerald-600 border-0 shadow-lg shadow-emerald-950/20">
                <p class="text-[10px] uppercase tracking-widest text-emerald-100 font-bold mb-1">Prestasi</p>
                <p class="text-lg font-black text-white">{{ $totalPrestasi }}+ Pencapaian</p>
            </div>
            <div class="modern-card p-4 bg-emerald-600 border-0 shadow-lg shadow-emerald-950/20">
                <p class="text-[10px] uppercase tracking-widest text-emerald-100 font-bold mb-1">Pembinaan</p>
                <p class="text-lg font-black text-white">Karakter & Kepemimpinan</p>
            </div>
        </div>
    </x-page-header>

    <!-- Sub-Navigasi Sticky -->
    <div class="bg-emerald-900 border-b border-emerald-950 sticky top-20 z-30 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center space-x-4 sm:space-x-8 overflow-x-auto py-3 text-sm font-semibold">
                <a href="#ekskul" class="text-emerald-100 hover:text-white px-3 py-1.5 rounded-full hover:bg-emerald-800 transition flex items-center gap-1.5 whitespace-nowrap">
                    <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    1. Ekstrakurikuler
                </a>
                <a href="#prestasi" class="text-emerald-100 hover:text-white px-3 py-1.5 rounded-full hover:bg-emerald-800 transition flex items-center gap-1.5 whitespace-nowrap">
                    <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    2. Prestasi Siswa
                </a>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-24">

        <!-- 1. EKSTRAKURIKULER -->
        <section id="ekskul" class="scroll-mt-32">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-50 border border-emerald-100 rounded-full text-emerald-600 text-xs font-bold uppercase tracking-wider mb-4">
                    Kegiatan di Luar Jam Belajar
                </div>
                <h2 class="text-3xl font-extrabold text-slate-900">1. Ekstrakurikuler Sekolah</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Berbagai program pengembangan minat, bakat, dan kepribadian siswa yang diselenggarakan di luar jam pelajaran formal.</p>
            </div>

            <!-- Statistik Ekskul -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-16">
                <div class="modern-card modern-card-hover p-4 text-center bg-emerald-600 text-white border-0 shadow-xl shadow-emerald-200/40">
                    <div class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white/15 backdrop-blur mb-3">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="text-3xl font-black mb-1">{{ $totalEkskul }}</div>
                    <div class="text-[10px] font-semibold uppercase tracking-wider opacity-90">Program Ekskul</div>
                </div>
                <div class="modern-card modern-card-hover p-4 text-center bg-emerald-600 text-white border-0 shadow-xl shadow-emerald-200/40">
                    <div class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white/15 backdrop-blur mb-3">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div class="text-3xl font-black mb-1">100%</div>
                    <div class="text-[10px] font-semibold uppercase tracking-wider opacity-90">Dukungan Sekolah</div>
                </div>
                <div class="modern-card modern-card-hover p-4 text-center bg-emerald-600 text-white border-0 shadow-xl shadow-emerald-200/40">
                    <div class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white/15 backdrop-blur mb-3">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div class="text-3xl font-black mb-1">85%</div>
                    <div class="text-[10px] font-semibold uppercase tracking-wider opacity-90">Partisipasi Siswa</div>
                </div>
                <div class="modern-card modern-card-hover p-4 text-center bg-emerald-600 text-white border-0 shadow-xl shadow-emerald-200/40">
                    <div class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white/15 backdrop-blur mb-3">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="text-3xl font-black mb-1">20+</div>
                    <div class="text-[10px] font-semibold uppercase tracking-wider opacity-90">Kegiatan Rutin</div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                
                @forelse($extracurriculars as $ekskul)
                <div class="modern-card modern-card-hover overflow-hidden group bg-white border border-slate-200/80 shadow-xl shadow-slate-200/60">
                    <div class="h-64 bg-slate-200 flex items-end justify-start relative overflow-hidden p-8">
                        @if($ekskul->image)
                        <img src="{{ asset('storage/' . $ekskul->image) }}" alt="{{ $ekskul->name }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        @else
                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-500 via-green-600 to-teal-700 group-hover:scale-105 transition duration-500"></div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/20 to-transparent"></div>
                        <div class="relative z-10 text-white w-full text-left">
                            <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full bg-emerald-600/90 backdrop-blur border border-emerald-400/50 text-[11px] font-black uppercase tracking-[0.2em] mb-2">{{ $ekskul->name }}</span>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="font-black text-slate-900 text-2xl leading-snug mb-3">{{ $ekskul->name }}</h3>
                        <p class="text-gray-600 text-base leading-relaxed mb-4 line-clamp-3">{{ $ekskul->description }}</p>
                    </div>
                </div>
                @empty
                <div class="col-span-1 md:col-span-2 py-12 text-center text-gray-500 text-lg">
                    Belum ada data ekstrakurikuler yang ditambahkan.
                </div>
                @endforelse

            </div>

            <!-- CTA Daftar Ekskul -->
            <div class="mt-12 text-center bg-emerald-900 rounded-3xl p-8 md:p-12 text-white shadow-xl">
                <h3 class="text-2xl font-bold mb-3">Tertarik Bergabung Ekskul?</h3>
                <p class="text-emerald-100 mb-6 max-w-lg mx-auto text-sm">Daftarkan dirimu ke ekstrakurikuler pilihan dan kembangkan potensi terbaikmu bersama kami!</p>
                     <a href="{{ $extracurricularGformUrl }}" target="_blank" rel="noopener noreferrer"
                         class="modern-btn modern-btn-secondary px-7 py-3.5 text-emerald-800 hover:bg-emerald-50 bg-white">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                    </svg>
                    Daftar Ekstrakurikuler (Google Form)
                </a>
            </div>
        </section>

        <!-- 2. PRESTASI SISWA -->
        <section id="prestasi" class="scroll-mt-32">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-50 border border-emerald-100 rounded-full text-emerald-600 text-xs font-bold uppercase tracking-wider mb-4">
                    Kebanggaan Sekolah
                </div>
                <h2 class="text-3xl font-extrabold text-slate-900">2. Prestasi & Pencapaian Siswa</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Galeri pencapaian membanggakan siswa-siswi SMA AL-ISLAMI di berbagai kompetisi lokal, nasional, maupun internasional.</p>
            </div>

            <!-- Statistik Prestasi -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-16">
                <div class="modern-card modern-card-hover p-4 text-center bg-emerald-600 text-white border-0 shadow-xl shadow-emerald-200/40">
                    <div class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white/15 backdrop-blur mb-3">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4m8 14v-4m-2 2h4M5 21v-4M3 19h4m14-4l-3 3m0-3v3h3M7 7l3 3m-3 0h3V7" />
                        </svg>
                    </div>
                    <div class="text-3xl font-black mb-1">{{ $totalPrestasi }}</div>
                    <div class="text-[10px] font-semibold uppercase tracking-wider opacity-90">Piala Kejuaraan</div>
                </div>
                <div class="modern-card modern-card-hover p-4 text-center bg-emerald-600 text-white border-0 shadow-xl shadow-emerald-200/40">
                    <div class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white/15 backdrop-blur mb-3">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 0V5m0 11v3" />
                        </svg>
                    </div>
                    <div class="text-3xl font-black mb-1">{{ $prestasiNasional }}</div>
                    <div class="text-[10px] font-semibold uppercase tracking-wider opacity-90">Prestasi Nasional</div>
                </div>
                <div class="modern-card modern-card-hover p-4 text-center bg-emerald-600 text-white border-0 shadow-xl shadow-emerald-200/40">
                    <div class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white/15 backdrop-blur mb-3">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3l7 4v5c0 5-3.5 9.4-7 9.4S5 17 5 12V7l7-4z" />
                        </svg>
                    </div>
                    <div class="text-3xl font-black mb-1">{{ $prestasiRegional }}</div>
                    <div class="text-[10px] font-semibold uppercase tracking-wider opacity-90">Prestasi Regional</div>
                </div>
                <div class="modern-card modern-card-hover p-4 text-center bg-emerald-600 text-white border-0 shadow-xl shadow-emerald-200/40">
                    <div class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white/15 backdrop-blur mb-3">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l2.04 6.275a1 1 0 00.95.69h6.6c.969 0 1.371 1.24.588 1.81l-5.34 3.878a1 1 0 00-.364 1.118l2.04 6.275c.3.921-.755 1.688-1.538 1.118l-5.34-3.878a1 1 0 00-1.175 0l-5.34 3.878c-.783.57-1.838-.197-1.538-1.118l2.04-6.275a1 1 0 00-.364-1.118L2.87 11.702c-.783-.57-.38-1.81.588-1.81h6.6a1 1 0 00.95-.69l2.04-6.275z" />
                        </svg>
                    </div>
                    <div class="text-3xl font-black mb-1">{{ $prestasiInternasional }}</div>
                    <div class="text-[10px] font-semibold uppercase tracking-wider opacity-90">Prestasi Internasional</div>
                </div>
            </div>

            <!-- Galeri Prestasi -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                
                @forelse($achievements as $prestasi)
                <div class="modern-card modern-card-hover overflow-hidden bg-white border border-slate-200/80 shadow-xl shadow-slate-200/60 p-2">
                    <div class="p-8">
                        <div class="flex items-start gap-6 mb-6">
                            @if($prestasi->image)
                            <div class="w-20 h-20 bg-gray-100 rounded-2xl overflow-hidden flex-shrink-0 border border-gray-200 shadow-sm">
                                <img src="{{ asset('storage/' . $prestasi->image) }}" alt="{{ $prestasi->title }}" class="w-full h-full object-cover">
                            </div>
                            @else
                            <div class="w-20 h-20 bg-gradient-to-br from-emerald-100 to-green-100 rounded-2xl flex items-center justify-center flex-shrink-0 ring-4 ring-emerald-50 shadow-sm">
                                <svg class="w-10 h-10 text-emerald-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            </div>
                            @endif
                            <div>
                                <span class="inline-flex items-center px-3 py-1.5 bg-emerald-50 text-emerald-700 text-[11px] font-black rounded-full uppercase tracking-[0.2em] mb-3">{{ $prestasi->year }}</span>
                                <h3 class="font-black text-slate-900 text-xl leading-snug">{{ $prestasi->title }}</h3>
                            </div>
                        </div>
                        <p class="text-gray-600 text-base leading-relaxed">
                            <span class="font-bold text-slate-800 text-lg">{{ $prestasi->student_name }}</span><br>
                            <span class="mt-2 block">{{ $prestasi->description }}</span>
                        </p>
                    </div>
                </div>
                @empty
                <div class="col-span-1 md:col-span-2 py-12 text-center text-gray-500 text-lg">
                    Belum ada data prestasi yang ditambahkan.
                </div>
                @endforelse

            </div>
        </section>

    </div>
</x-app-layout>
