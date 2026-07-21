<footer class="bg-emerald-950 text-emerald-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            
            <!-- Logo & About -->
            <div class="lg:col-span-1">
                <a href="/" class="flex items-center gap-3 mb-6">
                    <img src="{{ Storage::url('SMA AL-ISLAMI.png') }}" alt="Logo SMA AL-ISLAMI" class="w-10 h-10 object-contain">
                    <span class="font-bold text-xl text-white tracking-tight">SMA AL-ISLAMI</span>
                </a>
                <p class="text-sm leading-relaxed mb-6">
                    Sekolah menengah pertama yang berdedikasi membentuk siswa berakhlak mulia, berprestasi, dan siap melanjutkan pendidikan ke jenjang berikutnya.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="modern-btn modern-btn-ghost h-10 w-10 rounded-full p-0 text-white">
                        <span class="sr-only">Facebook</span>
                        f
                    </a>
                    <a href="#" class="modern-btn modern-btn-ghost h-10 w-10 rounded-full p-0 text-white">
                        <span class="sr-only">Instagram</span>
                        ig
                    </a>
                    <a href="#" class="modern-btn modern-btn-ghost h-10 w-10 rounded-full p-0 text-white">
                        <span class="sr-only">YouTube</span>
                        yt
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-bold text-white mb-6 uppercase tracking-wider">Tautan Cepat</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('profile') }}" class="hover:text-emerald-300 text-sm transition flex items-center"><svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg> Profil Sekolah</a></li>
                    <li><a href="{{ route('spmb.index') }}" class="hover:text-emerald-300 text-sm transition flex items-center"><svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg> Info SPMB</a></li>
                    <li><a href="{{ route('articles.index') }}" class="hover:text-emerald-300 text-sm transition flex items-center"><svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg> Berita & Informasi</a></li>
                    <li><a href="{{ route('downloads.index') }}" class="hover:text-emerald-300 text-sm transition flex items-center"><svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg> Download Dokumen</a></li>
                </ul>
            </div>

            <!-- Program Unggulan -->
            <div>
                <h3 class="text-lg font-bold text-white mb-6 uppercase tracking-wider">Program Unggulan</h3>
                <ul class="space-y-3">
                    <li class="text-sm">Pembinaan Karakter dan Akhlak</li>
                    <li class="text-sm">Literasi, Numerasi, dan Bahasa</li>
                    <li class="text-sm">Tahfidz dan Pendidikan Keagamaan</li>
                    <li class="text-sm">Ekstrakurikuler dan Prestasi Siswa</li>
                    <li class="text-sm">Pembelajaran Digital dan Kreatif</li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-bold text-white mb-6 uppercase tracking-wider">Hubungi Kami</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-emerald-300 mr-3 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        <span class="text-sm leading-relaxed">Jl. Raya Mojosari No. 123, Mojokerto, Jawa Timur</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-emerald-300 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                        <span class="text-sm">(0321) 123456</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-emerald-300 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                        <span class="text-sm">info@smkradenrahmatmojosari.sch.id</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-emerald-900 text-sm text-center flex flex-col md:flex-row justify-between items-center">
            <p>&copy; {{ date('Y') }} SMA AL-ISLAMI. Hak Cipta Dilindungi.</p>
            <p class="mt-2 md:mt-0">Dikembangkan oleh Tim IT</p>
        </div>
    </div>
</footer>
