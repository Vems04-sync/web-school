<x-app-layout>
    <x-page-header 
        label="Pengembangan Bakat & Prestasi"
        title="Kesiswaan"
        subtitle="Ruang pembinaan siswa yang menampilkan ekstrakurikuler, prestasi, dan kegiatan pengembangan potensi secara lebih terarah dan modern."
    >
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4 text-left">
            <div class="modern-card p-4 bg-emerald-600 border-0 shadow-lg shadow-emerald-950/20 relative overflow-hidden">
                <div class="absolute inset-0 opacity-10 pointer-events-none">
                    <svg viewBox="0 0 100 100" class="w-full h-full" fill="white"><circle cx="90" cy="15" r="35"/><circle cx="10" cy="85" r="22"/><circle cx="55" cy="95" r="12"/></svg>
                </div>
                <p class="relative text-[10px] uppercase tracking-widest text-emerald-100 font-bold mb-1">Ekstrakurikuler</p>
                <p class="relative text-lg font-black text-white">{{ $totalEkskul }} Program Aktif</p>
            </div>
            <div class="modern-card p-4 bg-emerald-600 border-0 shadow-lg shadow-emerald-950/20 relative overflow-hidden">
                <div class="absolute inset-0 opacity-10 pointer-events-none">
                    <svg viewBox="0 0 100 100" class="w-full h-full" fill="white"><circle cx="85" cy="20" r="30"/><circle cx="15" cy="80" r="25"/><circle cx="70" cy="90" r="10"/></svg>
                </div>
                <p class="relative text-[10px] uppercase tracking-widest text-emerald-100 font-bold mb-1">Prestasi</p>
                <p class="relative text-lg font-black text-white">{{ $totalPrestasi }}+ Pencapaian</p>
            </div>
            <div class="modern-card p-4 bg-emerald-600 border-0 shadow-lg shadow-emerald-950/20 relative overflow-hidden">
                <div class="absolute inset-0 opacity-10 pointer-events-none">
                    <svg viewBox="0 0 100 100" class="w-full h-full" fill="white"><circle cx="80" cy="10" r="28"/><circle cx="20" cy="75" r="20"/><circle cx="90" cy="80" r="15"/></svg>
                </div>
                <p class="relative text-[10px] uppercase tracking-widest text-emerald-100 font-bold mb-1">Pembinaan</p>
                <p class="relative text-lg font-black text-white">Karakter &amp; Kepemimpinan</p>
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
                    Ekstrakurikuler
                </a>
                <a href="#prestasi" class="text-emerald-100 hover:text-white px-3 py-1.5 rounded-full hover:bg-emerald-800 transition flex items-center gap-1.5 whitespace-nowrap">
                    <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Prestasi Siswa
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
                <h2 class="text-3xl font-extrabold text-slate-900">Ekstrakurikuler Sekolah</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Berbagai program pengembangan minat, bakat, dan kepribadian siswa yang diselenggarakan di luar jam pelajaran formal.</p>
            </div>

            @php
            $defaultEkskul = [
                [
                    'name'        => 'Organisasi Siswa Intra Sekolah',
                    'singkatan'   => 'OSIS',
                    'description' => 'Wadah pengembangan kepemimpinan, organisasi, dan tanggung jawab sosial bagi seluruh siswa SMA AL-ISLAMI.',
                    'icon'        => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>',
                    'color'       => 'from-emerald-500 to-teal-600',
                    'badge'       => 'bg-emerald-100 text-emerald-700',
                    'category'   => 'Organisasi',
                ],
                [
                    'name'        => 'Gerakan Pramuka',
                    'singkatan'   => 'PRAMUKA',
                    'description' => 'Membentuk karakter disiplin, mandiri, dan cinta tanah air melalui kegiatan kepramukaan yang menyenangkan dan edukatif.',
                    'icon'        => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6H11l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/>',
                    'color'       => 'from-amber-500 to-orange-600',
                    'badge'       => 'bg-amber-100 text-amber-700',
                    'category'   => 'Kepramukaan',
                ],
                [
                    'name'        => 'Futsal',
                    'singkatan'   => 'FUTSAL',
                    'description' => 'Olahraga futsal untuk membina sportivitas, kerja sama tim, dan menjaga kesehatan fisik siswa secara aktif.',
                    'icon'        => '<circle cx="12" cy="12" r="10"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a10 10 0 100 20 10 10 0 000-20zM8 12l2 2 4-4"/>',
                    'color'       => 'from-blue-500 to-indigo-600',
                    'badge'       => 'bg-blue-100 text-blue-700',
                    'category'   => 'Olahraga',
                ],
                [
                    'name'        => 'Menjahit',
                    'singkatan'   => 'JAHIT',
                    'description' => 'Keterampilan menjahit sebagai bekal vokasi yang relevan, melatih ketelitian dan kreativitas dalam dunia fashion dan tekstil.',
                    'icon'        => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>',
                    'color'       => 'from-pink-500 to-rose-600',
                    'badge'       => 'bg-pink-100 text-pink-700',
                    'category'   => 'Vokasi',
                ],
                [
                    'name'        => 'Tata Boga',
                    'singkatan'   => 'BOGA',
                    'description' => 'Kegiatan memasak dan pengolahan makanan untuk mengembangkan keterampilan kuliner dan jiwa wirausaha siswa.',
                    'icon'        => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>',
                    'color'       => 'from-orange-500 to-red-500',
                    'badge'       => 'bg-orange-100 text-orange-700',
                    'category'   => 'Vokasi',
                ],
                [
                    'name'        => 'Tata Busana',
                    'singkatan'   => 'BUSANA',
                    'description' => 'Mendalami dunia desain dan penataan busana, memupuk estetika, kreativitas, dan kesiapan kerja di industri fashion.',
                    'icon'        => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>',
                    'color'       => 'from-purple-500 to-violet-600',
                    'badge'       => 'bg-purple-100 text-purple-700',
                    'category'   => 'Vokasi',
                ],
                [
                    'name'        => 'Pangkas Rambut',
                    'singkatan'   => 'BARBER',
                    'description' => 'Keterampilan teknik pangkas rambut profesional yang membekali siswa dengan kompetensi praktis di bidang kecantikan dan grooming.',
                    'icon'        => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z"/>',
                    'color'       => 'from-slate-500 to-gray-700',
                    'badge'       => 'bg-slate-100 text-slate-700',
                    'category'   => 'Vokasi',
                ],
            ];
            @endphp

            @if($extracurriculars->count() > 0)
            {{-- Data dari database --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($extracurriculars as $ekskul)
                <div class="modern-card modern-card-hover overflow-hidden group bg-white border border-slate-200/80 shadow-xl shadow-slate-200/60">
                    <div class="h-56 bg-slate-200 flex items-end justify-start relative overflow-hidden p-8">
                        @if($ekskul->image)
                        <img src="{{ str_starts_with($ekskul->image, 'http') ? $ekskul->image : asset('storage/' . $ekskul->image) }}" alt="{{ $ekskul->name }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        @else
                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-500 via-green-600 to-teal-700 group-hover:scale-105 transition duration-500"></div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/20 to-transparent"></div>
                        <div class="relative z-10 text-white w-full text-left">
                            <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full bg-emerald-600/90 backdrop-blur border border-emerald-400/50 text-[11px] font-black uppercase tracking-[0.2em] mb-2">{{ $ekskul->name }}</span>
                        </div>
                    </div>
                    <div class="p-7">
                        <h3 class="font-black text-slate-900 text-xl leading-snug mb-2">{{ $ekskul->name }}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">{{ $ekskul->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            @else
            {{-- Tampilan default dengan 7 ekskul bawaan --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($defaultEkskul as $ekskul)
                <div class="group bg-white border border-slate-100 rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                    <!-- Card Header / Icon -->
                    <div class="h-36 bg-gradient-to-br {{ $ekskul['color'] }} flex flex-col items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 opacity-10">
                            <svg viewBox="0 0 100 100" class="w-full h-full" fill="white">
                                <circle cx="80" cy="20" r="30"/><circle cx="20" cy="80" r="20"/>
                            </svg>
                        </div>
                        <svg class="w-12 h-12 text-white drop-shadow mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            {!! $ekskul['icon'] !!}
                        </svg>
                        <span class="text-[10px] font-black uppercase tracking-[0.25em] text-white/80">{{ $ekskul['singkatan'] }}</span>
                    </div>
                    <!-- Card Body -->
                    <div class="p-5">
                        <div class="flex items-start justify-between gap-2 mb-2">
                            <h3 class="font-bold text-slate-900 text-base leading-snug">{{ $ekskul['name'] }}</h3>
                            <span class="text-[10px] font-bold px-2 py-1 rounded-full {{ $ekskul['badge'] }} whitespace-nowrap flex-shrink-0">{{ $ekskul['category'] }}</span>
                        </div>
                        <p class="text-gray-500 text-xs leading-relaxed">{{ $ekskul['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @endif

            <!-- CTA Daftar Ekskul -->
            <div class="mt-12 text-center bg-emerald-900 rounded-3xl p-8 md:p-12 text-white shadow-xl relative overflow-hidden">
                <div class="absolute inset-0 opacity-10 pointer-events-none">
                    <svg viewBox="0 0 200 100" class="w-full h-full" fill="white">
                        <circle cx="10" cy="10" r="40"/>
                        <circle cx="190" cy="90" r="50"/>
                        <circle cx="170" cy="15" r="20"/>
                        <circle cx="30" cy="90" r="15"/>
                        <circle cx="100" cy="110" r="30"/>
                    </svg>
                </div>
                <h3 class="relative text-2xl font-bold mb-3">Tertarik Bergabung Ekskul?</h3>
                <p class="relative text-emerald-100 mb-6 max-w-lg mx-auto text-sm">Daftarkan dirimu ke ekstrakurikuler pilihan dan kembangkan potensi terbaikmu bersama kami!</p>
                <a href="{{ $extracurricularGformUrl }}" target="_blank" rel="noopener noreferrer"
                   class="relative modern-btn modern-btn-secondary px-7 py-3.5 text-emerald-800 hover:bg-emerald-50 bg-white inline-flex items-center gap-2">
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
                <h2 class="text-3xl font-extrabold text-slate-900">Prestasi &amp; Pencapaian Siswa</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Galeri pencapaian membanggakan siswa-siswi SMA AL-ISLAMI di berbagai kompetisi lokal, nasional, maupun internasional.</p>
            </div>

            <!-- Statistik Prestasi -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-16">
                <div class="modern-card modern-card-hover p-4 text-center bg-emerald-600 text-white border-0 shadow-xl shadow-emerald-200/40 relative overflow-hidden">
                    <div class="absolute inset-0 opacity-10 pointer-events-none">
                        <svg viewBox="0 0 100 100" class="w-full h-full" fill="white"><circle cx="85" cy="15" r="35"/><circle cx="15" cy="85" r="22"/></svg>
                    </div>
                    <div class="relative inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white/15 backdrop-blur mb-3">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4m8 14v-4m-2 2h4M5 21v-4M3 19h4m14-4l-3 3m0-3v3h3M7 7l3 3m-3 0h3V7" />
                        </svg>
                    </div>
                    <div class="relative text-3xl font-black mb-1">{{ $totalPrestasi }}</div>
                    <div class="relative text-[10px] font-semibold uppercase tracking-wider opacity-90">Total Prestasi</div>
                </div>
                <div class="modern-card modern-card-hover p-4 text-center bg-emerald-600 text-white border-0 shadow-xl shadow-emerald-200/40 relative overflow-hidden">
                    <div class="absolute inset-0 opacity-10 pointer-events-none">
                        <svg viewBox="0 0 100 100" class="w-full h-full" fill="white"><circle cx="80" cy="20" r="30"/><circle cx="20" cy="80" r="25"/><circle cx="90" cy="75" r="12"/></svg>
                    </div>
                    <div class="relative inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white/15 backdrop-blur mb-3">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
                        </svg>
                    </div>
                    <div class="relative text-3xl font-black mb-1">{{ $prestasiInternasional }}</div>
                    <div class="relative text-[10px] font-semibold uppercase tracking-wider opacity-90">Internasional</div>
                </div>
                <div class="modern-card modern-card-hover p-4 text-center bg-emerald-600 text-white border-0 shadow-xl shadow-emerald-200/40 relative overflow-hidden">
                    <div class="absolute inset-0 opacity-10 pointer-events-none">
                        <svg viewBox="0 0 100 100" class="w-full h-full" fill="white"><circle cx="75" cy="10" r="28"/><circle cx="10" cy="70" r="20"/><circle cx="85" cy="80" r="15"/></svg>
                    </div>
                    <div class="relative inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white/15 backdrop-blur mb-3">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3l7 4v5c0 5-3.5 9.4-7 9.4S5 17 5 12V7l7-4z" />
                        </svg>
                    </div>
                    <div class="relative text-3xl font-black mb-1">{{ $prestasiNasional }}</div>
                    <div class="relative text-[10px] font-semibold uppercase tracking-wider opacity-90">Nasional</div>
                </div>
                <div class="modern-card modern-card-hover p-4 text-center bg-emerald-600 text-white border-0 shadow-xl shadow-emerald-200/40 relative overflow-hidden">
                    <div class="absolute inset-0 opacity-10 pointer-events-none">
                        <svg viewBox="0 0 100 100" class="w-full h-full" fill="white"><circle cx="90" cy="20" r="32"/><circle cx="15" cy="80" r="18"/><circle cx="60" cy="95" r="14"/></svg>
                    </div>
                    <div class="relative inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white/15 backdrop-blur mb-3">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div class="relative text-3xl font-black mb-1">{{ $prestasiRegional }}</div>
                    <div class="relative text-[10px] font-semibold uppercase tracking-wider opacity-90">Regional / Lokal</div>
                </div>
            </div>

            <!-- Galeri Prestasi -->
            @if($achievements->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($achievements as $prestasi)
                <div class="modern-card modern-card-hover overflow-hidden bg-white border border-slate-200/80 shadow-xl shadow-slate-200/60">
                    <div class="p-7">
                        <div class="flex items-start gap-5 mb-5">
                            @if($prestasi->image)
                            <div class="w-20 h-20 bg-gray-100 rounded-2xl overflow-hidden flex-shrink-0 border border-gray-200 shadow-sm">
                                <img src="{{ str_starts_with($prestasi->image, 'http') ? $prestasi->image : asset('storage/' . $prestasi->image) }}" alt="{{ $prestasi->title }}" class="w-full h-full object-cover">
                            </div>
                            @else
                            <div class="w-20 h-20 bg-gradient-to-br from-emerald-100 to-green-100 rounded-2xl flex items-center justify-center flex-shrink-0 ring-4 ring-emerald-50 shadow-sm">
                                <svg class="w-10 h-10 text-emerald-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            </div>
                            @endif
                            <div class="flex-1 min-w-0">
                                @php
                                $levelColor = match(strtolower($prestasi->level ?? '')) {
                                    'internasional' => 'bg-purple-100 text-purple-700',
                                    'nasional'      => 'bg-blue-100 text-blue-700',
                                    default         => 'bg-emerald-100 text-emerald-700',
                                };
                                @endphp
                                <div class="flex items-center gap-2 flex-wrap mb-2">
                                    <span class="inline-flex items-center px-3 py-1 {{ $levelColor }} text-[11px] font-black rounded-full uppercase tracking-wide">{{ $prestasi->year }}</span>
                                    @if($prestasi->level)
                                    <span class="inline-flex items-center px-3 py-1 {{ $levelColor }} text-[11px] font-black rounded-full uppercase tracking-wide">{{ $prestasi->level }}</span>
                                    @endif
                                </div>
                                <h3 class="font-black text-slate-900 text-lg leading-snug">{{ $prestasi->title }}</h3>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            <span class="font-bold text-slate-800">{{ $prestasi->student_name }}</span><br>
                            <span class="mt-1 block">{{ $prestasi->description }}</span>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>

            @else
            <!-- Placeholder saat data prestasi kosong -->
            <div class="text-center py-16 bg-slate-50 rounded-3xl border border-dashed border-emerald-200">
                <div class="w-20 h-20 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-emerald-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-700 mb-2">Galeri Prestasi</h3>
                <p class="text-gray-500 max-w-md mx-auto text-sm">Data prestasi siswa di tingkat lokal, nasional, maupun internasional akan segera ditampilkan di sini.</p>
            </div>
            @endif

        </section>

    </div>
</x-app-layout>
