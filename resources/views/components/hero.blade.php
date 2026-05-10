{{-- resources/views/components/hero.blade.php --}}
@php
    $mapUrl = 'https://maps.app.goo.gl/PCdCpqD6PbYgangX8';
    $slides = [
        asset('images/slide1.jpg'),
        asset('images/slide2.jpg'),
        asset('images/slide3.jpg'),
        asset('images/slide4.jpg'),
        asset('images/slide5.jpg'),
    ];
@endphp

<section
    class="relative m-0 h-[72vh] sm:h-[78vh] md:h-[85vh] flex items-center overflow-hidden"
    x-data="heroSlider(@js($slides))"
    x-init="start()"
>
    <div class="absolute inset-0 z-0">
        <template x-for="(slide, index) in slides" :key="slide">
            <div
                class="absolute inset-0 z-0"
                x-show="index === active"
                x-transition:enter="transition ease-out duration-[1200ms]"
                x-transition:enter-start="opacity-0 scale-[1.05]"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-[1200ms]"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-[1.05]"
            >
                <img class="h-full w-full object-cover" :alt="`GreatMan station slide ${index + 1}`" :src="slide" loading="eager" decoding="async"/>
            </div>
        </template>
        <div class="absolute inset-0 bg-gradient-to-r from-primary/85 via-primary/45 to-transparent z-20"></div>
    </div>

    <div class="relative z-30 container mx-auto px-md sm:px-lg">
        <div class="max-w-xl sm:max-w-2xl text-on-primary">
            <div class="inline-flex items-center gap-xs bg-secondary/90 text-on-secondary px-sm py-1 rounded-full mb-sm sm:mb-md">
                <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                <span class="font-label-sm text-[11px] sm:text-sm">ALL SYSTEMS LIVE</span>
            </div>
            <h1 class="font-display-lg text-[38px] leading-[1.05] sm:text-display-lg mb-sm sm:mb-md">Think Energy,<br/>Think Greatman.</h1>
            <p class="font-body-md text-sm sm:text-body-md text-on-primary-container mb-lg sm:mb-xl max-w-lg bg-white/20 backdrop-blur-lg px-md sm:px-lg py-sm sm:py-md rounded-xl">
                Experience the gold standard in fueling. Real-time availability, transparent pricing, and world-class service at every GreatMan destination.
            </p>
            <div class="flex flex-wrap gap-sm sm:gap-md">
                <a href="{{ $mapUrl }}" target="_blank" rel="noopener noreferrer" class="bg-secondary-container text-on-secondary-container px-lg sm:px-xl py-sm sm:py-md rounded-xl font-bold flex items-center gap-sm hover:opacity-90 transition-all shadow-md text-sm sm:text-base">
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px]">near_me</span>
                    Find Nearest Station
                </a>
                <a href="{{ $mapUrl }}" target="_blank" rel="noopener noreferrer" class="glass-card text-on-surface px-lg sm:px-xl py-sm sm:py-md rounded-xl font-bold flex items-center gap-sm hover:bg-surface transition-all border border-white/20 text-sm sm:text-base">
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px]">map</span>
                    Open Map
                </a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-md sm:bottom-lg left-1/2 z-30 flex -translate-x-1/2 items-center gap-1.5 sm:gap-2">
        <template x-for="(slide, index) in slides" :key="`${slide}-indicator`">
            <button
                type="button"
                class="h-1 rounded-full transition-all duration-500"
                :class="index === active ? 'w-8 sm:w-10 bg-secondary' : 'w-3 sm:w-4 bg-white/40'"
                :aria-label="`Go to slide ${index + 1}`"
                @click="goTo(index)"
            ></button>
        </template>
    </div>
</section>
