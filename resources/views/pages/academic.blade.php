<x-app-layout>
    <!-- Header Banner -->
    <div class="relative overflow-hidden bg-gradient-to-br from-emerald-950 via-emerald-900 to-emerald-700 pt-36 pb-20 text-white text-center">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-16 left-0 w-72 h-72 bg-emerald-400/20 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-20 right-0 w-96 h-96 bg-white/20 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 w-[34rem] h-[34rem] -translate-x-1/2 -translate-y-1/2 bg-white/5 rounded-full blur-3xl"></div>
        </div>
        <div class="relative z-10 max-w-4xl mx-auto px-4">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-white/10 backdrop-blur border border-white/15 rounded-full text-white/90 text-xs font-bold uppercase tracking-wider mb-4">
                Program Pembelajaran & Jadwal
            </div>
            <h1 class="text-4xl md:text-5xl font-black mb-4 tracking-tight">Akademik Sekolah</h1>
            <p class="text-emerald-100 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed">Informasi Kurikulum Merdeka, Kalender Akademik Tahunan, serta Daftar Guru & Tenaga Kependidikan.</p>
        </div>
    </div>

    <!-- Quick Navigation Submenu Sticky -->
    <div class="bg-emerald-900 border-b border-emerald-700 sticky top-20 z-30 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center space-x-4 sm:space-x-8 overflow-x-auto py-3 text-sm font-semibold">
                <a href="#kurikulum" class="text-emerald-200 hover:text-white px-3 py-1.5 rounded-full hover:bg-emerald-700 transition flex items-center gap-1.5 whitespace-nowrap">
                    <svg class="w-4 h-4 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    1. Kurikulum
                </a>
                <a href="#kalender" class="text-emerald-200 hover:text-white px-3 py-1.5 rounded-full hover:bg-emerald-700 transition flex items-center gap-1.5 whitespace-nowrap">
                    <svg class="w-4 h-4 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    2. Kalender Akademik
                </a>
                <a href="#guru" class="text-emerald-200 hover:text-white px-3 py-1.5 rounded-full hover:bg-emerald-700 transition flex items-center gap-1.5 whitespace-nowrap">
                    <svg class="w-4 h-4 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    3. Guru & Tenaga Kependidikan
                </a>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-24">
        
        <!-- 1. KURIKULUM -->
        <section id="kurikulum" class="scroll-mt-32">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-50 border border-emerald-100 rounded-full text-emerald-600 text-xs font-bold uppercase tracking-wider mb-4">
                    Sistem Pembelajaran Utama
                </div>
                <h2 class="text-3xl font-extrabold text-slate-900">1. Kurikulum Merdeka & Vokasi Berbasis Industri</h2>
                <p class="mt-4 text-gray-600 max-w-3xl mx-auto">
                    SMA AL-ISLAMI menerapkan <strong>Kurikulum Merdeka</strong> yang terintegrasi dengan kebutuhan kompetensi Industri & Dunia Kerja (IDUKA). Kurikulum ini dirancang fleksibel untuk memberi keleluasaan kepada pendidik dalam menciptakan pembelajaran berkualitas yang berfokus pada materi esensial, pengembangan karakter, serta minat peserta didik.
                </p>
            </div>

            <!-- Detail Pilar Kurikulum Merdeka Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="modern-card modern-card-hover modern-card-soft p-8">
                    <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Pembelajaran Berbasis Projek (PBL)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Siswa belajar melalui penyelesaian masalah riil industri dan pembuatan produk karya secara langsung untuk melatih daya kritis dan kemandirian.</p>
                </div>

                <div class="modern-card modern-card-hover modern-card-soft p-8">
                    <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Penguatan Profil Pelajar Pancasila (P5)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Pembentukan kepribadian siswa yang beriman, bertakwa, berakhlak mulia, bernalar kritis, bergotong royong, dan kreatif.</p>
                </div>

                <div class="modern-card modern-card-hover modern-card-soft p-8">
                    <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Praktek Kerja Lapangan (PKL)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Program magang kerja wajib di perusahaan mitra untuk mengasah pengalaman profesional dan etika kerja teknis siswa.</p>
                </div>
            </div>
        </section>

        <!-- 2. KALENDER AKADEMIK -->
        <section id="kalender" class="scroll-mt-32 bg-slate-50 p-8 sm:p-12 rounded-3xl border border-slate-200">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-green-100 border border-green-200 rounded-full text-green-700 text-xs font-bold uppercase tracking-wider mb-4">
                    Penjadwalan Resmi
                </div>
                <h2 class="text-3xl font-extrabold text-slate-900">2. Kalender Akademik 2026/2027</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Jadwal lengkap ujian sekolah, libur nasional, rapat wali murid, dan kegiatan tahunan sekolah.</p>
            </div>

            <!-- Agenda Kalender Table -->
            <div class="modern-card modern-card-hover overflow-hidden max-w-4xl mx-auto">
                <div class="divide-y divide-gray-100">
                    
                    <div class="p-5 sm:p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-slate-50 transition">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-blue-100 text-blue-700 rounded-xl flex flex-col items-center justify-center font-bold flex-shrink-0">
                                <span class="text-xs uppercase">JUL</span>
                                <span class="text-lg leading-tight">13-17</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-base sm:text-lg">Masa Pengenalan Lingkungan Sekolah (MPLS)</h4>
                                <p class="text-gray-500 text-xs sm:text-sm">Orientasi dan pembekalan kedisiplinan bagi calon siswa baru tahun ajaran 2026/2027.</p>
                            </div>
                        </div>
                        <span class="inline-block px-3 py-1 bg-blue-50 text-blue-600 text-xs font-bold rounded-full w-max">Kegiatan Sekolah</span>
                    </div>

                    <div class="p-5 sm:p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-slate-50 transition">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-amber-100 text-amber-700 rounded-xl flex flex-col items-center justify-center font-bold flex-shrink-0">
                                <span class="text-xs uppercase">SEP</span>
                                <span class="text-lg leading-tight">21-26</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-base sm:text-lg">Asesmen Sumatif Tengah Semester (ASTS) Ganjil</h4>
                                <p class="text-gray-500 text-xs sm:text-sm">Pelaksanaan evaluasi pembelajaran pertengahan semester ganjil bagi seluruh tingkatan kelas.</p>
                            </div>
                        </div>
                        <span class="inline-block px-3 py-1 bg-amber-50 text-amber-600 text-xs font-bold rounded-full w-max">Jadwal Ujian</span>
                    </div>

                    <div class="p-5 sm:p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-slate-50 transition">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-purple-100 text-purple-700 rounded-xl flex flex-col items-center justify-center font-bold flex-shrink-0">
                                <span class="text-xs uppercase">DES</span>
                                <span class="text-lg leading-tight">07-18</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-base sm:text-lg">Asesmen Sumatif Akhir Semester (ASAS) & Rapor</h4>
                                <p class="text-gray-500 text-xs sm:text-sm">Ujian kenaikan/akhir semester ganjil dan penyerahan laporan hasil belajar siswa.</p>
                            </div>
                        </div>
                        <span class="inline-block px-3 py-1 bg-purple-50 text-purple-600 text-xs font-bold rounded-full w-max">Jadwal Ujian</span>
                    </div>

                    <div class="p-5 sm:p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-slate-50 transition">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-rose-100 text-rose-700 rounded-xl flex flex-col items-center justify-center font-bold flex-shrink-0">
                                <span class="text-xs uppercase">DES</span>
                                <span class="text-lg leading-tight">21-31</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-base sm:text-lg">Libur Semester Ganjil & Tahun Baru</h4>
                                <p class="text-gray-500 text-xs sm:text-sm">Masa libur sekolah akhir semester ganjil untuk peserta didik dan tenaga pengajar.</p>
                            </div>
                        </div>
                        <span class="inline-block px-3 py-1 bg-rose-50 text-rose-600 text-xs font-bold rounded-full w-max">Libur Sekolah</span>
                    </div>

                    <div class="p-5 sm:p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-slate-50 transition">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-emerald-100 text-emerald-700 rounded-xl flex flex-col items-center justify-center font-bold flex-shrink-0">
                                <span class="text-xs uppercase">MEI</span>
                                <span class="text-lg leading-tight">10-15</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-base sm:text-lg">Uji Kompetensi Keahlian (UKK) Vokasi</h4>
                                <p class="text-gray-500 text-xs sm:text-sm">Ujian sertifikasi keahlian praktis kelas XII yang diuji langsung oleh tim asesor industri mitra.</p>
                            </div>
                        </div>
                        <span class="inline-block px-3 py-1 bg-emerald-50 text-emerald-600 text-xs font-bold rounded-full w-max">Sertifikasi Vokasi</span>
                    </div>

                </div>
            </div>
            
            <div class="text-center mt-8">
                <a href="{{ route('downloads.index') }}" class="inline-flex items-center text-sm font-bold text-blue-600 hover:text-blue-700 transition gap-1.5">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    Unduh Kalender Akademik Resmi Format PDF
                </a>
            </div>
        </section>

        <!-- 3. GURU & TENAGA KEPENDIDIKAN -->
        <section id="guru" class="scroll-mt-32">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-purple-50 border border-purple-100 rounded-full text-purple-600 text-xs font-bold uppercase tracking-wider mb-4">
                    Tim Pengajar & Staf
                </div>
                <h2 class="text-3xl font-extrabold text-slate-900">3. Guru & Tenaga Kependidikan</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Daftar pengajar profesional beserta profil singkat, bidang keahlian, dan kualifikasi pendidikannya.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse($teachers as $teacher)
                <div class="modern-card modern-card-hover modern-card-soft overflow-hidden group text-center p-6">
                    <div class="w-28 h-28 mx-auto rounded-full overflow-hidden mb-4 ring-4 ring-emerald-50 group-hover:ring-emerald-100 transition">
                        <img src="{{ $teacher->image ? asset('storage/' . $teacher->image) : 'https://ui-avatars.com/api/?name='.urlencode($teacher->name).'&color=0f172a&background=f1f5f9' }}" alt="{{ $teacher->name }}" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-bold text-slate-900 text-lg mb-1">{{ $teacher->name }}</h4>
                    <p class="text-xs font-semibold text-emerald-600 uppercase tracking-wider mb-3">{{ $teacher->subject ?? 'Guru Mata Pelajaran' }}</p>
                </div>
                @empty
                <div class="col-span-1 sm:col-span-2 lg:col-span-4 py-10 text-center text-gray-500">
                    Belum ada data guru yang ditambahkan.
                </div>
                @endforelse
            </div>
        </section>

    </div>
</x-app-layout>
