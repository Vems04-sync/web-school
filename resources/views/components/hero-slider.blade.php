@props(['slides' => null])

@php
    if (!$slides) {
        $slides = \App\Models\HeroSlide::where('is_active', true)->orderBy('order', 'asc')->get();
    }
    
    $formattedSlides = $slides->map(function($slide) {
        $img = $slide->image;
        $bgImage = $img ? (str_starts_with($img, 'http') ? $img : asset('storage/' . $img)) : 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1920&q=80';
        return [
            'tagline'          => $slide->tagline ?? '',
            'title'            => $slide->title,
            'description'      => $slide->description ?? '',
            'bgImage'          => $bgImage,
            'primaryBtnText'   => $slide->primary_btn_text ?? '',
            'primaryBtnUrl'    => $slide->primary_btn_url ?? '#',
            'secondaryBtnText' => $slide->secondary_btn_text ?? '',
            'secondaryBtnUrl'  => $slide->secondary_btn_url ?? '#',
        ];
    });
@endphp

@if($formattedSlides->count() > 0)
    <!-- Hero Slider Component -->
    <div x-data="{ 
            activeSlide: 0, 
            slides: {{ json_encode($formattedSlides) }},
            next() {
                if (!this.slides || this.slides.length === 0) return;
                this.activeSlide = (this.activeSlide + 1) % this.slides.length;
            },
            prev() {
                if (!this.slides || this.slides.length === 0) return;
                this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length;
            },
            init() {
                if (!this.slides || this.slides.length === 0) return;
                setInterval(() => {
                    this.next();
                }, 6000);
            }
         }"
         class="relative bg-gradient-to-br from-emerald-950 via-emerald-900 to-emerald-700 h-[60vh] sm:h-[70vh] overflow-hidden">
        
        <!-- Decorative Background -->
        <div class="absolute inset-0 pointer-events-none z-0">
            <div class="absolute -top-16 left-0 w-72 h-72 bg-emerald-400/20 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-20 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 w-[34rem] h-[34rem] -translate-x-1/2 -translate-y-1/2 bg-white/5 rounded-full blur-3xl"></div>
        </div>

        <!-- Slides Wrapper -->
        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="activeSlide === index"
                 x-transition:enter="transition ease-out duration-1000"
                 x-transition:enter-start="opacity-0 scale-105"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-500"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="absolute inset-0 w-full h-full">
                
                <!-- Background Image -->
                <img :src="slide.bgImage" :alt="slide.title" class="absolute inset-0 w-full h-full object-cover opacity-25 select-none">
                
                <!-- Gradient overlay -->
                <div class="absolute inset-0 bg-emerald-950/40 mix-blend-multiply"></div>
                
                <!-- Content Overlay -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto z-10">
                        <template x-if="slide.tagline">
                            <p x-text="slide.tagline" class="text-emerald-300 font-bold tracking-widest uppercase text-xs sm:text-sm mb-3 sm:mb-4 drop-shadow-md"></p>
                        </template>
                        <h1 x-text="slide.title" class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-white mb-4 sm:mb-6 leading-tight drop-shadow-lg"></h1>
                        <template x-if="slide.description">
                            <p x-text="slide.description" class="text-base sm:text-xl text-gray-200 mb-8 sm:mb-10 max-w-2xl mx-auto drop-shadow-md"></p>
                        </template>
                        
                        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center items-center">
                            <template x-if="slide.primaryBtnText">
                                <a :href="slide.primaryBtnUrl" class="modern-btn modern-btn-primary w-full sm:w-auto px-8 py-3 uppercase tracking-wider text-sm sm:text-base">
                                    <span x-text="slide.primaryBtnText"></span>
                                    <svg class="ml-2 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </template>
                            <template x-if="slide.secondaryBtnText">
                                <a :href="slide.secondaryBtnUrl" class="modern-btn modern-btn-secondary w-full sm:w-auto px-8 py-3 uppercase tracking-wider text-sm sm:text-base">
                                    <span x-text="slide.secondaryBtnText"></span>
                                </a>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </template>

        <!-- Slider Controls (Arrows) -->
        <button @click="prev()" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white p-2 rounded-full transition z-20 focus:outline-none hidden sm:flex items-center justify-center">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button @click="next()" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white p-2 rounded-full transition z-20 focus:outline-none hidden sm:flex items-center justify-center">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <!-- Slider Indicators (Dots) -->
        <div class="absolute bottom-6 left-0 right-0 flex justify-center space-x-2.5 z-20">
            <template x-for="(slide, index) in slides" :key="index">
                <button @click="activeSlide = index" 
                        class="w-3 h-3 rounded-full transition-all duration-300 focus:outline-none"
                        :class="activeSlide === index ? 'bg-emerald-500 scale-125' : 'bg-white/50 hover:bg-white/80'"></button>
            </template>
        </div>
    </div>
@endif
