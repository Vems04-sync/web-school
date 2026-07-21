@props(['title', 'subtitle' => null, 'label' => null])

<div x-data="{ 
        activeSlide: 0, 
        slides: [
            'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1920&q=80',
            'https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1920&q=80',
            'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1920&q=80'
        ],
        next() {
            this.activeSlide = (this.activeSlide + 1) % this.slides.length;
        },
        init() {
            setInterval(() => {
                this.next();
            }, 6000);
        }
     }"
     class="relative overflow-hidden bg-gradient-to-br from-emerald-950 via-emerald-900 to-emerald-700 pt-36 pb-20 text-white text-center">
    
    <!-- Decorative Overlays & Slider -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Slides -->
        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="activeSlide === index"
                 x-transition:enter="transition ease-out duration-1000"
                 x-transition:enter-start="opacity-0 scale-105"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-500"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="absolute inset-0 w-full h-full">
                <img :src="slide" class="absolute inset-0 w-full h-full object-cover opacity-20 select-none">
            </div>
        </template>
        
        <!-- Gradient overlay -->
        <div class="absolute inset-0 bg-emerald-950/40 mix-blend-multiply"></div>

        <!-- Blur orbs -->
        <div class="absolute -top-16 left-0 w-72 h-72 bg-emerald-400/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-4">
        @if($label)
        <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-white/10 backdrop-blur border border-white/15 rounded-full text-white/90 text-xs font-bold uppercase tracking-wider mb-4">
            {{ $label }}
        </div>
        @endif
        <h1 class="text-4xl md:text-5xl font-black mb-4 tracking-tight">{{ $title }}</h1>
        @if($subtitle)
        <p class="text-emerald-100 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed">{{ $subtitle }}</p>
        @endif
        
        {{ $slot }}
    </div>
</div>
