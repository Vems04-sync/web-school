<x-app-layout>
    <!-- Header Banner -->
    <div class="bg-emerald-900 pt-36 pb-24 text-white text-center">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 px-4 leading-tight max-w-4xl mx-auto">{{ $article->title }}</h1>
        <p class="text-emerald-100 text-sm flex items-center justify-center gap-1.5">
            <svg class="w-4 h-4 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            {{ $article->published_at ? $article->published_at->format('d M Y') : $article->created_at->format('d M Y') }}
        </p>
    </div>

    <!-- Main Content -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 -mt-20 relative z-10">
            <div class="modern-card modern-card-hover overflow-hidden">
                @if($article->image)
                <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-72 md:h-[450px] object-cover">
                @else
                <img src="https://images.unsplash.com/photo-1546410531-bea5aadcb6ce?auto=format&fit=crop&w=1200&q=80" alt="Placeholder" class="w-full h-72 md:h-[450px] object-cover">
                @endif
                
                <div class="p-8 md:p-12">
                    
                    <div class="prose prose-orange max-w-none text-gray-700 leading-relaxed">
                        {!! nl2br(e($article->content)) !!}
                    </div>
                    
                    <div class="mt-12 pt-8 border-t border-gray-100 flex items-center justify-between">
                        <a href="{{ route('articles.index') }}" class="modern-btn modern-btn-secondary px-4 py-2 text-emerald-700">
                            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                            Kembali ke Daftar Berita
                        </a>
                        
                        <!-- Share buttons dummy -->
                        <div class="flex space-x-3">
                            <span class="text-gray-400 text-sm self-center">Bagikan:</span>
                            <button class="modern-btn modern-btn-primary h-10 w-10 rounded-full p-0">f</button>
                            <button class="modern-btn modern-btn-secondary h-10 w-10 rounded-full p-0 text-emerald-700">t</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
