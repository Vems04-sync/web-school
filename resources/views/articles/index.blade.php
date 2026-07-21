<x-app-layout>
    <x-page-header 
        label="Informasi Terkini"
        title="Berita & Kegiatan Sekolah"
        subtitle="Ikuti perkembangan terbaru, aktivitas harian, dan prestasi gemilang civitas akademika SMA AL-ISLAMI."
    />

    <!-- Main Content -->
    <div class="bg-slate-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @if($articles->count() > 0)
            <!-- Featured Article (artikel pertama tampil besar) -->
            @php $featured = $articles->first(); @endphp
            <div class="mb-12">
                <a href="{{ route('articles.show', $featured->slug) }}" class="modern-card modern-card-hover group block lg:grid lg:grid-cols-2">
                    <div class="h-64 lg:h-auto overflow-hidden bg-slate-200">
                        <img src="{{ $featured->image ? asset('storage/' . $featured->image) : 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=900&q=80' }}"
                             alt="{{ $featured->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="inline-block px-3 py-1 bg-emerald-100 text-emerald-700 text-xs font-bold rounded-full uppercase tracking-wider">Terbaru</span>
                            <span class="text-sm text-gray-400">{{ $featured->published_at ? $featured->published_at->format('d M Y') : $featured->created_at->format('d M Y') }}</span>
                        </div>
                        <h2 class="text-2xl lg:text-3xl font-extrabold text-slate-900 mb-4 group-hover:text-emerald-600 transition line-clamp-3 leading-tight">
                            {{ $featured->title }}
                        </h2>
                        <p class="text-gray-500 leading-relaxed mb-6 line-clamp-3">
                            {{ Str::limit(strip_tags($featured->content), 200) }}
                        </p>
                        <div class="inline-flex items-center gap-2 text-emerald-600 font-bold text-sm group-hover:gap-3 transition-all">
                            Baca Selengkapnya
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Grid Berita Lainnya -->
            @if($articles->count() > 1)
            <div class="mb-6">
                <h3 class="text-xl font-bold text-slate-900 mb-6">Berita Lainnya</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($articles->skip(1) as $article)
                    <a href="{{ route('articles.show', $article->slug) }}" class="modern-card modern-card-hover group flex flex-col">
                        <div class="h-48 overflow-hidden bg-slate-200">
                            <img src="{{ $article->image ? asset('storage/' . $article->image) : 'https://images.unsplash.com/photo-1546410531-bea5aadcb6ce?auto=format&fit=crop&w=600&q=80' }}"
                                 alt="{{ $article->title }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <p class="text-xs text-emerald-600 font-semibold mb-2">
                                {{ $article->published_at ? $article->published_at->format('d M Y') : $article->created_at->format('d M Y') }}
                            </p>
                            <h3 class="text-lg font-bold text-slate-900 mb-3 line-clamp-2 group-hover:text-emerald-600 transition leading-snug">
                                {{ $article->title }}
                            </h3>
                            <p class="text-gray-500 text-sm mb-4 line-clamp-3 flex-grow">
                                {{ Str::limit(strip_tags($article->content), 110) }}
                            </p>
                            <div class="inline-flex items-center gap-1 text-emerald-600 font-semibold text-sm mt-auto group-hover:gap-2 transition-all">
                                Baca selengkapnya
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif

            @else
            <!-- State Kosong (belum ada artikel) -->
            <div class="text-center py-24">
                <div class="w-24 h-24 bg-emerald-50 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-700 mb-2">Belum Ada Berita Dipublikasikan</h3>
                <p class="text-gray-400 text-sm max-w-sm mx-auto">Pantau terus halaman ini untuk mendapatkan informasi terbaru seputar kegiatan dan prestasi sekolah.</p>
            </div>
            @endif

            <!-- Pagination -->
            @if($articles->hasPages())
            <div class="mt-12 flex justify-center">
                {{ $articles->links() }}
            </div>
            @endif

        </div>
    </div>
</x-app-layout>
