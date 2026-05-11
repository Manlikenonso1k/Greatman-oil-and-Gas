{{-- resources/views/pages/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Live Station - GreatMan Oil & Gas')

@section('content')
@include('components.hero')

<section class="py-xxl container mx-auto px-lg">
    <div class="flex flex-col md:flex-row justify-between items-end gap-md mb-xl">
        <div>
            <h2 class="font-headline-lg text-headline-lg text-primary mb-xs">Network Performance</h2>
            <p class="text-on-surface-variant max-w-md">Real-time status tracking across our premium station network.</p>
        </div>
        <div class="flex bg-surface-container rounded-lg p-1">
            <button class="bg-surface text-primary font-bold px-md py-xs rounded-md shadow-sm">Grid View</button>
            <button class="text-on-surface-variant px-md py-xs">Map View</button>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-lg">
        <div class="bg-surface rounded-xl p-lg shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0px_4px_20px_rgba(0,0,0,0.08)] transition-all">
            <div class="flex justify-between items-start mb-md">
                <div>
                    <h4 class="font-bold text-primary">Opete Premium Station</h4>
                    <p class="text-label-sm text-on-surface-variant">Otokutu junction opete road, opposite Day Spring School</p>
                </div>
                <span class="bg-secondary/15 text-secondary px-sm py-1 rounded-full text-[12px] font-bold">OPERATIONAL</span>
            </div>
            <div class="space-y-md">
                <div class="flex justify-between items-center py-sm border-b border-outline-variant">
                    <span class="text-[14px]">Petrol Status</span>
                    <span class="text-[14px] font-bold text-secondary">In Stock</span>
                </div>
                <div class="flex justify-between items-center py-sm border-b border-outline-variant">
                    <span class="text-[14px]">Diesel Status</span>
                    <span class="text-[14px] font-bold text-secondary">In Stock</span>
                </div>
                <div class="flex justify-between items-center py-sm">
                    <span class="text-[14px]">Avg. Wait Time</span>
                    <span class="text-[14px] font-bold text-primary">8 mins</span>
                </div>
            </div>
            <a href="https://maps.app.goo.gl/PCdCpqD6PbYgangX8" target="_blank" rel="noopener noreferrer" class="w-full mt-lg border border-outline-variant py-sm rounded-lg font-bold hover:bg-surface-container-high transition-colors block text-center">Details &amp; Directions</a>
        </div>

        <div class="bg-surface rounded-xl p-lg shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0px_4px_20px_rgba(0,0,0,0.08)] transition-all">
            <div class="flex justify-between items-start mb-md">
                <div>
                    <h4 class="font-bold text-primary">Victoria Island Hub</h4>
                    <p class="text-label-sm text-on-surface-variant">Akin Adesola St</p>
                </div>
                <span class="bg-secondary/15 text-secondary px-sm py-1 rounded-full text-[12px] font-bold">OPERATIONAL</span>
            </div>
            <div class="space-y-md">
                <div class="flex justify-between items-center py-sm border-b border-outline-variant">
                    <span class="text-[14px]">Petrol Status</span>
                    <span class="text-[14px] font-bold text-secondary">In Stock</span>
                </div>
                <div class="flex justify-between items-center py-sm border-b border-outline-variant">
                    <span class="text-[14px]">Diesel Status</span>
                    <span class="text-[14px] font-bold text-error">Limited Stock</span>
                </div>
                <div class="flex justify-between items-center py-sm">
                    <span class="text-[14px]">Avg. Wait Time</span>
                    <span class="text-[14px] font-bold text-primary">12 mins</span>
                </div>
            </div>
            <a href="https://maps.app.goo.gl/PCdCpqD6PbYgangX8" target="_blank" rel="noopener noreferrer" class="w-full mt-lg border border-outline-variant py-sm rounded-lg font-bold hover:bg-surface-container-high transition-colors block text-center">Details &amp; Directions</a>
        </div>

        <div class="relative rounded-xl overflow-hidden shadow-[0px_4px_20px_rgba(0,0,0,0.04)] group">
            <img alt="Interactive Map" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 cursor-pointer" onclick="window.open('https://maps.app.goo.gl/PCdCpqD6PbYgangX8', '_blank')" src="{{ asset('images/map-interactive.jpg') }}"/>
            <div class="absolute inset-0 bg-primary/20 flex items-center justify-center">
                <div class="bg-surface p-lg rounded-xl text-center shadow-lg">
                    <span class="material-symbols-outlined text-secondary text-4xl">map</span>
                    <p class="font-bold text-primary mt-sm">Interactive Network Map</p>
                    <p class="text-[12px] text-on-surface-variant mb-md">Locate 45+ premium stations</p>
                    <a href="https://maps.app.goo.gl/PCdCpqD6PbYgangX8" target="_blank" rel="noopener noreferrer" class="bg-primary text-on-primary px-lg py-xs rounded-lg text-sm font-bold inline-block">Open Map</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-surface-container-low py-xxl">
    <div class="container mx-auto px-lg">
        <div class="bg-primary rounded-3xl p-xl md:p-xxl flex flex-col md:flex-row items-center justify-between gap-xl">
            <div class="max-w-xl">
                <h2 class="font-headline-lg text-headline-lg text-on-primary mb-md">Energy Intelligence in your Inbox</h2>
                <p class="text-on-primary-container mb-lg">Stay updated with real-time price changes, new station openings, and exclusive corporate loyalty rewards.</p>
                <div class="flex gap-sm">
                    <input class="flex-1 rounded-xl border-none bg-primary-container text-on-primary px-lg py-md focus:ring-2 focus:ring-secondary" placeholder="Enter your email" type="email"/>
                    <button class="bg-secondary text-on-secondary px-xl py-md rounded-xl font-bold hover:opacity-90">Join Now</button>
                </div>
            </div>
            <div class="hidden lg:block">
                <img alt="Professional Service" class="rounded-2xl shadow-xl w-64 h-64 object-cover rotate-3" src="{{ asset('images/service-professional.jpg') }}"/>
            </div>
        </div>
    </div>
</section>

<section class="max-w-container-max mx-auto px-lg py-xxl text-center">
    <div class="inline-flex items-center px-md py-xs rounded-full bg-secondary-container text-on-secondary-container mb-lg">
        <span class="material-symbols-outlined text-[18px] mr-xs" data-icon="verified" style="font-variation-settings: 'FILL' 1;">verified</span>
        <span class="font-label-sm text-label-sm uppercase tracking-wider">The Standard of Purity</span>
    </div>
    <h1 class="font-display-lg text-display-lg text-primary mb-md max-w-3xl mx-auto">Energy You Can Trust. Purity You Can Measure.</h1>
    <p class="text-on-surface-variant text-body-md max-w-2xl mx-auto mb-xl">At GreatMan, our LPG Trust module ensures every gram of gas delivered to your home meets international safety and quality standards through a transparent, audited process.</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-lg mt-xxl">
        <div class="bg-surface-container-low rounded-xl p-lg natural-shadow natural-shadow-hover transition-all text-left flex flex-col justify-between overflow-hidden relative">
            <div>
                <div class="w-12 h-12 rounded-lg bg-secondary-container flex items-center justify-center mb-lg">
                    <span class="material-symbols-outlined text-secondary" data-icon="scale">scale</span>
                </div>
                <h3 class="font-headline-lg text-headline-lg text-primary mb-sm">Transparent Open Weighing</h3>
                <p class="text-on-surface-variant text-body-md mb-lg">No more guessing. We weigh every cylinder in front of you using high-precision digital scales calibrated to 0.01kg accuracy.</p>
            </div>
            <div class="relative h-48 mt-md rounded-lg overflow-hidden bg-white flex items-center justify-center">
                <img class="object-cover w-full h-full opacity-90" src="{{ asset('images/quality-scale.jpg') }}"/>
                <div class="absolute inset-0 bg-gradient-to-t from-white/40 to-transparent"></div>
            </div>
        </div>
        <div class="bg-surface-container-low rounded-xl p-lg natural-shadow natural-shadow-hover transition-all text-left flex flex-col justify-between overflow-hidden relative">
            <div>
                <div class="w-12 h-12 rounded-lg bg-secondary-container flex items-center justify-center mb-lg">
                    <span class="material-symbols-outlined text-secondary" data-icon="security">security</span>
                </div>
                <h3 class="font-headline-lg text-headline-lg text-primary mb-sm">Valve Safety Checks</h3>
                <p class="text-on-surface-variant text-body-md mb-lg">Zero tolerance for leaks. Our 5-point ultrasonic safety check ensures every valve seal is airtight and tamper-proof.</p>
            </div>
            <div class="relative h-48 mt-md rounded-lg overflow-hidden bg-white flex items-center justify-center">
                <img class="object-cover w-full h-full opacity-90" src="{{ asset('images/quality-valve.jpg') }}"/>
                <div class="absolute inset-0 bg-gradient-to-t from-white/40 to-transparent"></div>
            </div>
        </div>
        <div class="bg-surface-container-low rounded-xl p-lg natural-shadow natural-shadow-hover transition-all text-left flex flex-col justify-between overflow-hidden relative">
            <div>
                <div class="w-12 h-12 rounded-lg bg-secondary-container flex items-center justify-center mb-lg">
                    <span class="material-symbols-outlined text-secondary" data-icon="local_fire_department">local_fire_department</span>
                </div>
                <h3 class="font-headline-lg text-headline-lg text-primary mb-sm">Premium Quality Burn</h3>
                <p class="text-on-surface-variant text-body-md mb-lg">Ultra-refined LPG composition for a consistent blue flame, ensuring maximum thermal efficiency and zero carbon soot.</p>
            </div>
            <div class="relative h-48 mt-md rounded-lg overflow-hidden bg-white flex items-center justify-center">
                <img class="object-cover w-full h-full opacity-90" src="{{ asset('images/quality-flame.jpg') }}"/>
                <div class="absolute inset-0 bg-gradient-to-t from-white/40 to-transparent"></div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-xxl border-t border-outline-variant">
    <div class="max-w-container-max mx-auto px-lg">
        <div class="flex flex-col md:flex-row items-center justify-between gap-xl">
            <div class="max-w-md">
                <h2 class="font-headline-lg text-headline-lg text-primary mb-md">Certified Safety Standards</h2>
                <p class="text-on-surface-variant text-body-md">Our processes are audited quarterly by international safety regulators to ensure GreatMan remains the benchmark for LPG distribution in the region.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-lg">
                <div class="flex flex-col items-center gap-sm">
                    <div class="w-20 h-20 rounded-full border border-outline-variant flex items-center justify-center grayscale opacity-60">
                        <span class="material-symbols-outlined text-4xl" data-icon="policy">policy</span>
                    </div>
                    <span class="font-label-sm text-label-sm text-on-surface-variant">ISO 9001:2015</span>
                </div>
                <div class="flex flex-col items-center gap-sm">
                    <div class="w-20 h-20 rounded-full border border-outline-variant flex items-center justify-center grayscale opacity-60">
                        <span class="material-symbols-outlined text-4xl" data-icon="health_and_safety">health_and_safety</span>
                    </div>
                    <span class="font-label-sm text-label-sm text-on-surface-variant">OHSAS 18001</span>
                </div>
                <div class="flex flex-col items-center gap-sm">
                    <div class="w-20 h-20 rounded-full border border-outline-variant flex items-center justify-center grayscale opacity-60">
                        <span class="material-symbols-outlined text-4xl" data-icon="eco">eco</span>
                    </div>
                    <span class="font-label-sm text-label-sm text-on-surface-variant">Clean Burn Cert</span>
                </div>
                <div class="flex flex-col items-center gap-sm">
                    <div class="w-20 h-20 rounded-full border border-outline-variant flex items-center justify-center grayscale opacity-60">
                        <span class="material-symbols-outlined text-4xl" data-icon="workspace_premium">workspace_premium</span>
                    </div>
                    <span class="font-label-sm text-label-sm text-on-surface-variant">NLPGA Gold</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="max-w-container-max mx-auto px-lg py-xxl">
    <div class="bg-primary rounded-xxl p-xl md:p-xxl relative overflow-hidden text-center md:text-left flex flex-col md:flex-row items-center justify-between gap-xl">
        <div class="relative z-10 max-w-xl">
            <h2 class="font-display-lg text-display-lg text-on-primary mb-md">Experience the GreatMan Trust.</h2>
            <p class="text-on-primary/70 text-body-md mb-lg">Join over 50,000 households that choose safety and transparency every single day. Order your next refill with the LPG Trust promise.</p>
            <div class="flex flex-wrap gap-md justify-center md:justify-start">
                <button class="bg-secondary text-on-secondary px-xl py-md rounded-lg font-bold hover:opacity-90 transition-all flex items-center gap-sm">
                    <span>Request LPG Delivery</span>
                    <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
                </button>
                <button class="bg-transparent text-on-primary border border-on-primary/30 px-xl py-md rounded-lg font-bold hover:bg-on-primary/10 transition-all">
                    View Station Rates
                </button>
            </div>
        </div>
        <div class="relative z-10 hidden lg:block">
            <img class="w-64 h-64 object-cover rounded-xl shadow-2xl rotate-3" src="{{ asset('images/team-professional.jpg') }}"/>
        </div>
        <div class="absolute top-0 right-0 w-1/2 h-full bg-secondary opacity-10 blur-3xl rounded-full translate-x-1/2 -translate-y-1/2"></div>
    </div>
</section>
@endsection
