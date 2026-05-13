@extends('layouts.app')

@section('title', 'GreatMan Oil & Gas | Live Status Dashboard')

@section('content')
<div class="w-full py-xs px-lg flex items-center gap-md overflow-hidden whitespace-nowrap bg-secondary-container border-b border-outline-variant">
    <div class="hidden md:flex items-center gap-xs text-on-secondary-container shrink-0 z-10 bg-secondary-container pr-md">
        <span class="material-symbols-outlined">payments</span>
        <span class="font-label-sm uppercase tracking-wider font-black">Current Rates</span>
    </div>
    <div class="flex gap-xl animate-marquee">
        @forelse(($prices ?? []) as $price)
            <span class="font-label-sm uppercase tracking-wider text-on-secondary-container/80">
                {{ optional($price)->fuel_type }}: 
                <span class="font-bold text-on-secondary-container">₦{{ number_format(optional($price)->price_per_unit ?? 0, 2) }}</span>
            </span>
        @empty
            <span class="font-label-sm uppercase tracking-wider text-on-secondary-container/80">Petrol: <span class="font-bold">₦1,350.00/L</span></span>
            <span class="font-label-sm uppercase tracking-wider text-on-secondary-container/80">Diesel: <span class="font-bold">₦2,000.00/L</span></span>
            <span class="font-label-sm uppercase tracking-wider text-on-secondary-container/80">LPG (12.5kg): <span class="font-bold">₦16,250.00</span></span>
        @endforelse
    </div>
</div>

