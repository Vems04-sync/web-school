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
                Pengembangan Bakat & Prestasi
            </div>
            <h1 class="text-4xl md:text-5xl font-black mb-4 tracking-tight">Kesiswaan</h1>
            <p class="text-emerald-100 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed">Ruang pembinaan siswa yang menampilkan ekstrakurikuler, prestasi, dan kegiatan pengembangan potensi secara lebih terarah dan modern.</p>

            <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4 text-left">
                <div class="rounded-2xl p-5 border border-emerald-500/30 bg-emerald-800/80 backdrop-blur-md shadow-lg">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-9 h-9 bg-emerald-500/30 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-emerald-100" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <p class="text-[10px] uppercase tracking-widest text-emerald-200 font-bold">Ekstrakurikuler</p>
                    </div>
                    <p class="text-2xl font-black text-white">6 Program Aktif</p>
                </div>
                <div class="rounded-2xl p-5 border border-emerald-500/30 bg-emerald-800/80 backdrop-blur-md shadow-lg">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-9 h-9 bg-emerald-500/30 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-emerald-100" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <p class="text-[10px] uppercase tracking-widest text-emerald-200 font-bold">Prestasi</p>
                    </div>
                    <p class="text-2xl font-black text-white">32+ Pencapaian</p>
                </div>
                <div class="rounded-2xl p-5 border border-emerald-500/30 bg-emerald-800/80 backdrop-blur-md shadow-lg">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-9 h-9 bg-emerald-500/30 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-emerald-100" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                        </div>
                        <p class="text-[10px] uppercase tracking-widest text-emerald-200 font-bold">Pembinaan</p>
                    </div>
                    <p class="text-2xl font-black text-white">Karakter & Kepemimpinan</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Sub-Navigasi Sticky -->
    <div class="bg-emerald-900 border-b border-emerald-700 sticky top-20 z-30 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center space-x-2 sm:space-x-6 overflow-x-auto py-3 text-sm font-semibold">
                <a href="#ekskul" class="text-emerald-200 hover:text-white px-4 py-2 rounded-full hover:bg-emerald-700 transition flex items-center gap-1.5 whitespace-nowrap">
                    <svg class="w-4 h-4 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    1. Ekstrakurikuler
                </a>
                <a href="#prestasi" class="text-emerald-200 hover:text-white px-4 py-2 rounded-full hover:bg-emerald-700 transition flex items-center gap-1.5 whitespace-nowrap">
                    <svg class="w-4 h-4 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    2. Prestasi Siswa
                </a>
            </div>
        </div>
    </div>

    <div class="bg-emerald-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-24">

        <!-- 1. EKSTRAKURIKULER -->
        <section id="ekskul" class="scroll-mt-32">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-50 border border-emerald-200 rounded-full text-emerald-700 text-xs font-bold uppercase tracking-wider mb-4">
                    Kegiatan di Luar Jam Belajar
                </div>
                <h2 class="text-3xl font-extrabold text-slate-900">1. Ekstrakurikuler Sekolah</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Berbagai program pengembangan minat, bakat, dan kepribadian siswa yang diselenggarakan di luar jam pelajaran formal.</p>
            </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Ekskul: Pramuka -->
                <div class="modern-card modern-card-hover overflow-hidden group bg-white border border-slate-200/80 shadow-xl shadow-slate-200/60">
                    <div class="h-52 bg-gradient-to-br from-emerald-500 via-green-600 to-teal-700 flex items-end justify-start relative overflow-hidden p-6">
                        <div class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1530538987395-032d1800fdd4?auto=format&fit=crop&w=600&q=60')] bg-cover bg-center group-hover:scale-105 transition duration-500"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/55 via-slate-950/10 to-transparent"></div>
                        <div class="relative z-10 text-white text-center">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/15 backdrop-blur border border-white/20 text-[10px] font-black uppercase tracking-[0.3em] mb-3">Pramuka</span>
                            <svg class="w-14 h-14 mx-auto mb-1 opacity-95 drop-shadow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-start justify-between gap-4 mb-3">
                            <h3 class="font-black text-slate-900 text-lg leading-snug">Pramuka Penggalang</h3>
                            <span class="text-xs bg-emerald-50 text-emerald-700 font-black px-2.5 py-1 rounded-full whitespace-nowrap">Wajib</span>
                        </div>
                        <p class="text-gray-500 text-sm leading-relaxed mb-4">Membentuk disiplin, kepemimpinan, dan cinta alam melalui kegiatan kepanduan dan berbagai ajang jambore daerah & nasional.</p>
                        <div class="pt-4 border-t border-slate-100 flex items-center justify-between gap-3 text-xs text-gray-400">
                            <span class="inline-flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                Setiap Jum'at
                            </span>
                            <span class="font-semibold text-slate-700">14.00 – 16.00 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul: OSIS -->
                <div class="overflow-hidden rounded-2xl group border border-emerald-200 bg-white shadow-lg shadow-emerald-100/60 hover:shadow-xl hover:shadow-emerald-200/60 hover:-translate-y-1 transition-all duration-300">
                    <div class="h-44 bg-gradient-to-br from-teal-500 via-emerald-600 to-green-700 relative overflow-hidden flex items-center justify-center">
                        <div class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=600&q=60')] bg-cover bg-center group-hover:scale-105 transition duration-500"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-teal-900/60 to-transparent"></div>
                        <div class="relative z-10 text-white text-center">
                            <svg class="w-12 h-12 mx-auto mb-2 drop-shadow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="px-3 py-1 rounded-full bg-white/20 text-[10px] font-black uppercase tracking-widest border border-white/30">OSIS</span>
                        </div>
                    </div>
                    <div class="p-5 border-t-4 border-teal-500">
                        <div class="flex items-start justify-between gap-3 mb-2">
                            <h3 class="font-black text-emerald-900 text-base leading-snug">OSIS & MPK</h3>
                            <span class="text-xs bg-teal-100 text-teal-700 font-black px-2.5 py-1 rounded-full whitespace-nowrap">Kepemimpinan</span>
                        </div>
                        <p class="text-emerald-700/70 text-sm leading-relaxed mb-4">Organisasi Intra Sekolah sebagai wadah pengembangan jiwa kepemimpinan, demokrasi, dan tanggung jawab sosial siswa.</p>
                        <div class="pt-3 border-t border-emerald-100 flex items-center justify-between text-xs text-emerald-600">
                            <span class="flex items-center gap-1.5 font-semibold">
                                <svg class="w-3.5 h-3.5 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                Setiap Kamis
                            </span>
                            <span class="font-black text-emerald-800">14.00 - 16.00 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul: Olahraga -->
                <div class="overflow-hidden rounded-2xl group border border-emerald-200 bg-white shadow-lg shadow-emerald-100/60 hover:shadow-xl hover:shadow-emerald-200/60 hover:-translate-y-1 transition-all duration-300">
                    <div class="h-44 bg-gradient-to-br from-green-500 via-emerald-600 to-teal-700 relative overflow-hidden flex items-center justify-center">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.25),transparent_50%)]"></div>
                        <div class="relative z-10 text-white text-center">
                            <svg class="w-12 h-12 mx-auto mb-2 drop-shadow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            <span class="px-3 py-1 rounded-full bg-white/20 text-[10px] font-black uppercase tracking-widest border border-white/30">Olahraga</span>
                        </div>
                    </div>
                    <div class="p-5 border-t-4 border-green-500">
                        <div class="flex items-start justify-between gap-3 mb-2">
                            <h3 class="font-black text-emerald-900 text-base leading-snug">Olahraga Prestasi</h3>
                            <span class="text-xs bg-green-100 text-green-700 font-black px-2.5 py-1 rounded-full whitespace-nowrap">Prestasi</span>
                        </div>
                        <p class="text-emerald-700/70 text-sm leading-relaxed mb-4">Club olahraga futsal, basket, voli, dan bulu tangkis yang aktif mengikuti turnamen antar sekolah dan kejuaraan tingkat kabupaten.</p>
                        <div class="pt-3 border-t border-emerald-100 flex items-center justify-between text-xs text-emerald-600">
                            <span class="flex items-center gap-1.5 font-semibold">
                                <svg class="w-3.5 h-3.5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                Selasa & Sabtu
                            </span>
                            <span class="font-black text-emerald-800">15.00 - 17.00 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul: Seni -->
                <div class="overflow-hidden rounded-2xl group border border-emerald-200 bg-white shadow-lg shadow-emerald-100/60 hover:shadow-xl hover:shadow-emerald-200/60 hover:-translate-y-1 transition-all duration-300">
                    <div class="h-44 bg-gradient-to-br from-emerald-400 via-teal-500 to-cyan-600 relative overflow-hidden flex items-center justify-center">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.25),transparent_50%)]"></div>
                        <div class="relative z-10 text-white text-center">
                            <svg class="w-12 h-12 mx-auto mb-2 drop-shadow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                            </svg>
                            <span class="px-3 py-1 rounded-full bg-white/20 text-[10px] font-black uppercase tracking-widest border border-white/30">Seni</span>
                        </div>
                    </div>
                    <div class="p-5 border-t-4 border-teal-400">
                        <div class="flex items-start justify-between gap-3 mb-2">
                            <h3 class="font-black text-emerald-900 text-base leading-snug">Seni & Budaya</h3>
                            <span class="text-xs bg-teal-100 text-teal-700 font-black px-2.5 py-1 rounded-full whitespace-nowrap">Kreatif</span>
                        </div>
                        <p class="text-emerald-700/70 text-sm leading-relaxed mb-4">Club seni musik, tari tradisional, teater, dan kaligrafi untuk mengekspresikan kreativitas dan melestarikan kebudayaan bangsa.</p>
                        <div class="pt-3 border-t border-emerald-100 flex items-center justify-between text-xs text-emerald-600">
                            <span class="flex items-center gap-1.5 font-semibold">
                                <svg class="w-3.5 h-3.5 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                Rabu
                            </span>
                            <span class="font-black text-emerald-800">14.00 - 16.30 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul: Robotik & IT -->
                <div class="overflow-hidden rounded-2xl group border border-emerald-200 bg-white shadow-lg shadow-emerald-100/60 hover:shadow-xl hover:shadow-emerald-200/60 hover:-translate-y-1 transition-all duration-300">
                    <div class="h-44 bg-gradient-to-br from-emerald-600 via-green-600 to-emerald-800 relative overflow-hidden flex items-center justify-center">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.25),transparent_50%)]"></div>
                        <div class="relative z-10 text-white text-center">
                            <svg class="w-12 h-12 mx-auto mb-2 drop-shadow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2-2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="px-3 py-1 rounded-full bg-white/20 text-[10px] font-black uppercase tracking-widest border border-white/30">IT & Robotik</span>
                        </div>
                    </div>
                    <div class="p-5 border-t-4 border-emerald-600">
                        <div class="flex items-start justify-between gap-3 mb-2">
                            <h3 class="font-black text-emerald-900 text-base leading-snug">Robotik & Pemrograman</h3>
                            <span class="text-xs bg-emerald-100 text-emerald-700 font-black px-2.5 py-1 rounded-full whitespace-nowrap">Teknologi</span>
                        </div>
                        <p class="text-emerald-700/70 text-sm leading-relaxed mb-4">Mengembangkan kemampuan coding, desain robotik, dan inovasi teknologi untuk menghadapi tantangan revolusi industri 4.0.</p>
                        <div class="pt-3 border-t border-emerald-100 flex items-center justify-between text-xs text-emerald-600">
                            <span class="flex items-center gap-1.5 font-semibold">
                                <svg class="w-3.5 h-3.5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                Senin
                            </span>
                            <span class="font-black text-emerald-800">14.00 - 16.30 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul: PMR -->
                <div class="overflow-hidden rounded-2xl group border border-emerald-200 bg-white shadow-lg shadow-emerald-100/60 hover:shadow-xl hover:shadow-emerald-200/60 hover:-translate-y-1 transition-all duration-300">
                    <div class="h-44 bg-gradient-to-br from-teal-600 via-emerald-700 to-green-800 relative overflow-hidden flex items-center justify-center">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.25),transparent_50%)]"></div>
                        <div class="relative z-10 text-white text-center">
                            <svg class="w-12 h-12 mx-auto mb-2 drop-shadow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            <span class="px-3 py-1 rounded-full bg-white/20 text-[10px] font-black uppercase tracking-widest border border-white/30">PMR</span>
                        </div>
                    </div>
                    <div class="p-5 border-t-4 border-teal-600">
                        <div class="flex items-start justify-between gap-3 mb-2">
                            <h3 class="font-black text-emerald-900 text-base leading-snug">Palang Merah Remaja (PMR)</h3>
                            <span class="text-xs bg-teal-100 text-teal-700 font-black px-2.5 py-1 rounded-full whitespace-nowrap">Kemanusiaan</span>
                        </div>
                        <p class="text-emerald-700/70 text-sm leading-relaxed mb-4">Melatih kepedulian sosial, kemampuan pertolongan pertama, dan menanamkan jiwa sukarela sejak dini pada siswa.</p>
                        <div class="pt-3 border-t border-emerald-100 flex items-center justify-between text-xs text-emerald-600">
                            <span class="flex items-center gap-1.5 font-semibold">
                                <svg class="w-3.5 h-3.5 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                Sabtu
                            </span>
                            <span class="font-black text-emerald-800">08.00 - 10.00 WIB</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CTA Daftar Ekskul -->
            <div class="mt-12 relative overflow-hidden text-center bg-gradient-to-br from-emerald-700 via-emerald-600 to-teal-600 rounded-3xl p-8 md:p-12 text-white shadow-2xl shadow-emerald-900/30">
                <!-- Decorative circles -->
                <div class="absolute -top-10 -right-10 w-48 h-48 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
                <div class="absolute -bottom-10 -left-10 w-48 h-48 bg-emerald-950/30 rounded-full blur-2xl pointer-events-none"></div>
                <div class="relative z-10">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-white/15 backdrop-blur rounded-2xl mb-5">
                        <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-black mb-3 text-white">Tertarik Bergabung Ekskul?</h3>
                    <p class="text-emerald-100 mb-8 max-w-lg mx-auto text-sm leading-relaxed">Daftarkan dirimu ke ekstrakurikuler pilihan dan kembangkan potensi terbaikmu bersama kami!</p>
                    <a href="https://forms.google.com" target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center gap-2.5 px-8 py-4 bg-white text-emerald-700 font-black text-base rounded-2xl shadow-lg hover:bg-emerald-50 hover:-translate-y-1 transition duration-200">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                        Daftar Ekstrakurikuler (Google Form)
                    </a>
                </div>
            </div>
        </section>

        <!-- 2. PRESTASI SISWA -->
        <section id="prestasi" class="scroll-mt-32">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-50 border border-emerald-200 rounded-full text-emerald-700 text-xs font-bold uppercase tracking-wider mb-4">
                    Kebanggaan Sekolah
                </div>
                <h2 class="text-3xl font-extrabold text-slate-900">2. Prestasi & Pencapaian Siswa</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Galeri pencapaian membanggakan siswa-siswi SMA AL-ISLAMI di berbagai kompetisi lokal, nasional, maupun internasional.</p>
            </div>

            <!-- Statistik Prestasi -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
                <div class="rounded-2xl p-6 text-center bg-gradient-to-br from-emerald-600 to-emerald-800 text-white shadow-xl shadow-emerald-300/30 hover:-translate-y-1 transition duration-200">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-white/15 mb-4">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4m8 14v-4m-2 2h4M5 21v-4M3 19h4m14-4l-3 3m0-3v3h3M7 7l3 3m-3 0h3V7" />
                        </svg>
                    </div>
                    <div class="text-4xl font-black mb-1">32+</div>
                    <div class="text-xs font-semibold uppercase tracking-wider text-emerald-200">Piala Kejuaraan</div>
                </div>
                <div class="rounded-2xl p-6 text-center bg-gradient-to-br from-teal-600 to-teal-800 text-white shadow-xl shadow-teal-300/30 hover:-translate-y-1 transition duration-200">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-white/15 mb-4">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
                        </svg>
                    </div>
                    <div class="text-4xl font-black mb-1">15</div>
                    <div class="text-xs font-semibold uppercase tracking-wider text-teal-200">Prestasi Nasional</div>
                </div>
                <div class="rounded-2xl p-6 text-center bg-gradient-to-br from-green-600 to-green-800 text-white shadow-xl shadow-green-300/30 hover:-translate-y-1 transition duration-200">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-white/15 mb-4">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3l7 4v5c0 5-3.5 9.4-7 9.4S5 17 5 12V7l7-4z" />
                        </svg>
                    </div>
                    <div class="text-4xl font-black mb-1">48</div>
                    <div class="text-xs font-semibold uppercase tracking-wider text-green-200">Prestasi Regional</div>
                </div>
                <div class="rounded-2xl p-6 text-center bg-gradient-to-br from-emerald-500 to-teal-700 text-white shadow-xl shadow-emerald-300/30 hover:-translate-y-1 transition duration-200">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-white/15 mb-4">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l2.04 6.275a1 1 0 00.95.69h6.6c.969 0 1.371 1.24.588 1.81l-5.34 3.878a1 1 0 00-.364 1.118l2.04 6.275c.3.921-.755 1.688-1.538 1.118l-5.34-3.878a1 1 0 00-1.175 0l-5.34 3.878c-.783.57-1.838-.197-1.538-1.118l2.04-6.275a1 1 0 00-.364-1.118L2.87 11.702c-.783-.57-.38-1.81.588-1.81h6.6a1 1 0 00.95-.69l2.04-6.275z" />
                        </svg>
                    </div>
                    <div class="text-4xl font-black mb-1">3</div>
                    <div class="text-xs font-semibold uppercase tracking-wider text-emerald-200">Prestasi Internasional</div>
                </div>
            </div>

            <!-- Galeri Prestasi -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Prestasi 1 -->
                <div class="modern-card modern-card-hover overflow-hidden bg-white border border-emerald-200/80 shadow-xl shadow-emerald-100/60">
                    <div class="h-2 bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                    <div class="p-6">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-emerald-100 to-teal-100 rounded-2xl flex items-center justify-center flex-shrink-0 ring-4 ring-emerald-50">
                                <svg class="w-8 h-8 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            </div>
                            <div>
                                <span class="inline-flex items-center px-2.5 py-1 bg-emerald-100 text-emerald-800 text-[10px] font-black rounded-full uppercase tracking-[0.2em] mb-2">Juara 1 Nasional</span>
                                <h3 class="font-black text-emerald-900 text-lg leading-snug">Olimpiade Kompetensi Keahlian TKJ</h3>
                            </div>
                        </div>
                        <p class="text-emerald-700/70 text-sm leading-relaxed">Meraih juara pertama Lomba Kompetensi Siswa (LKS) bidang Teknik Komputer & Jaringan tingkat nasional 2025.</p>
                        <div class="mt-5 pt-4 border-t border-emerald-100 text-xs text-emerald-600 flex items-center gap-1.5 font-semibold">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            Jakarta | Maret 2025
                        </div>
                    </div>
                </div>

                <!-- Prestasi 2 -->
                <div class="modern-card modern-card-hover overflow-hidden bg-white border border-teal-200/80 shadow-xl shadow-teal-100/60">
                    <div class="h-2 bg-gradient-to-r from-teal-500 to-emerald-600"></div>
                    <div class="p-6">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-teal-100 to-emerald-100 rounded-2xl flex items-center justify-center flex-shrink-0 ring-4 ring-teal-50">
                                <svg class="w-8 h-8 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <div>
                                <span class="inline-flex items-center px-2.5 py-1 bg-teal-100 text-teal-800 text-[10px] font-black rounded-full uppercase tracking-[0.2em] mb-2">Juara 2 Provinsi</span>
                                <h3 class="font-black text-emerald-900 text-lg leading-snug">Debat Bahasa Inggris Tingkat Provinsi</h3>
                            </div>
                        </div>
                        <p class="text-emerald-700/70 text-sm leading-relaxed">Tim debat sekolah berhasil meraih posisi runner-up kompetisi English Debate Championship se-provinsi Jawa Timur 2025.</p>
                        <div class="mt-5 pt-4 border-t border-emerald-100 text-xs text-emerald-600 flex items-center gap-1.5 font-semibold">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            Surabaya | Mei 2025
                        </div>
                    </div>
                </div>

                <!-- Prestasi 3 -->
                <div class="modern-card modern-card-hover overflow-hidden bg-white border border-green-200/80 shadow-xl shadow-green-100/60">
                    <div class="h-2 bg-gradient-to-r from-green-500 to-emerald-600"></div>
                    <div class="p-6">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-green-100 to-emerald-100 rounded-2xl flex items-center justify-center flex-shrink-0 ring-4 ring-green-50">
                                <svg class="w-8 h-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <span class="inline-flex items-center px-2.5 py-1 bg-green-100 text-green-800 text-[10px] font-black rounded-full uppercase tracking-[0.2em] mb-2">Juara 1 Kabupaten</span>
                                <h3 class="font-black text-emerald-900 text-lg leading-snug">Turnamen Futsal Pelajar 2025</h3>
                            </div>
                        </div>
                        <p class="text-emerald-700/70 text-sm leading-relaxed">Tim futsal putra SMA AL-ISLAMI meraih juara pertama dalam turnamen futsal antar pelajar tingkat kabupaten Mojokerto.</p>
                        <div class="mt-5 pt-4 border-t border-emerald-100 text-xs text-emerald-600 flex items-center gap-1.5 font-semibold">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            Mojokerto | April 2025
                        </div>
                    </div>
                </div>

                <!-- Prestasi 4 -->
                <div class="modern-card modern-card-hover overflow-hidden bg-white border border-emerald-200/80 shadow-xl shadow-emerald-100/60">
                    <div class="h-2 bg-gradient-to-r from-emerald-600 to-green-500"></div>
                    <div class="p-6">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-emerald-100 to-green-100 rounded-2xl flex items-center justify-center flex-shrink-0 ring-4 ring-emerald-50">
                                <svg class="w-8 h-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                </svg>
                            </div>
                            <div>
                                <span class="inline-flex items-center px-2.5 py-1 bg-emerald-100 text-emerald-800 text-[10px] font-black rounded-full uppercase tracking-[0.2em] mb-2">Juara Favorit</span>
                                <h3 class="font-black text-emerald-900 text-lg leading-snug">Festival Seni Pelajar Jawa Timur</h3>
                            </div>
                        </div>
                        <p class="text-emerald-700/70 text-sm leading-relaxed">Penampilan tari tradisional dan seni kaligrafi meraih penghargaan juara favorit pada Festival Seni Pelajar Jawa Timur 2025.</p>
                        <div class="mt-5 pt-4 border-t border-emerald-100 text-xs text-emerald-600 flex items-center gap-1.5 font-semibold">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            Malang | Juni 2025
                        </div>
                    </div>
                </div>

                <!-- Prestasi 5 -->
                <div class="modern-card modern-card-hover overflow-hidden bg-white border border-teal-200/80 shadow-xl shadow-teal-100/60">
                    <div class="h-2 bg-gradient-to-r from-teal-600 to-emerald-500"></div>
                    <div class="p-6">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-teal-100 to-green-100 rounded-2xl flex items-center justify-center flex-shrink-0 ring-4 ring-teal-50">
                                <svg class="w-8 h-8 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <span class="inline-flex items-center px-2.5 py-1 bg-teal-100 text-teal-800 text-[10px] font-black rounded-full uppercase tracking-[0.2em] mb-2">Finalis Internasional</span>
                                <h3 class="font-black text-emerald-900 text-lg leading-snug">World Robot Olympiad (WRO) Asia</h3>
                            </div>
                        </div>
                        <p class="text-emerald-700/70 text-sm leading-relaxed">Tim Robotik berhasil menembus babak final kompetisi World Robot Olympiad tingkat regional Asia Tenggara 2025.</p>
                        <div class="mt-5 pt-4 border-t border-emerald-100 text-xs text-emerald-600 flex items-center gap-1.5 font-semibold">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            Kuala Lumpur | Juli 2025
                        </div>
                    </div>
                </div>

                <!-- Prestasi 6 -->
                <div class="modern-card modern-card-hover overflow-hidden bg-white border border-green-200/80 shadow-xl shadow-green-100/60">
                    <div class="h-2 bg-gradient-to-r from-emerald-500 to-green-600"></div>
                    <div class="p-6">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-emerald-100 to-green-100 rounded-2xl flex items-center justify-center flex-shrink-0 ring-4 ring-emerald-50">
                                <svg class="w-8 h-8 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <div>
                                <span class="inline-flex items-center px-2.5 py-1 bg-emerald-100 text-emerald-800 text-[10px] font-black rounded-full uppercase tracking-[0.2em] mb-2">Juara 1 Regional</span>
                                <h3 class="font-black text-emerald-900 text-lg leading-snug">Olimpiade Matematika SLTA Se-Jatim</h3>
                            </div>
                        </div>
                        <p class="text-emerald-700/70 text-sm leading-relaxed">Siswa kelas XI berhasil meraih medali emas kompetisi Olimpiade Matematika tingkat SLTA se-Jawa Timur 2025.</p>
                        <div class="mt-5 pt-4 border-t border-emerald-100 text-xs text-emerald-600 flex items-center gap-1.5 font-semibold">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            Surabaya | Februari 2025
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
    </div>
</x-app-layout>
