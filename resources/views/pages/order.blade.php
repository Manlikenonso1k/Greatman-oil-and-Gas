{{-- resources/views/pages/order.blade.php --}}
@extends('layouts.app')

@section('title', 'Order Fuel - GreatMan Oil & Gas')

@section('content')
<div class="pt-20 px-lg py-xxl max-w-container-max mx-auto">
    <div class="max-w-2xl">
        <h1 class="font-display-lg text-primary mb-md">Order Your Fuel</h1>
        <p class="text-on-surface-variant text-body-md mb-lg">Fast, reliable, and transparent fuel delivery to your doorstep.</p>
        
        <div class="bg-surface-container-low rounded-xl p-lg mt-xl space-y-lg">
            <div>
                <h3 class="font-headline-lg text-primary mb-sm">Current Prices</h3>
                <div class="space-y-md">
                    @forelse($prices ?? [] as $price)
                    <div class="flex justify-between items-center pb-md border-b border-outline-variant">
                        <span class="text-body-md text-on-surface">{{ $price->fuel_type }}</span>
                        <span class="font-bold text-secondary">₦{{ number_format($price->price_per_unit, 2) }}</span>
                    </div>
                    @empty
                    <p class="text-on-surface-variant">Prices loading...</p>
                    @endforelse
                </div>
            </div>
            
            <div>
                <h3 class="font-headline-lg text-primary mb-md">Quick Order</h3>
                <button class="w-full bg-secondary text-on-secondary py-md rounded-lg font-bold hover:opacity-90 transition-all">
                    Place Order via WhatsApp
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
