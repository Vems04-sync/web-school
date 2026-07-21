<x-app-layout>
    <x-page-header 
        label="Layanan & Informasi"
        title="Hubungi Kami"
        subtitle="Kami siap melayani dan menjawab pertanyaan Anda seputar SMA AL-ISLAMI dengan respons yang cepat, jelas, dan ramah."
    >
        <div class="mt-8 flex flex-wrap items-center justify-center gap-3 text-sm">
            <span class="modern-pill bg-white/10 text-white border border-white/10">Respon cepat</span>
            <span class="modern-pill bg-white/10 text-white border border-white/10">Jam layanan aktif</span>
            <span class="modern-pill bg-white/10 text-white border border-white/10">Informasi sekolah</span>
        </div>
    </x-page-header>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="modern-card modern-card-hover grid grid-cols-1 lg:grid-cols-2 gap-0 overflow-hidden">
            <!-- Informasi Kontak -->
            <div class="relative p-10 lg:p-14 modern-card-soft bg-gradient-to-br from-emerald-50 via-white to-emerald-50">
                <div class="absolute top-0 right-0 w-40 h-40 bg-emerald-200/30 rounded-full blur-3xl -mr-10 -mt-10"></div>
                <div class="relative z-10">
                <h2 class="text-3xl font-black text-gray-900 mb-3">Informasi Kontak</h2>
                <p class="text-sm text-gray-500 mb-8 max-w-md">Silakan gunakan saluran di bawah untuk menghubungi sekolah, baik untuk pertanyaan umum, administrasi, maupun informasi penerimaan.</p>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
                    <div class="modern-card modern-card-soft p-4 border border-white/70">
                        <p class="text-[10px] uppercase tracking-widest text-emerald-500 font-bold mb-1">Telepon</p>
                        <p class="text-sm font-semibold text-slate-900">(021) 1234-5678</p>
                    </div>
                    <div class="modern-card modern-card-soft p-4 border border-white/70">
                        <p class="text-[10px] uppercase tracking-widest text-emerald-600 font-bold mb-1">WhatsApp</p>
                        <p class="text-sm font-semibold text-slate-900">0812-3456-7890</p>
                    </div>
                    <div class="modern-card modern-card-soft p-4 border border-white/70">
                        <p class="text-[10px] uppercase tracking-widest text-emerald-600 font-bold mb-1">Email</p>
                        <p class="text-sm font-semibold text-slate-900">info@mtsnnusantara.sch.id</p>
                    </div>
                </div>

                <div class="space-y-8">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-12 h-12 bg-emerald-100 text-emerald-700 rounded-2xl flex items-center justify-center ring-4 ring-emerald-50 shadow-sm">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900">Alamat Madrasah</h3>
                            <p class="mt-1 text-gray-600">Jl. Pendidikan No. 123, Kota Pelajar, Provinsi Edukasi 12345</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-12 h-12 bg-emerald-100 text-emerald-700 rounded-2xl flex items-center justify-center ring-4 ring-emerald-50 shadow-sm">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900">Telepon & WhatsApp</h3>
                            <p class="mt-1 text-gray-600">Telepon: (021) 1234-5678</p>
                            <p class="mt-1 text-gray-600">WhatsApp: 0812-3456-7890 (Hanya Chat)</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-12 h-12 bg-sky-100 text-sky-700 rounded-2xl flex items-center justify-center ring-4 ring-sky-50 shadow-sm">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900">Email</h3>
                            <p class="mt-1 text-gray-600">info@mtsnnusantara.sch.id</p>
                            <p class="mt-1 text-gray-600">spmb@mtsnnusantara.sch.id</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 modern-card modern-card-soft p-5 border border-white/70">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Jam Operasional Pelayanan</h3>
                    <ul class="text-gray-600 space-y-3 text-sm">
                        <li class="flex justify-between items-center"><span>Senin - Kamis</span> <span class="font-semibold text-slate-900">07.30 - 15.00 WIB</span></li>
                        <li class="flex justify-between items-center"><span>Jumat</span> <span class="font-semibold text-slate-900">07.30 - 11.30 WIB</span></li>
                        <li class="flex justify-between items-center"><span>Sabtu & Minggu</span> <span class="px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-700 font-bold text-xs">Tutup</span></li>
                    </ul>
                </div>
                </div>
            </div>

            <!-- Embed Iframe Map -->
            <div class="relative h-96 lg:h-auto min-h-[400px] bg-slate-100">
                <div class="absolute top-4 left-4 z-10 modern-card modern-card-soft px-4 py-3 border border-white/70 shadow-lg max-w-xs">
                    <p class="text-[10px] uppercase tracking-widest text-emerald-500 font-bold mb-1">Lokasi Sekolah</p>
                    <p class="text-sm font-semibold text-slate-900">Temukan rute menuju sekolah melalui peta di samping.</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126917.47525381831!2d106.75705359740177!3d-6.24158652078021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x100c5e82dd4b820!2sJakarta%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-full object-cover"></iframe>
            </div>
        </div>
    </div>
</x-app-layout>
