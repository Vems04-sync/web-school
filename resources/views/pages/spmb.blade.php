<x-app-layout>
    <x-page-header 
        title="Portal SPMB Online"
        subtitle="Seleksi Penerimaan Siswa Baru SMA AL-ISLAMI – daftarkan diri Anda sekarang dan bergabunglah bersama ribuan lulusan unggul kami!"
    >
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur border border-white/15 rounded-full text-white text-sm font-bold mb-6">
            <span class="relative flex h-2.5 w-2.5">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-300 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-400"></span>
            </span>
            PENDAFTARAN DIBUKA · TAHUN AJARAN {{ date('Y') }}/{{ date('Y') + 1 }}
        </div>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#alur-pendaftaran" class="inline-flex items-center justify-center gap-2 bg-emerald-700 text-white hover:bg-emerald-800 px-8 py-4 text-lg font-black rounded-full shadow-2xl transition duration-200 border-2 border-emerald-500/30">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
                Daftar Sekarang
            </a>
        </div>
    </x-page-header>

    <!-- Notifikasi Sukses -->
    @if(session('success'))
    <div class="max-w-4xl mx-auto px-4 mt-8">
        <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-r-xl shadow-sm">
            <div class="flex items-start gap-4">
                <svg class="h-6 w-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <div>
                    <h3 class="text-lg font-bold text-green-800 mb-1">Pendaftaran Berhasil!</h3>
                    <p class="text-sm text-green-700 mb-3">{{ session('success') }}</p>
                    <p class="text-sm font-bold text-slate-800 mb-4 bg-white p-3 rounded border border-green-200 inline-block">
                        Nomor Registrasi: {{ session('registration_number') }}
                    </p>
                    <div>
                                <a href="{{ route('spmb.print', session('applicant_id')) }}" target="_blank"
                                    class="modern-btn modern-btn-primary px-4 py-2 text-sm bg-gradient-to-r from-emerald-500 to-teal-600 text-white">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                            </svg>
                            Cetak Bukti Pendaftaran (PDF)
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-16">

        <!-- BAGIAN 1: Info Pendaftaran, Persyaratan, Jadwal -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Informasi Umum Pendaftaran -->
            <div class="modern-card modern-card-hover modern-card-soft p-8">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-slate-900">Informasi Pendaftaran</h2>
                </div>
                <ul class="space-y-4 text-sm text-gray-600">
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span>Pendaftaran dibuka mulai <strong>1 Februari – 30 Juni {{ date('Y') }}</strong></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span>Pendaftaran dilakukan <strong>online</strong> melalui portal ini</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span>Tidak dipungut biaya pendaftaran (<strong>GRATIS</strong>)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span>Tersedia pilihan jurusan <strong>TKJ, Akuntansi, dan Administrasi Perkantoran</strong></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-emerald-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span>Info lebih lanjut hubungi: <strong>Tata Usaha (021-XXXXXXX)</strong></span>
                    </li>
                </ul>
            </div>

            <!-- Persyaratan Pendaftaran -->
            <div class="modern-card modern-card-hover modern-card-soft p-8">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-slate-900">Persyaratan Dokumen</h2>
                </div>
                <ul class="space-y-3 text-sm text-gray-600">
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 bg-emerald-600 text-white rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">1</span>
                        Fotokopi Ijazah / SKHUN SD/MI yang telah dilegalisir
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 bg-emerald-600 text-white rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">2</span>
                        Fotokopi Kartu Keluarga (KK)
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 bg-emerald-600 text-white rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">3</span>
                        Akta Kelahiran asli/fotokopi
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 bg-emerald-600 text-white rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">4</span>
                        Pas foto berwarna 3×4 sebanyak 4 lembar
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 bg-emerald-600 text-white rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">5</span>
                        Surat Keterangan Sehat dari dokter
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 bg-emerald-600 text-white rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">6</span>
                        Rapor kelas 4, 5, dan 6 SD/MI (asli)
                    </li>
                </ul>
            </div>

            <!-- Jadwal Seleksi -->
            <div class="modern-card modern-card-hover modern-card-soft p-8">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-slate-900">Jadwal Seleksi</h2>
                </div>
                <div class="space-y-3">
                    <div class="flex items-center justify-between text-sm py-3 border-b border-gray-100">
                        <span class="text-gray-600">Buka Pendaftaran</span>
                        <span class="font-bold text-slate-900 text-right">1 Feb – 30 Jun {{ date('Y') }}</span>
                    </div>
                    <div class="flex items-center justify-between text-sm py-3 border-b border-gray-100">
                        <span class="text-gray-600">Tes Seleksi Tulis</span>
                        <span class="font-bold text-slate-900 text-right">5 Jul {{ date('Y') }}</span>
                    </div>
                    <div class="flex items-center justify-between text-sm py-3 border-b border-gray-100">
                        <span class="text-gray-600">Tes Wawancara</span>
                        <span class="font-bold text-slate-900 text-right">8 Jul {{ date('Y') }}</span>
                    </div>
                    <div class="flex items-center justify-between text-sm py-3 border-b border-gray-100">
                        <span class="text-gray-600">Pengumuman Hasil</span>
                        <span class="font-bold text-emerald-600 text-right">10 Jul {{ date('Y') }}</span>
                    </div>
                    <div class="flex items-center justify-between text-sm py-3">
                        <span class="text-gray-600">Daftar Ulang</span>
                        <span class="font-bold text-slate-900 text-right">11–13 Jul {{ date('Y') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alur Pendaftaran -->
        <section id="alur-pendaftaran" class="scroll-mt-32">
            <div class="text-center mb-12">
                <h2 class="text-2xl font-extrabold text-slate-900">Alur Pendaftaran</h2>
                <p class="mt-2 text-gray-500 text-sm">Ikuti langkah mudah berikut untuk menyelesaikan pendaftaran Anda</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach([
                    ['step' => '01', 'title' => 'Isi Formulir Online', 'desc' => 'Klik tombol "Daftar Sekarang" dan isi formulir Google Form dengan data diri yang benar dan lengkap.', 'color' => 'bg-emerald-100 text-emerald-600'],
                    ['step' => '02', 'title' => 'Upload Dokumen', 'desc' => 'Siapkan dan bawa dokumen persyaratan ke sekolah saat verifikasi.', 'color' => 'bg-teal-100 text-teal-600'],
                    ['step' => '03', 'title' => 'Ikuti Seleksi', 'desc' => 'Hadiri tes seleksi tulis dan wawancara sesuai jadwal yang telah ditentukan.', 'color' => 'bg-green-100 text-green-600'],
                    ['step' => '04', 'title' => 'Pengumuman', 'desc' => 'Cek hasil pengumuman melalui portal ini atau hubungi TU sekolah.', 'color' => 'bg-emerald-200 text-emerald-700'],
                ] as $item)
                <div class="modern-card modern-card-hover modern-card-soft p-6 text-center">
                    <div class="w-14 h-14 mx-auto {{ $item['color'] }} rounded-2xl flex items-center justify-center font-black text-xl mb-4">{{ $item['step'] }}</div>
                    <h3 class="font-bold text-slate-900 mb-2">{{ $item['title'] }}</h3>
                    <p class="text-xs text-gray-500 leading-relaxed">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </section>

        <!-- CTA Google Form Pendaftaran -->
        <section id="form-daftar" class="scroll-mt-28">
            <div class="max-w-3xl mx-auto">
                <div class="modern-card modern-card-hover overflow-hidden">
                    <!-- Top Color Bar -->
                    <div class="h-2 bg-gradient-to-r from-emerald-500 via-teal-500 to-green-500"></div>
                    <div class="p-10 text-center">
                        <!-- Icon -->
                        <div class="w-20 h-20 bg-gradient-to-br from-emerald-100 to-teal-100 rounded-3xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                        </div>

                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-50 border border-emerald-200 rounded-full text-emerald-700 text-xs font-bold uppercase tracking-wider mb-4">
                            Formulir Pendaftaran Online
                        </div>

                        <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mb-3">
                            Daftar Melalui Google Form
                        </h2>
                        <p class="text-gray-500 text-sm leading-relaxed max-w-lg mx-auto mb-8">
                            Formulir pendaftaran SPMB SMA AL-ISLAMI diisi melalui Google Form. Klik tombol di bawah, isi data dengan lengkap dan benar sesuai dokumen resmi, lalu kirimkan.
                        </p>

                        <!-- Tips Sebelum Daftar -->
                        <div class="bg-emerald-50 border border-emerald-200 rounded-2xl p-5 text-left mb-8">
                            <h4 class="text-sm font-bold text-emerald-800 mb-3 flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Siapkan sebelum mengisi:
                            </h4>
                            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs text-emerald-700">
                                <li class="flex items-center gap-2">
                                    <svg class="w-3.5 h-3.5 text-emerald-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                    Nomor NISN siswa
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-3.5 h-3.5 text-emerald-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                    Nomor WhatsApp aktif orang tua
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-3.5 h-3.5 text-emerald-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                    Nama sekolah asal (SD/MI)
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-3.5 h-3.5 text-emerald-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                    Alamat lengkap tempat tinggal
                                </li>
                            </ul>
                        </div>

                        <!-- CTA Button Utama -->
                        <a href="{{ $gformUrl }}" target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center justify-center gap-3 w-full sm:w-auto px-10 py-4 bg-emerald-800 hover:bg-emerald-900 text-white font-black text-lg rounded-2xl shadow-2xl shadow-emerald-900/30 hover:-translate-y-1 transition duration-200 border border-emerald-700">
                            <svg class="w-6 h-6 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                            Buka Formulir Pendaftaran
                        </a>

                        <p class="mt-4 text-xs text-gray-400">
                            Formulir akan terbuka di tab baru. Isi dengan lengkap lalu klik <strong>"Kirim"</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-app-layout>
