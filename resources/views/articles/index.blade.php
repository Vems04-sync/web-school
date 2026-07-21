<x-app-layout>
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900">Berita & Pengumuman</h1>
                <p class="mt-4 text-gray-500 max-w-2xl mx-auto">Kumpulan informasi terkini seputar kegiatan dan prestasi MTsN Nusantara.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($articles as $article)
                <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition flex flex-col border border-gray-100">
                    <div class="aspect-w-16 aspect-h-9 relative">
                        <img src="{{ $article->image ?? 'https://images.unsplash.com/photo-1546410531-bea5aadcb6ce?auto=format&fit=crop&w=600&q=80' }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <p class="text-sm text-blue-600 font-semibold mb-2">{{ $article->published_at ? $article->published_at->format('d M Y') : $article->created_at->format('d M Y') }}</p>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 hover:text-blue-600 transition">
                            <a href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            {{ Str::limit(strip_tags($article->content), 120) }}
                        </p>
                        <div class="mt-auto">
                            <a href="{{ route('articles.show', $article->slug) }}" class="text-blue-600 font-semibold text-sm hover:text-blue-700 flex items-center">
                                Baca selengkapnya
                                <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-3 text-center py-12 text-gray-500">
                    Belum ada berita yang dipublikasikan.
                </div>
                @endforelse
            </div>
            
            <!-- Pagination -->
            <div class="mt-12">
                {{ $articles->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
