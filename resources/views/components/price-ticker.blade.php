{{-- resources/views/components/price-ticker.blade.php --}}
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
            <span class="font-label-sm uppercase tracking-wider text-on-secondary-container/80">Petrol: <span class="font-bold">₦617.00/L</span></span>
            <span class="font-label-sm uppercase tracking-wider text-on-secondary-container/80">Diesel: <span class="font-bold">₦1,150.00/L</span></span>
            <span class="font-label-sm uppercase tracking-wider text-on-secondary-container/80">LPG (12.5kg): <span class="font-bold">₦14,200.00</span></span>
        @endforelse
    </div>
</div>
