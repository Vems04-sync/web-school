<x-app-layout>
    <x-page-header 
        label="Identitas & Informasi Sekolah"
        title="Profil SMA AL-ISLAMI"
        subtitle="Mengenal lebih dekat sejarah, visi & misi, struktur organisasi, fasilitas, serta guru & tenaga kependidikan SMA AL-ISLAMI."
    />

    <!-- Sub-Navigasi Sticky -->
    <div class="bg-emerald-900 border-b border-emerald-700 sticky top-20 z-30 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center space-x-4 sm:space-x-8 overflow-x-auto py-3 text-sm font-semibold">
                <a href="#sejarah" class="text-emerald-200 hover:text-white px-3 py-1.5 rounded-full hover:bg-emerald-700 transition flex items-center gap-1.5 whitespace-nowrap">
                    <svg class="w-4 h-4 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    Sejarah & Identitas
                </a>
                <a href="#visi-misi" class="text-emerald-200 hover:text-white px-3 py-1.5 rounded-full hover:bg-emerald-700 transition flex items-center gap-1.5 whitespace-nowrap">
                    <svg class="w-4 h-4 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                    Visi & Misi
                </a>
                <a href="#struktur" class="text-emerald-200 hover:text-white px-3 py-1.5 rounded-full hover:bg-emerald-700 transition flex items-center gap-1.5 whitespace-nowrap">
                    <svg class="w-4 h-4 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Struktur Organisasi
                </a>
                <a href="#guru" class="text-emerald-200 hover:text-white px-3 py-1.5 rounded-full hover:bg-emerald-700 transition flex items-center gap-1.5 whitespace-nowrap">
                    <svg class="w-4 h-4 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    </svg>
                    Guru & Tenaga Kependidikan
                </a>
                <a href="#fasilitas" class="text-emerald-200 hover:text-white px-3 py-1.5 rounded-full hover:bg-emerald-700 transition flex items-center gap-1.5 whitespace-nowrap">
                    <svg class="w-4 h-4 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h4m-4 0V11m0 0h4m-4 0H9" />
                    </svg>
                    Fasilitas Sekolah
                </a>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-24">
        
        <!-- 1. SEJARAH & IDENTITAS -->
        <section id="sejarah" class="scroll-mt-32">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-50 border border-emerald-100 rounded-full text-emerald-600 text-xs font-bold uppercase tracking-wider">
                        Profil & Perjalanan
                    </div>
                    <h2 class="text-3xl font-extrabold text-slate-900">Sejarah SMA AL-ISLAMI</h2>
                    <div class="text-gray-600 leading-relaxed space-y-4">
                        {!! nl2br(e($schoolHistory)) !!}
                    </div>
                    
                    <!-- Filosofi & Identitas Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4">
                        <div class="modern-card modern-card-hover modern-card-soft p-5">
                            <div class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-lg flex items-center justify-center mb-3">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h4 class="font-bold text-slate-900 mb-1">Filosofi Logo</h4>
                            <p class="text-xs text-gray-500">{{ $logoPhilosophy }}</p>
                        </div>

                        <div class="modern-card modern-card-hover modern-card-soft p-5">
                            <div class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-lg flex items-center justify-center mb-3">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h4 class="font-bold text-slate-900 mb-1">Nilai Utama (Core Values)</h4>
                            <p class="text-xs text-gray-500">{{ $coreValues }}</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 flex justify-center">
                    <div class="relative bg-gradient-to-br from-emerald-50 to-white p-8 rounded-3xl border border-emerald-100 text-center shadow-sm w-full max-w-md">
                        <img src="{{ Storage::url('SMA AL-ISLAMI.png') }}" alt="Logo SMA AL-ISLAMI" class="w-48 h-48 mx-auto object-contain mb-4 drop-shadow-md">
                        <h3 class="text-xl font-bold text-slate-900">SMA AL-ISLAMI</h3>
                        <p class="text-xs text-emerald-600 font-semibold uppercase tracking-widest mt-1">Unggul • Islami • Profesional</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. VISI & MISI -->
        <section id="visi-misi" class="scroll-mt-32 bg-emerald-50 rounded-3xl p-8 md:p-12 shadow-sm border border-emerald-100">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-white border border-emerald-200 rounded-full text-emerald-700 text-xs font-bold uppercase tracking-wider mb-4">
                    Arah Pengembangan
                </div>
                <h2 class="text-3xl font-extrabold text-emerald-950">Visi & Misi Sekolah</h2>
                <p class="text-gray-600 text-sm max-w-2xl mx-auto mt-2">Fokus utama pengembangan sekolah dalam membentuk generasi beriman, cerdas, dan berakhlakul karimah.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Visi Card -->
                <div class="modern-card modern-card-hover modern-card-soft p-8 border-t-4 border-emerald-600 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-lg bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold">V</div>
                            <h3 class="text-2xl font-bold text-slate-900">Visi Utama</h3>
                        </div>
                        <p class="text-slate-700 italic text-lg leading-relaxed bg-emerald-50/50 p-5 rounded-xl border border-emerald-100">
                            "{{ $schoolVision }}"
                        </p>
                    </div>
                </div>

                <!-- Misi Card -->
                <div class="modern-card modern-card-hover modern-card-soft p-8 border-t-4 border-emerald-600">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-lg bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold">M</div>
                        <h3 class="text-2xl font-bold text-slate-900">Misi Sekolah</h3>
                    </div>
                    @php
                        $misiLines = array_filter(explode("\n", $schoolMission));
                    @endphp
                    <ul class="space-y-3 text-slate-600 text-sm">
                        @foreach($misiLines as $misiItem)
                        <li class="flex items-start gap-3">
                            <svg class="h-5 w-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>{{ trim($misiItem) }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>

        <!-- 3. STRUKTUR ORGANISASI -->
        <section id="struktur" class="scroll-mt-32">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-50 border border-emerald-100 rounded-full text-emerald-600 text-xs font-bold uppercase tracking-wider mb-4">
                    Kepemimpinan & Tata Pengelola
                </div>
                <h2 class="text-3xl font-extrabold text-slate-900">Struktur Organisasi Sekolah</h2>
                <p class="mt-4 text-gray-600">Daftar pimpinan, guru, dan staf tata usaha SMA AL-ISLAMI.</p>
            </div>

            @php 
                $headmaster = $organizations->firstWhere('order', 1); 
                $members = $organizations->where('order', '>', 1)->values();
                $memberCount = $members->count();
            @endphp

            @if($headmaster || $memberCount > 0)
            <div class="w-full overflow-x-auto px-2">
                <div class="min-w-0 w-full">

                    {{-- ===== LEVEL 1: KEPALA SEKOLAH ===== --}}
                    @if($headmaster)
                    <div class="flex justify-center">
                        <div class="bg-emerald-800 border-t-4 border-emerald-400 rounded-2xl shadow-lg p-5 text-center w-52 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
                            <!-- Motif Lingkaran -->
                            <div class="absolute inset-0 opacity-[0.12] pointer-events-none">
                                <svg viewBox="0 0 100 100" class="w-full h-full" fill="white">
                                    <circle cx="90" cy="10" r="35"/>
                                    <circle cx="10" cy="85" r="25"/>
                                    <circle cx="70" cy="95" r="12"/>
                                </svg>
                            </div>
                            <div class="relative w-20 h-20 bg-emerald-700 rounded-full mx-auto mb-3 overflow-hidden ring-4 ring-emerald-600">
                                <img src="{{ $headmaster->image ? asset('storage/' . $headmaster->image) : 'https://ui-avatars.com/api/?name='.urlencode($headmaster->name).'&color=047857&background=d1fae5&size=160' }}" alt="{{ $headmaster->name }}" class="w-full h-full object-cover">
                            </div>
                            <p class="relative text-xs font-bold text-emerald-300 uppercase tracking-wide mb-1">{{ $headmaster->position }}</p>
                            <h4 class="relative font-bold text-white text-sm leading-snug">{{ $headmaster->name }}</h4>
                        </div>
                    </div>
                    @endif



                    {{-- ===== LEVEL 2: ANGGOTA STRUKTURAL ===== --}}
                    @if($memberCount > 0)
                    <div class="flex justify-center flex-wrap gap-4 sm:gap-6 mt-8">
                        @foreach($members as $i => $org)
                        @php
                            $circles = [
                                "<circle cx='85' cy='15' r='30'/><circle cx='15' cy='80' r='20'/><circle cx='70' cy='90' r='10'/>",
                                "<circle cx='80' cy='20' r='28'/><circle cx='20' cy='75' r='22'/><circle cx='90' cy='80' r='12'/>",
                                "<circle cx='90' cy='10' r='32'/><circle cx='10' cy='85' r='18'/><circle cx='60' cy='95' r='14'/>",
                                "<circle cx='75' cy='15' r='25'/><circle cx='15' cy='70' r='20'/><circle cx='85' cy='75' r='15'/>",
                                "<circle cx='88' cy='12' r='30'/><circle cx='12' cy='88' r='22'/><circle cx='55' cy='92' r='11'/>",
                                "<circle cx='82' cy='18' r='28'/><circle cx='18' cy='82' r='24'/><circle cx='72' cy='88' r='10'/>",
                            ];
                            $circlePattern = $circles[$i % count($circles)];
                        @endphp
                        <div class="bg-emerald-800 border border-emerald-600 rounded-2xl shadow-md p-4 text-center w-44 hover:shadow-xl hover:bg-emerald-700 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
                            <!-- Motif Lingkaran -->
                            <div class="absolute inset-0 opacity-[0.12] pointer-events-none">
                                <svg viewBox="0 0 100 100" class="w-full h-full" fill="white">{!! $circlePattern !!}</svg>
                            </div>
                            <div class="relative w-16 h-16 bg-emerald-700 rounded-full mx-auto mb-3 overflow-hidden ring-4 ring-emerald-600 shadow-sm">
                                <img src="{{ $org->image ? asset('storage/' . $org->image) : 'https://ui-avatars.com/api/?name='.urlencode($org->name).'&color=047857&background=d1fae5&size=128' }}" alt="{{ $org->name }}" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                            </div>
                            <p class="relative text-xs font-bold text-emerald-300 uppercase tracking-wide mb-1 leading-tight">{{ $org->position }}</p>
                            <h4 class="relative font-semibold text-white text-xs leading-snug">{{ $org->name }}</h4>
                        </div>
                        @endforeach
                    </div>
                    @endif

                </div>
            </div>
            @else
            <div class="py-10 text-center text-gray-500 bg-white rounded-2xl border border-dashed border-emerald-200">
                Belum ada data struktur organisasi yang ditambahkan.
            </div>
            @endif
        </section>

        <!-- 4. GURU & TENAGA KEPENDIDIKAN -->
        <section id="guru" class="scroll-mt-32">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-50 border border-emerald-100 rounded-full text-emerald-600 text-xs font-bold uppercase tracking-wider mb-4">
                    Tim Pengajar & Staf
                </div>
                <h2 class="text-3xl font-extrabold text-slate-900">Guru & Tenaga Kependidikan</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Daftar pengajar beserta profil singkat, terdiri dari nama, NIP, dan mata pelajaran yang diampu.</p>
            </div>

            <div class="modern-card modern-card-soft overflow-hidden max-w-5xl mx-auto">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-emerald-50">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-bold text-emerald-800 uppercase tracking-wider">No</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-emerald-800 uppercase tracking-wider">Nama</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-emerald-800 uppercase tracking-wider">NIP</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-emerald-800 uppercase tracking-wider">Mata Pelajaran</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 bg-white">
                            @forelse($teachers as $teacher)
                            <tr class="hover:bg-emerald-50/50 transition">
                                <td class="px-6 py-4 text-sm text-gray-500">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full overflow-hidden flex-shrink-0 bg-gray-100">
                                            <img src="{{ $teacher->image ? asset('storage/' . $teacher->image) : 'https://ui-avatars.com/api/?name='.urlencode($teacher->name).'&color=047857&background=d1fae5&size=80' }}" alt="{{ $teacher->name }}" class="w-full h-full object-cover">
                                        </div>
                                        <span class="text-sm font-semibold text-slate-900">{{ $teacher->name }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $teacher->nip ?? '—' }}</td>
                                <td class="px-6 py-4 text-sm text-emerald-700 font-medium">{{ $teacher->subject ?? '—' }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-6 py-10 text-center text-gray-500">
                                    Belum ada data guru yang ditambahkan.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- 5. FASILITAS SEKOLAH -->
        <section id="fasilitas" class="scroll-mt-32">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-50 border border-emerald-100 rounded-full text-emerald-600 text-xs font-bold uppercase tracking-wider mb-4">
                    Sarana Penunjang Belajar
                </div>
                <h2 class="text-3xl font-extrabold text-slate-900">Fasilitas Penunjang Pendidikan</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Sarana dan prasarana modern untuk mendukung kegiatan akademik, praktik vokasi, dan pengembangan bakat siswa.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($facilities as $facility)
                <div class="modern-card modern-card-hover modern-card-soft overflow-hidden group">
                    <div class="h-48 overflow-hidden bg-slate-200 relative">
                        <img src="{{ $facility->image ? (str_starts_with($facility->image, 'http') ? $facility->image : asset('storage/' . $facility->image)) : 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=600&q=80' }}" alt="{{ $facility->name }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        @if($facility->category)
                        <div class="absolute top-3 left-3 bg-emerald-600 text-white text-xs font-bold px-2.5 py-1 rounded">{{ $facility->category }}</div>
                        @endif
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-slate-900 text-lg mb-2">{{ $facility->name }}</h3>
                        <p class="text-gray-600 text-xs leading-relaxed">{{ $facility->description ?? 'Deskripsi fasilitas belum tersedia.' }}</p>
                    </div>
                </div>
                @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3 py-10 text-center text-gray-500">
                    Belum ada data fasilitas yang ditambahkan.
                </div>
                @endforelse
            </div>
        </section>

    </div>
</x-app-layout>
