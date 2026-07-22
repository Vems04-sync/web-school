<x-app-layout>
    <x-page-header 
        label="Program Pembelajaran & Jadwal"
        title="Akademik Sekolah"
        subtitle="Informasi Kurikulum Merdeka dan Kalender Akademik Tahunan SMA AL-ISLAMI."
    />

    <!-- Quick Navigation Submenu Sticky -->
    <div class="bg-emerald-900 border-b border-emerald-700 sticky top-20 z-30 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center space-x-4 sm:space-x-8 overflow-x-auto py-3 text-sm font-semibold">
                <a href="#kurikulum" class="text-emerald-200 hover:text-white px-3 py-1.5 rounded-full hover:bg-emerald-700 transition flex items-center gap-1.5 whitespace-nowrap">
                    <svg class="w-4 h-4 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    Kurikulum
                </a>
                <a href="#kalender" class="text-emerald-200 hover:text-white px-3 py-1.5 rounded-full hover:bg-emerald-700 transition flex items-center gap-1.5 whitespace-nowrap">
                    <svg class="w-4 h-4 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Kalender Akademik
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
                <h2 class="text-3xl font-extrabold text-slate-900">{{ $curriculumTitle }}</h2>
                <p class="mt-4 text-gray-600 max-w-3xl mx-auto">
                    {{ $curriculumDescription }}
                </p>
            </div>

        </section>

        <!-- 2. KALENDER AKADEMIK -->
        <section id="kalender" class="scroll-mt-32">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-50 border border-emerald-100 rounded-full text-emerald-600 text-xs font-bold uppercase tracking-wider mb-4">
                    Penjadwalan Resmi
                </div>
                <h2 class="text-3xl font-extrabold text-slate-900">Kalender Akademik {{ $academicYear }}</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Jadwal lengkap kegiatan belajar mengajar, asesmen, libur sekolah, dan kegiatan tahunan SMA AL-ISLAMI.</p>
            </div>

            <div class="max-w-5xl mx-auto">
                <div class="modern-card modern-card-soft overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-gradient-to-r from-emerald-700 to-emerald-600 text-white">
                                    <th class="px-5 py-4 text-center text-xs font-bold uppercase tracking-wider w-14">No</th>
                                    <th class="px-5 py-4 text-left text-xs font-bold uppercase tracking-wider">Kegiatan</th>
                                    <th class="px-5 py-4 text-left text-xs font-bold uppercase tracking-wider whitespace-nowrap">Waktu Pelaksanaan</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 bg-white">

                                @php
                                $badges = [
                                    'kegiatan' => ['dot'=>'bg-blue-500',    'bg'=>'bg-blue-50',    'text'=>'text-blue-700',    'border'=>'border-blue-200'],
                                    'awal'     => ['dot'=>'bg-emerald-500', 'bg'=>'bg-emerald-50', 'text'=>'text-emerald-700', 'border'=>'border-emerald-200'],
                                    'belajar'  => ['dot'=>'bg-teal-500',    'bg'=>'bg-teal-50',    'text'=>'text-teal-700',    'border'=>'border-teal-200'],
                                    'ujian'    => ['dot'=>'bg-amber-500',   'bg'=>'bg-amber-50',   'text'=>'text-amber-700',   'border'=>'border-amber-200'],
                                    'libur'    => ['dot'=>'bg-rose-500',    'bg'=>'bg-rose-50',    'text'=>'text-rose-700',    'border'=>'border-rose-200'],
                                ];
                                @endphp

                                @forelse($kalender as $item)
                                @php $b = $badges[$item->type] ?? $badges['kegiatan']; @endphp
                                <tr class="hover:bg-emerald-50/40 transition-colors duration-150 {{ $loop->even ? 'bg-slate-50/40' : 'bg-white' }}">
                                    <td class="px-5 py-4 text-center">
                                        <span class="w-7 h-7 rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold flex items-center justify-center mx-auto">{{ $loop->iteration }}</span>
                                    </td>
                                    <td class="px-5 py-4">
                                        <div class="flex items-center gap-3">
                                            <span class="w-2 h-2 rounded-full {{ $b['dot'] }} flex-shrink-0"></span>
                                            <span class="text-sm font-semibold text-slate-800">{{ $item->title }}</span>
                                        </div>
                                    </td>
                                    <td class="px-5 py-4">
                                        <span class="inline-flex items-center gap-1.5 text-xs font-semibold px-3 py-1.5 rounded-full border {{ $b['bg'] }} {{ $b['text'] }} {{ $b['border'] }} whitespace-nowrap">
                                            <svg class="w-3 h-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            {{ $item->date_description }}
                                        </span>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="px-5 py-8 text-center text-gray-500">Belum ada agenda kalender akademik yang ditambahkan.</td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Legend -->
                <div class="mt-6 flex flex-wrap justify-center gap-3">
                    <span class="inline-flex items-center gap-1.5 text-xs font-medium px-3 py-1.5 rounded-full bg-blue-50 text-blue-700 border border-blue-200">
                        <span class="w-2 h-2 rounded-full bg-blue-500"></span>Kegiatan Sekolah
                    </span>
                    <span class="inline-flex items-center gap-1.5 text-xs font-medium px-3 py-1.5 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>Awal Semester
                    </span>
                    <span class="inline-flex items-center gap-1.5 text-xs font-medium px-3 py-1.5 rounded-full bg-teal-50 text-teal-700 border border-teal-200">
                        <span class="w-2 h-2 rounded-full bg-teal-500"></span>Pembelajaran
                    </span>
                    <span class="inline-flex items-center gap-1.5 text-xs font-medium px-3 py-1.5 rounded-full bg-amber-50 text-amber-700 border border-amber-200">
                        <span class="w-2 h-2 rounded-full bg-amber-500"></span>Asesmen / Ujian
                    </span>
                    <span class="inline-flex items-center gap-1.5 text-xs font-medium px-3 py-1.5 rounded-full bg-rose-50 text-rose-700 border border-rose-200">
                        <span class="w-2 h-2 rounded-full bg-rose-500"></span>Libur Sekolah
                    </span>
                </div>

                <div class="text-center mt-8">
                    <a href="{{ route('downloads.index') }}" class="inline-flex items-center gap-2 text-sm font-bold text-emerald-600 hover:text-emerald-700 transition bg-emerald-50 hover:bg-emerald-100 px-5 py-2.5 rounded-full border border-emerald-200">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        Unduh Kalender Akademik Resmi Format PDF
                    </a>
                </div>
            </div>
        </section>

    </div>
</x-app-layout>
