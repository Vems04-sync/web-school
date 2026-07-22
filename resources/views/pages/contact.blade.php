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

    @php
        $directMapsUrl = 'https://maps.app.goo.gl/B2SBPQhnZbgLBwWr7';
        $embedIframeUrl = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.0509927950907!2d113.19924487499836!3d-7.120089292883585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8294b789e85f1%3A0x28634fa48ceab6bd!2sSMA%20AL%20ISLAMI!5e0!3m2!1sid!2sid!4v1784737722383!5m2!1sid!2sid';
    @endphp

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="modern-card modern-card-hover grid grid-cols-1 lg:grid-cols-2 gap-0 overflow-hidden">
            <!-- Informasi Kontak -->
            <div class="relative p-10 lg:p-14 modern-card-soft bg-gradient-to-br from-emerald-50 via-white to-emerald-50">
                <div class="absolute top-0 right-0 w-40 h-40 bg-emerald-200/30 rounded-full blur-3xl -mr-10 -mt-10"></div>
                <div class="relative z-10">
                <h2 class="text-3xl font-black text-gray-900 mb-3">Informasi Kontak</h2>
                <p class="text-sm text-gray-500 mb-8 max-w-md">Silakan gunakan saluran di bawah untuk menghubungi sekolah, baik untuk pertanyaan umum, administrasi, maupun informasi penerimaan.</p>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                    <div class="modern-card modern-card-soft p-4 border border-white/70">
                        <p class="text-[10px] uppercase tracking-widest text-emerald-600 font-bold mb-1">WhatsApp / Telepon</p>
                        <a href="{{ $contact['whatsapp'] }}" target="_blank" rel="noopener noreferrer" class="text-sm font-semibold text-slate-900 hover:text-emerald-600 transition flex items-center gap-1.5">
                            <i class="bi bi-whatsapp text-emerald-600"></i>
                            {{ $contact['phone'] }}
                        </a>
                    </div>
                    <div class="modern-card modern-card-soft p-4 border border-white/70">
                        <p class="text-[10px] uppercase tracking-widest text-emerald-600 font-bold mb-1">Email Resmi</p>
                        <a href="mailto:{{ $contact['email'] }}" class="text-sm font-semibold text-slate-900 hover:text-emerald-600 transition break-all flex items-center gap-1.5">
                            <i class="bi bi-envelope-fill text-emerald-600"></i>
                            {{ $contact['email'] }}
                        </a>
                    </div>
                </div>

                <div class="space-y-8">
                    <!-- Alamat -->
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-12 h-12 bg-emerald-100 text-emerald-700 rounded-2xl flex items-center justify-center ring-4 ring-emerald-50 shadow-sm">
                                <i class="bi bi-geo-alt-fill text-xl text-emerald-600"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900">Alamat Sekolah</h3>
                            <p class="mt-1 text-gray-600">
                                {{ $contact['address'] }}
                            </p>
                            <a href="{{ $directMapsUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 mt-2 text-xs font-semibold text-emerald-600 hover:text-emerald-800 transition">
                                <i class="bi bi-box-arrow-up-right"></i>
                                Buka di Google Maps
                            </a>
                        </div>
                    </div>

                    <!-- Telepon & WA -->
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-12 h-12 bg-emerald-100 text-emerald-700 rounded-2xl flex items-center justify-center ring-4 ring-emerald-50 shadow-sm">
                                <i class="bi bi-whatsapp text-xl text-emerald-600"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900">Telepon &amp; WhatsApp</h3>
                            <p class="mt-1 text-gray-600">{{ $contact['phone'] }}</p>
                            @if(!empty($contact['whatsapp']))
                            <a href="{{ $contact['whatsapp'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 mt-2 text-xs font-semibold text-emerald-600 hover:text-emerald-800 transition">
                                <i class="bi bi-chat-dots-fill"></i>
                                Chat via WhatsApp
                            </a>
                            @endif
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-12 h-12 bg-sky-100 text-sky-700 rounded-2xl flex items-center justify-center ring-4 ring-sky-50 shadow-sm">
                                <i class="bi bi-envelope-fill text-xl text-sky-600"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900">Email Resmi</h3>
                            <a href="mailto:{{ $contact['email'] }}" class="mt-1 text-gray-600 hover:text-emerald-600 transition break-all block">{{ $contact['email'] }}</a>
                        </div>
                    </div>

                    <!-- Media Sosial -->
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-12 h-12 bg-purple-100 text-purple-700 rounded-2xl flex items-center justify-center ring-4 ring-purple-50 shadow-sm">
                                <i class="bi bi-share-fill text-xl text-purple-600"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900">Media Sosial</h3>
                            <div class="mt-3 flex flex-wrap gap-3">
                                @if(!empty($contact['facebook']))
                                <a href="{{ $contact['facebook'] }}" target="_blank" rel="noopener noreferrer"
                                   class="inline-flex items-center gap-2 px-3.5 py-2 text-white text-xs font-bold rounded-xl transition shadow-sm hover:scale-105"
                                   style="background-color: #1877F2;">
                                    <i class="bi bi-facebook text-sm"></i>
                                    Facebook
                                </a>
                                @endif
                                @if(!empty($contact['instagram']))
                                <a href="{{ $contact['instagram'] }}" target="_blank" rel="noopener noreferrer"
                                   class="inline-flex items-center gap-2 px-3.5 py-2 text-white text-xs font-bold rounded-xl transition shadow-sm hover:scale-105"
                                   style="background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);">
                                    <i class="bi bi-instagram text-sm"></i>
                                    Instagram
                                </a>
                                @endif
                                @if(!empty($contact['youtube']))
                                <a href="{{ $contact['youtube'] }}" target="_blank" rel="noopener noreferrer"
                                   class="inline-flex items-center gap-2 px-3.5 py-2 text-white text-xs font-bold rounded-xl transition shadow-sm hover:scale-105"
                                   style="background-color: #FF0000;">
                                    <i class="bi bi-youtube text-sm"></i>
                                    YouTube
                                </a>
                                @endif
                                @if(!empty($contact['tiktok']))
                                <a href="{{ $contact['tiktok'] }}" target="_blank" rel="noopener noreferrer"
                                   class="inline-flex items-center gap-2 px-3.5 py-2 text-white text-xs font-bold rounded-xl transition shadow-sm hover:scale-105"
                                   style="background-color: #000000;">
                                    <i class="bi bi-tiktok text-sm"></i>
                                    TikTok
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 modern-card modern-card-soft p-5 border border-white/70">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Jam Operasional Pelayanan</h3>
                    <p class="text-slate-700 text-sm font-semibold">{{ $contact['work_hours'] }}</p>
                </div>
                </div>
            </div>

            <!-- Embed Google Maps -->
            <div class="relative h-96 lg:h-auto min-h-[400px] bg-slate-100">
                <div class="absolute top-4 left-4 z-10 modern-card modern-card-soft px-4 py-3 border border-white/70 shadow-lg max-w-xs">
                    <div class="flex items-center gap-2 mb-1">
                        <i class="bi bi-geo-alt-fill text-red-500 text-sm"></i>
                        <p class="text-[10px] uppercase tracking-widest text-emerald-600 font-bold">SMA AL-ISLAMI</p>
                    </div>
                    <p class="text-xs font-semibold text-slate-800">{{ $contact['address'] }}</p>
                    <a href="{{ $directMapsUrl }}" target="_blank" rel="noopener noreferrer" class="mt-2 inline-flex items-center gap-1 text-[11px] font-bold text-emerald-600 hover:text-emerald-800">
                        Petunjuk Arah <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <iframe
                    src="{{ $embedIframeUrl }}"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="strict-origin-when-cross-origin" class="w-full h-full object-cover">
                </iframe>
            </div>
        </div>
    </div>
</x-app-layout>