<main class="max-w-container-max mx-auto px-lg py-xxl flex gap-xl">
    <aside class="hidden lg:flex flex-col py-lg h-[calc(100vh-120px)] w-64 shrink-0 bg-surface-container-low border-r border-outline-variant rounded-xl sticky top-28">
        <div class="px-lg mb-xl">
            <img src="{{ asset('images/header logo.png') }}" alt="GreatMan Oil & Gas" class="h-16 object-contain mb-md"/>
            <p class="text-on-surface-variant text-label-sm italic">Think Energy, Think Greatman</p>
        </div>
        <nav class="flex-1 space-y-sm">
            <a class="flex items-center gap-md p-md mx-2 bg-secondary text-on-secondary rounded-lg font-body-md text-body-md" href="{{ route('dashboard') }}">
                <span class="material-symbols-outlined">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center gap-md p-md mx-2 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-body-md text-body-md" href="#">
                <span class="material-symbols-outlined">map</span>
                <span>Station Map</span>
            </a>
            <a class="flex items-center gap-md p-md mx-2 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-body-md text-body-md" href="#">
                <span class="material-symbols-outlined">trending_up</span>
                <span>Price Trends</span>
            </a>
            <a class="flex items-center gap-md p-md mx-2 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-body-md text-body-md" href="#">
                <span class="material-symbols-outlined">history</span>
                <span>Order History</span>
            </a>
            <a class="flex items-center gap-md p-md mx-2 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-body-md text-body-md" href="#">
                <span class="material-symbols-outlined">support_agent</span>
                <span>Support</span>
            </a>
        </nav>
        <div class="px-md mt-auto">
            <button class="w-full bg-primary text-on-primary py-md rounded-lg font-bold hover:opacity-90 transition-all">Find Nearest Station</button>
        </div>
    </aside>

    <div class="flex-1">
        <div class="mb-xl flex justify-between items-end flex-col md:flex-row gap-md">
            <div>
                <h1 class="font-display-lg text-display-lg text-primary">Live Lane Status</h1>
                <p class="text-on-surface-variant mt-xs">Real-time monitoring for GreatMan Station #042 - Central Hub</p>
            </div>
            <div class="flex items-center gap-sm bg-surface-container-high px-md py-sm rounded-full">
                <span class="relative flex h-3 w-3">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-secondary"></span>
                </span>
                <span class="font-label-sm text-label-sm text-on-surface font-bold">LIVE UPDATES ACTIVE</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
            <section class="space-y-md">
                <div class="flex items-center gap-md mb-md">
                    <div class="p-sm bg-primary-container text-on-primary-container rounded-lg">
                        <span class="material-symbols-outlined">local_gas_station</span>
                    </div>
                    <h2 class="font-headline-lg text-headline-lg text-primary">Fuel Pump Status</h2>
                </div>

                <div class="bg-white p-lg rounded-xl natural-shadow border-l-4 border-secondary transition-all hover:translate-y-[-2px]">
                    <div class="flex justify-between items-start mb-lg">
                        <div>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">LANE 01</span>
                            <h3 class="font-headline-lg text-headline-lg text-primary">PMS - Premium</h3>
                        </div>
                        <div class="bg-secondary/15 text-secondary px-md py-xs rounded-full font-bold text-xs">OPTIMAL</div>
                    </div>
                    <div class="flex items-center gap-xl">
                        <div class="relative flex items-center justify-center h-20 w-20">
                            <svg class="h-full w-full transform -rotate-90">
                                <circle class="text-surface-variant" cx="40" cy="40" fill="transparent" r="34" stroke="currentColor" stroke-width="6"></circle>
                                <circle class="text-secondary" cx="40" cy="40" fill="transparent" r="34" stroke="currentColor" stroke-dasharray="213.6" stroke-dashoffset="190" stroke-width="6"></circle>
                            </svg>
                            <span class="absolute font-bold text-primary">3m</span>
                        </div>
                        <div class="flex-1 space-y-sm">
                            <div class="flex justify-between text-label-sm">
                                <span class="text-on-surface-variant">Queue Depth</span>
                                <span class="font-bold text-primary">2 Vehicles</span>
                            </div>
                            <div class="w-full bg-surface-variant h-1 rounded-full overflow-hidden">
                                <div class="bg-secondary h-full w-[15%]"></div>
                            </div>
                            <p class="text-label-sm text-on-surface-variant italic">Next pump available in ~45s</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-lg rounded-xl natural-shadow border-l-4 border-error transition-all hover:translate-y-[-2px]">
                    <div class="flex justify-between items-start mb-lg">
                        <div>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">LANE 02</span>
                            <h3 class="font-headline-lg text-headline-lg text-primary">AGO - Diesel</h3>
                        </div>
                        <div class="bg-error/10 text-error px-md py-xs rounded-full font-bold text-xs">BUSY</div>
                    </div>
                    <div class="flex items-center gap-xl">
                        <div class="relative flex items-center justify-center h-20 w-20">
                            <svg class="h-full w-full transform -rotate-90">
                                <circle class="text-surface-variant" cx="40" cy="40" fill="transparent" r="34" stroke="currentColor" stroke-width="6"></circle>
                                <circle class="text-error" cx="40" cy="40" fill="transparent" r="34" stroke="currentColor" stroke-dasharray="213.6" stroke-dashoffset="50" stroke-width="6"></circle>
                            </svg>
                            <span class="absolute font-bold text-primary">18m</span>
                        </div>
                        <div class="flex-1 space-y-sm">
                            <div class="flex justify-between text-label-sm">
                                <span class="text-on-surface-variant">Queue Depth</span>
                                <span class="font-bold text-primary">12 Vehicles</span>
                            </div>
                            <div class="w-full bg-surface-variant h-1 rounded-full overflow-hidden">
                                <div class="bg-error h-full w-[80%]"></div>
                            </div>
                            <p class="text-label-sm text-on-surface-variant italic">Heavy transit volume detected</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="space-y-md">
                <div class="flex items-center gap-md mb-md">
                    <div class="p-sm bg-secondary-container text-on-secondary-container rounded-lg">
                        <span class="material-symbols-outlined">payments</span>
                    </div>
                    <h2 class="font-headline-lg text-headline-lg text-primary">Gas Refill Status</h2>
                </div>

                <div class="bg-white p-lg rounded-xl natural-shadow border-l-4 border-secondary transition-all hover:translate-y-[-2px]">
                    <div class="flex justify-between items-start mb-lg">
                        <div>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">POINT A</span>
                            <h3 class="font-headline-lg text-headline-lg text-primary">Domestic LPG</h3>
                        </div>
                        <div class="bg-secondary/15 text-secondary px-md py-xs rounded-full font-bold text-xs">FAST TRACK</div>
                    </div>
                    <div class="flex items-center gap-xl">
                        <div class="relative flex items-center justify-center h-20 w-20">
                            <svg class="h-full w-full transform -rotate-90">
                                <circle class="text-surface-variant" cx="40" cy="40" fill="transparent" r="34" stroke="currentColor" stroke-width="6"></circle>
                                <circle class="text-secondary" cx="40" cy="40" fill="transparent" r="34" stroke="currentColor" stroke-dasharray="213.6" stroke-dashoffset="180" stroke-width="6"></circle>
                            </svg>
                            <span class="absolute font-bold text-primary">5m</span>
                        </div>
                        <div class="flex-1 space-y-sm">
                            <div class="flex justify-between text-label-sm">
                                <span class="text-on-surface-variant">Cylinders in Queue</span>
                                <span class="font-bold text-primary">4 Units</span>
                            </div>
                            <div class="w-full bg-surface-variant h-1 rounded-full overflow-hidden">
                                <div class="bg-secondary h-full w-[25%]"></div>
                            </div>
                            <p class="text-label-sm text-on-surface-variant italic">3 attendants active</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-lg rounded-xl natural-shadow border-l-4 border-primary transition-all hover:translate-y-[-2px]">
                    <div class="flex justify-between items-start mb-lg">
                        <div>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">POINT B</span>
                            <h3 class="font-headline-lg text-headline-lg text-primary">Industrial Bulk</h3>
                        </div>
                        <div class="bg-primary/10 text-primary px-md py-xs rounded-full font-bold text-xs">MODERATE</div>
                    </div>
                    <div class="flex items-center gap-xl">
                        <div class="relative flex items-center justify-center h-20 w-20">
                            <svg class="h-full w-full transform -rotate-90">
                                <circle class="text-surface-variant" cx="40" cy="40" fill="transparent" r="34" stroke="currentColor" stroke-width="6"></circle>
                                <circle class="text-primary" cx="40" cy="40" fill="transparent" r="34" stroke="currentColor" stroke-dasharray="213.6" stroke-dashoffset="120" stroke-width="6"></circle>
                            </svg>
                            <span class="absolute font-bold text-primary">12m</span>
                        </div>
                        <div class="flex-1 space-y-sm">
                            <div class="flex justify-between text-label-sm">
                                <span class="text-on-surface-variant">Active Loads</span>
                                <span class="font-bold text-primary">2 Tanks</span>
                            </div>
                            <div class="w-full bg-surface-variant h-1 rounded-full overflow-hidden">
                                <div class="bg-primary h-full w-[45%]"></div>
                            </div>
                            <p class="text-label-sm text-on-surface-variant italic">Pressure stabilization in progress</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="mt-xl rounded-xl overflow-hidden natural-shadow relative h-64 bg-surface-variant">
            <img class="w-full h-full object-cover grayscale opacity-50" alt="Station Map Overview" src="{{ asset('images/map-interactive.jpg') }}"/>
            <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent flex items-end p-lg">
                <div class="text-white">
                    <h4 class="font-headline-lg font-bold">Station Map Overview</h4>
                    <p class="font-label-sm opacity-80 uppercase tracking-widest">Global Hub #042 Connectivity Status: ONLINE</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
