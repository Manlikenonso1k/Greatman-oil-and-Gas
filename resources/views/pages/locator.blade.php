{{-- resources/views/pages/locator.blade.php --}}
@extends('layouts.app')

@section('title', 'Station Locator - GreatMan Oil & Gas')

@section('content')
<div class="pt-20 px-lg py-xxl max-w-container-max mx-auto">
    <h1 class="font-display-lg text-primary mb-md">Find Your Nearest GreatMan Station</h1>
    <p class="text-on-surface-variant text-body-md mb-lg max-w-2xl">Access our entire network of premium fuel stations across Nigeria.</p>
    
    <div class="mt-xl">
        <a href="https://maps.app.goo.gl/PCdCpqD6PbYgangX8" target="_blank" class="bg-primary text-on-primary px-xl py-md rounded-lg font-bold hover:opacity-90 transition-all inline-flex items-center gap-sm">
            <span class="material-symbols-outlined">map</span>
            Open Full Map
        </a>
    </div>
</div>
@endsection
