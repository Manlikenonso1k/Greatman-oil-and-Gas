{{-- resources/views/pages/lpg-trust.blade.php --}}
@extends('layouts.app')

@section('title', 'LPG Trust - GreatMan Oil & Gas')

@section('content')
<!-- Trust & Safety Section -->
<section class="max-w-container-max mx-auto px-lg py-xxl text-center">
    <div class="inline-flex items-center px-md py-xs rounded-full bg-secondary-container text-on-secondary-container mb-lg">
        <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">verified</span>
        <span class="font-label-sm uppercase tracking-wider">The Standard of Purity</span>
    </div>
    <h1 class="font-display-lg text-primary mb-md max-w-3xl mx-auto">Energy You Can Trust. Purity You Can Measure.</h1>
    <p class="text-on-surface-variant text-body-md max-w-2xl mx-auto mb-xl">At GreatMan, our LPG Trust module ensures every gram of gas delivered to your home meets international safety and quality standards through a transparent, audited process.</p>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-lg mt-xxl">
        <div class="bg-surface-container-low rounded-xl p-lg natural-shadow natural-shadow-hover transition-all text-left flex flex-col justify-between overflow-hidden relative">
            <div>
                <div class="w-12 h-12 rounded-lg bg-secondary-container flex items-center justify-center mb-lg">
                    <span class="material-symbols-outlined text-secondary">scale</span>
                </div>
                <h3 class="font-headline-lg text-primary mb-sm">Transparent Open Weighing</h3>
                <p class="text-on-surface-variant text-body-md mb-lg">No more guessing. We weigh every cylinder in front of you using high-precision digital scales calibrated to 0.01kg accuracy.</p>
            </div>
            <div class="relative h-48 mt-md rounded-lg overflow-hidden bg-white flex items-center justify-center">
                <img class="object-cover w-full h-full opacity-90" alt="Digital Scale" src="{{ asset('images/quality-scale.jpg') }}"/>
                <div class="absolute inset-0 bg-gradient-to-t from-white/40 to-transparent"></div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-xl p-lg natural-shadow natural-shadow-hover transition-all text-left flex flex-col justify-between overflow-hidden relative">
            <div>
                <div class="w-12 h-12 rounded-lg bg-secondary-container flex items-center justify-center mb-lg">
                    <span class="material-symbols-outlined text-secondary">security</span>
                </div>
                <h3 class="font-headline-lg text-primary mb-sm">Valve Safety Checks</h3>
                <p class="text-on-surface-variant text-body-md mb-lg">Zero tolerance for leaks. Our 5-point ultrasonic safety check ensures every valve seal is airtight and tamper-proof.</p>
            </div>
            <div class="relative h-48 mt-md rounded-lg overflow-hidden bg-white flex items-center justify-center">
                <img class="object-cover w-full h-full opacity-90" alt="Gas Valve" src="{{ asset('images/quality-valve.jpg') }}"/>
                <div class="absolute inset-0 bg-gradient-to-t from-white/40 to-transparent"></div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-xl p-lg natural-shadow natural-shadow-hover transition-all text-left flex flex-col justify-between overflow-hidden relative">
            <div>
                <div class="w-12 h-12 rounded-lg bg-secondary-container flex items-center justify-center mb-lg">
                    <span class="material-symbols-outlined text-secondary">local_fire_department</span>
                </div>
                <h3 class="font-headline-lg text-primary mb-sm">Premium Quality Burn</h3>
                <p class="text-on-surface-variant text-body-md mb-lg">Ultra-refined LPG composition for a consistent blue flame, ensuring maximum thermal efficiency and zero carbon soot.</p>
            </div>
            <div class="relative h-48 mt-md rounded-lg overflow-hidden bg-white flex items-center justify-center">
                <img class="object-cover w-full h-full opacity-90" alt="Blue Flame" src="{{ asset('images/quality-flame.jpg') }}"/>
                <div class="absolute inset-0 bg-gradient-to-t from-white/40 to-transparent"></div>
            </div>
        </div>
    </div>
</section>

<!-- Certifications Section -->
<section class="bg-white py-xxl border-t border-outline-variant">
    <div class="max-w-container-max mx-auto px-lg">
        <div class="flex flex-col md:flex-row items-center justify-between gap-xl">
            <div class="max-w-md">
                <h2 class="font-headline-lg text-primary mb-md">Certified Safety Standards</h2>
                <p class="text-on-surface-variant text-body-md">Our processes are audited quarterly by international safety regulators to ensure GreatMan remains the benchmark for LPG distribution in the region.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-lg">
                <div class="flex flex-col items-center gap-sm">
                    <div class="w-20 h-20 rounded-full border border-outline-variant flex items-center justify-center grayscale opacity-60">
                        <span class="material-symbols-outlined text-4xl">policy</span>
                    </div>
                    <span class="font-label-sm text-on-surface-variant">ISO 9001:2015</span>
                </div>
                <div class="flex flex-col items-center gap-sm">
                    <div class="w-20 h-20 rounded-full border border-outline-variant flex items-center justify-center grayscale opacity-60">
                        <span class="material-symbols-outlined text-4xl">health_and_safety</span>
                    </div>
                    <span class="font-label-sm text-on-surface-variant">OHSAS 18001</span>
                </div>
                <div class="flex flex-col items-center gap-sm">
                    <div class="w-20 h-20 rounded-full border border-outline-variant flex items-center justify-center grayscale opacity-60">
                        <span class="material-symbols-outlined text-4xl">eco</span>
                    </div>
                    <span class="font-label-sm text-on-surface-variant">Clean Burn Cert</span>
                </div>
                <div class="flex flex-col items-center gap-sm">
                    <div class="w-20 h-20 rounded-full border border-outline-variant flex items-center justify-center grayscale opacity-60">
                        <span class="material-symbols-outlined text-4xl">workspace_premium</span>
                    </div>
                    <span class="font-label-sm text-on-surface-variant">NLPGA Gold</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="max-w-container-max mx-auto px-lg py-xxl">
    <div class="bg-primary rounded-xxl p-xl md:p-xxl relative overflow-hidden text-center md:text-left flex flex-col md:flex-row items-center justify-between gap-xl">
        <div class="relative z-10 max-w-xl">
            <h2 class="font-display-lg text-on-primary mb-md">Experience the GreatMan Trust.</h2>
            <p class="text-on-primary/70 text-body-md mb-lg">Join over 50,000 households that choose safety and transparency every single day. Order your next refill with the LPG Trust promise.</p>
            <div class="flex flex-wrap gap-md justify-center md:justify-start">
                <a href="{{ route('order') }}" class="bg-secondary text-on-secondary px-xl py-md rounded-lg font-bold hover:opacity-90 transition-all flex items-center gap-sm inline-flex">
                    <span>Request LPG Delivery</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
                <button class="bg-transparent text-on-primary border border-on-primary/30 px-xl py-md rounded-lg font-bold hover:bg-on-primary/10 transition-all">
                    View Station Rates
                </button>
            </div>
        </div>
        <div class="absolute top-0 right-0 w-1/2 h-full bg-secondary opacity-10 blur-3xl rounded-full translate-x-1/2 -translate-y-1/2"></div>
    </div>
</section>
@endsection
