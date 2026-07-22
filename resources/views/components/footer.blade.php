@php
    $footerAddress = \App\Models\Setting::get('school_address', 'Jl. Raya Desa Kara, Kec. Torjun, Kab. Sampang, Jawa Timur 69271');
    $footerPhone = \App\Models\Setting::get('school_phone', '0831-4947-3113');
    $footerEmail = \App\Models\Setting::get('school_email', 'smaalislamiofficial@gmail.com');
    $rawWa = \App\Models\Setting::get('school_whatsapp');
    if (empty($rawWa) || str_contains($rawWa, '812-3456-7890') || str_contains($rawWa, '6281234567890')) {
        $rawWa = $footerPhone;
    }
    $digits = preg_replace('/\D/', '', $rawWa);
    if (str_starts_with($digits, '0')) {
        $digits = '62' . substr($digits, 1);
    }
    $footerWhatsapp = !empty($digits) ? 'https://wa.me/' . $digits : '#';
    $footerInstagram = \App\Models\Setting::get('school_instagram', 'https://www.instagram.com/smaalislamiofficial');
    $footerFacebook = \App\Models\Setting::get('school_facebook', 'https://www.facebook.com/share/1E9FKd3Kz1/');
    $footerYoutube = \App\Models\Setting::get('school_youtube', 'https://youtube.com/@smaalislamiofficial');
    $footerTiktok = \App\Models\Setting::get('school_tiktok', 'https://tiktok.com/@smaalislamiofficial');
@endphp

<footer class="bg-emerald-950 text-emerald-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            
            <!-- Logo & About -->
            <div class="lg:col-span-1">
                <a href="/" class="flex items-center gap-3 mb-4">
                    <img src="{{ Storage::url('SMA AL-ISLAMI.png') }}" alt="Logo SMA AL-ISLAMI" class="h-24 w-auto object-contain">
                    <span class="font-bold text-2xl text-white tracking-tight">SMA AL-ISLAMI</span>
                </a>
                <p class="text-sm leading-relaxed mb-6">
                    Sekolah menengah atas yang berdedikasi membentuk siswa berakhlak mulia, berprestasi, dan siap melanjutkan pendidikan ke jenjang berikutnya.
                </p>
                <!-- Social Media Icons -->
                <div class="flex space-x-3">
                    @if(!empty($footerFacebook))
                    <a href="{{ $footerFacebook }}" target="_blank" rel="noopener noreferrer"
                       title="Facebook" class="w-9 h-9 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 shadow-sm"
                       style="background-color: #1877F2;">
                        <i class="bi bi-facebook text-white text-base"></i>
                    </a>
                    @endif
                    @if(!empty($footerInstagram))
                    <a href="{{ $footerInstagram }}" target="_blank" rel="noopener noreferrer"
                       title="Instagram" class="w-9 h-9 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 shadow-sm"
                       style="background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);">
                        <i class="bi bi-instagram text-white text-base"></i>
                    </a>
                    @endif
                    @if(!empty($footerYoutube))
                    <a href="{{ $footerYoutube }}" target="_blank" rel="noopener noreferrer"
                       title="YouTube" class="w-9 h-9 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 shadow-sm"
                       style="background-color: #FF0000;">
                        <i class="bi bi-youtube text-white text-base"></i>
                    </a>
                    @endif
                    @if(!empty($footerTiktok))
                    <a href="{{ $footerTiktok }}" target="_blank" rel="noopener noreferrer"
                       title="TikTok" class="w-9 h-9 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 shadow-sm"
                       style="background-color: #000000;">
                        <i class="bi bi-tiktok text-white text-base"></i>
                    </a>
                    @endif
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-bold text-white mb-6 uppercase tracking-wider">Tautan Cepat</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('profile') }}" class="hover:text-emerald-300 text-sm transition flex items-center"><svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg> Profil Sekolah</a></li>
                    <li><a href="{{ route('academic') }}" class="hover:text-emerald-300 text-sm transition flex items-center"><svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg> Akademik</a></li>
                    <li><a href="{{ route('spmb.index') }}" class="hover:text-emerald-300 text-sm transition flex items-center"><svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg> Info SPMB</a></li>
                    <li><a href="{{ route('articles.index') }}" class="hover:text-emerald-300 text-sm transition flex items-center"><svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg> Berita &amp; Informasi</a></li>
                    <li><a href="{{ route('downloads.index') }}" class="hover:text-emerald-300 text-sm transition flex items-center"><svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg> Download Dokumen</a></li>
                </ul>
            </div>

            <!-- Ekstrakurikuler -->
            <div>
                <h3 class="text-lg font-bold text-white mb-6 uppercase tracking-wider">Ekstrakurikuler</h3>
                <ul class="space-y-3">
                    <li class="text-sm flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400 flex-shrink-0"></span>Organisasi Siswa Intra Sekolah</li>
                    <li class="text-sm flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400 flex-shrink-0"></span>Gerakan Pramuka</li>
                    <li class="text-sm flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400 flex-shrink-0"></span>Futsal</li>
                    <li class="text-sm flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400 flex-shrink-0"></span>Menjahit</li>
                    <li class="text-sm flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400 flex-shrink-0"></span>Tata Boga</li>
                    <li class="text-sm flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400 flex-shrink-0"></span>Tata Busana</li>
                    <li class="text-sm flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400 flex-shrink-0"></span>Pangkas Rambut</li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-bold text-white mb-6 uppercase tracking-wider">Hubungi Kami</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="bi bi-geo-alt-fill text-emerald-300 mr-3 mt-0.5 flex-shrink-0 text-base"></i>
                        <span class="text-sm leading-relaxed">{{ $footerAddress }}</span>
                    </li>
                    <li class="flex items-center">
                        <i class="bi bi-whatsapp text-emerald-300 mr-3 flex-shrink-0 text-base"></i>
                        @if(!empty($footerWhatsapp))
                        <a href="{{ $footerWhatsapp }}" target="_blank" rel="noopener noreferrer" class="text-sm hover:text-emerald-300 transition">{{ $footerPhone }}</a>
                        @else
                        <span class="text-sm">{{ $footerPhone }}</span>
                        @endif
                    </li>
                    <li class="flex items-center">
                        <i class="bi bi-envelope-fill text-emerald-300 mr-3 flex-shrink-0 text-base"></i>
                        <a href="mailto:{{ $footerEmail }}" class="text-sm hover:text-emerald-300 transition break-all">{{ $footerEmail }}</a>
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
