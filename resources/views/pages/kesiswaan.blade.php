<x-app-layout>
    <!-- Header Banner -->
    <div class="relative overflow-hidden bg-gradient-to-br from-emerald-950 via-emerald-900 to-white pt-36 pb-20 text-white text-center">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-16 left-0 w-72 h-72 bg-emerald-400/20 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-20 right-0 w-96 h-96 bg-white/20 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 w-[34rem] h-[34rem] -translate-x-1/2 -translate-y-1/2 bg-white/5 rounded-full blur-3xl"></div>
        </div>
        <div class="relative z-10 max-w-4xl mx-auto px-4">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-white/10 backdrop-blur border border-white/15 rounded-full text-white/90 text-xs font-bold uppercase tracking-wider mb-4">
                Pengembangan Bakat & Prestasi
            </div>
            <h1 class="text-4xl md:text-5xl font-black mb-4 tracking-tight">Kesiswaan</h1>
            <p class="text-emerald-100 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed">Ruang pembinaan siswa yang menampilkan ekstrakurikuler, prestasi, dan kegiatan pengembangan potensi secara lebih terarah dan modern.</p>

            <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4 text-left">
                <div class="modern-card modern-card-soft p-4 border border-white/10 bg-white/10 backdrop-blur-sm shadow-lg shadow-cyan-950/20">
                    <p class="text-[10px] uppercase tracking-widest text-cyan-300 font-bold mb-1">Ekstrakurikuler</p>
                    <p class="text-lg font-black text-white">{{ $totalEkskul }} Program Aktif</p>
                </div>
                <div class="modern-card modern-card-soft p-4 border border-white/10 bg-white/10 backdrop-blur-sm shadow-lg shadow-blue-950/20">
                    <p class="text-[10px] uppercase tracking-widest text-blue-300 font-bold mb-1">Prestasi</p>
                    <p class="text-lg font-black text-white">{{ $totalPrestasi }}+ Pencapaian</p>
                </div>
                <div class="modern-card modern-card-soft p-4 border border-white/10 bg-white/10 backdrop-blur-sm shadow-lg shadow-indigo-950/20">
                    <p class="text-[10px] uppercase tracking-widest text-indigo-300 font-bold mb-1">Pembinaan</p>
                    <p class="text-lg font-black text-white">Karakter & Kepemimpinan</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Sub-Navigasi Sticky -->
    <div class="bg-white/90 backdrop-blur-md border-b border-gray-200 sticky top-20 z-30 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center space-x-4 sm:space-x-8 overflow-x-auto py-3 text-sm font-semibold">
                <a href="#ekskul" class="text-gray-600 hover:text-blue-600 px-3 py-1.5 rounded-full hover:bg-blue-50 transition flex items-center gap-1.5 whitespace-nowrap">
                    <svg class="w-4 h-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    1. Ekstrakurikuler
                </a>
                <a href="#prestasi" class="text-gray-600 hover:text-blue-600 px-3 py-1.5 rounded-full hover:bg-blue-50 transition flex items-center gap-1.5 whitespace-nowrap">
                    <svg class="w-4 h-4 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-blue-50 border border-blue-100 rounded-full text-blue-600 text-xs font-bold uppercase tracking-wider mb-4">
                    Kegiatan di Luar Jam Belajar
                </div>
                <h2 class="text-3xl font-extrabold text-slate-900">1. Ekstrakurikuler Sekolah</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Berbagai program pengembangan minat, bakat, dan kepribadian siswa yang diselenggarakan di luar jam pelajaran formal.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                
                @forelse($extracurriculars as $ekskul)
                <div class="modern-card modern-card-hover overflow-hidden group bg-white border border-slate-200/80 shadow-xl shadow-slate-200/60">
                    <div class="h-52 bg-slate-200 flex items-end justify-start relative overflow-hidden p-6">
                        @if($ekskul->image)
                        <img src="{{ asset('storage/' . $ekskul->image) }}" alt="{{ $ekskul->name }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        @else
                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-500 via-green-600 to-teal-700 group-hover:scale-105 transition duration-500"></div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-slate-950/20 to-transparent"></div>
                        <div class="relative z-10 text-white w-full text-left">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/20 backdrop-blur border border-white/30 text-[10px] font-black uppercase tracking-[0.2em] mb-2">{{ $ekskul->name }}</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-black text-slate-900 text-lg leading-snug mb-2">{{ $ekskul->name }}</h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-4 line-clamp-3">{{ $ekskul->description }}</p>
                    </div>
                </div>
                @empty
                <div class="col-span-1 sm:col-span-2 lg:col-span-3 py-10 text-center text-gray-500">
                    Belum ada data ekstrakurikuler yang ditambahkan.
                </div>
                @endforelse

            </div>

            <!-- CTA Daftar Ekskul -->
            <div class="mt-12 text-center bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 rounded-3xl p-8 md:p-12 text-white shadow-xl">
                <h3 class="text-2xl font-bold mb-3">Tertarik Bergabung Ekskul?</h3>
                <p class="text-blue-100 mb-6 max-w-lg mx-auto text-sm">Daftarkan dirimu ke ekstrakurikuler pilihan dan kembangkan potensi terbaikmu bersama kami!</p>
                     <a href="{{ $extracurricularGformUrl }}" target="_blank" rel="noopener noreferrer"
                         class="modern-btn modern-btn-secondary px-7 py-3.5 text-blue-700">
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
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-amber-50 border border-amber-100 rounded-full text-amber-600 text-xs font-bold uppercase tracking-wider mb-4">
                    Kebanggaan Sekolah
                </div>
                <h2 class="text-3xl font-extrabold text-slate-900">2. Prestasi & Pencapaian Siswa</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Galeri pencapaian membanggakan siswa-siswi SMA AL-ISLAMI di berbagai kompetisi lokal, nasional, maupun internasional.</p>
            </div>

            <!-- Statistik Prestasi -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
                <div class="modern-card modern-card-hover p-6 text-center bg-gradient-to-br from-amber-500 via-yellow-500 to-orange-500 text-white border-0 shadow-xl shadow-amber-200/40">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-white/15 backdrop-blur mb-4">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4m8 14v-4m-2 2h4M5 21v-4M3 19h4m14-4l-3 3m0-3v3h3M7 7l3 3m-3 0h3V7" />
                        </svg>
                    </div>
                    <div class="text-4xl font-black mb-1">{{ $totalPrestasi }}</div>
                    <div class="text-xs font-semibold uppercase tracking-wider opacity-90">Piala Kejuaraan</div>
                </div>
                <div class="modern-card modern-card-hover p-6 text-center bg-gradient-to-br from-blue-500 via-indigo-600 to-slate-800 text-white border-0 shadow-xl shadow-blue-200/40">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-white/15 backdrop-blur mb-4">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 0V5m0 11v3" />
                        </svg>
                    </div>
                    <div class="text-4xl font-black mb-1">{{ $prestasiNasional }}</div>
                    <div class="text-xs font-semibold uppercase tracking-wider opacity-90">Prestasi Nasional</div>
                </div>
                <div class="modern-card modern-card-hover p-6 text-center bg-gradient-to-br from-emerald-500 via-green-600 to-teal-600 text-white border-0 shadow-xl shadow-emerald-200/40">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-white/15 backdrop-blur mb-4">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3l7 4v5c0 5-3.5 9.4-7 9.4S5 17 5 12V7l7-4z" />
                        </svg>
                    </div>
                    <div class="text-4xl font-black mb-1">{{ $prestasiRegional }}</div>
                    <div class="text-xs font-semibold uppercase tracking-wider opacity-90">Prestasi Regional</div>
                </div>
                <div class="modern-card modern-card-hover p-6 text-center bg-gradient-to-br from-violet-500 via-fuchsia-600 to-pink-600 text-white border-0 shadow-xl shadow-fuchsia-200/40">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-white/15 backdrop-blur mb-4">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l2.04 6.275a1 1 0 00.95.69h6.6c.969 0 1.371 1.24.588 1.81l-5.34 3.878a1 1 0 00-.364 1.118l2.04 6.275c.3.921-.755 1.688-1.538 1.118l-5.34-3.878a1 1 0 00-1.175 0l-5.34 3.878c-.783.57-1.838-.197-1.538-1.118l2.04-6.275a1 1 0 00-.364-1.118L2.87 11.702c-.783-.57-.38-1.81.588-1.81h6.6a1 1 0 00.95-.69l2.04-6.275z" />
                        </svg>
                    </div>
                    <div class="text-4xl font-black mb-1">{{ $prestasiInternasional }}</div>
                    <div class="text-xs font-semibold uppercase tracking-wider opacity-90">Prestasi Internasional</div>
                </div>
            </div>

            <!-- Galeri Prestasi -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                @forelse($achievements as $prestasi)
                <div class="modern-card modern-card-hover overflow-hidden bg-white border border-slate-200/80 shadow-xl shadow-slate-200/60">
                    <div class="p-6">
                        <div class="flex items-start gap-4 mb-4">
                            @if($prestasi->image)
                            <div class="w-14 h-14 bg-gray-100 rounded-xl overflow-hidden flex-shrink-0 border border-gray-200">
                                <img src="{{ asset('storage/' . $prestasi->image) }}" alt="{{ $prestasi->title }}" class="w-full h-full object-cover">
                            </div>
                            @else
                            <div class="w-14 h-14 bg-gradient-to-br from-amber-100 to-orange-100 rounded-2xl flex items-center justify-center flex-shrink-0 ring-4 ring-amber-50">
                                <svg class="w-8 h-8 text-amber-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            </div>
                            @endif
                            <div>
                                <span class="inline-flex items-center px-2.5 py-1 bg-amber-50 text-amber-700 text-[10px] font-black rounded-full uppercase tracking-[0.2em] mb-2">{{ $prestasi->year }}</span>
                                <h3 class="font-black text-slate-900 text-lg leading-snug">{{ $prestasi->title }}</h3>
                            </div>
                        </div>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            <span class="font-bold text-slate-700">{{ $prestasi->student_name }}</span><br>
                            {{ $prestasi->description }}
                        </p>
                    </div>
                </div>
                @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3 py-10 text-center text-gray-500">
                    Belum ada data prestasi yang ditambahkan.
                </div>
                @endforelse

            </div>
        </section>

    </div>
</x-app-layout>
