{{-- resources/views/pages/locator.blade.php --}}
@extends('layouts.app')

@section('title', 'Station Locator - GreatMan Oil & Gas')

@section('content')
<div class="pt-20 px-lg py-xxl max-w-container-max mx-auto">
    <h1 class="font-display-lg text-primary mb-md">Find Your Nearest GreatMan Station</h1>
    <p class="text-on-surface-variant text-body-md mb-lg max-w-2xl">Access our entire network of premium fuel stations across Nigeria.</p>
    
    <div class="mt-xl">
        <a href="https://www.google.com/maps/place/Greatman+oil+and+Gas/@5.5358168,5.8120042,17z/data=!3m1!4b1!4m6!3m5!1s0x1041ad1f3d9e3b47:0x340d9fe2c4278f96!8m2!3d5.5358168!4d5.8120042!16s%2Fg%2F11z787fsbl?entry=ttu&g_ep=EgoyMDI2MDUwNi4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="bg-primary text-on-primary px-xl py-md rounded-lg font-bold hover:opacity-90 transition-all inline-flex items-center gap-sm">
            <span class="material-symbols-outlined">map</span>
            Open Full Map
        </a>
    </div>
</div>
@endsection
