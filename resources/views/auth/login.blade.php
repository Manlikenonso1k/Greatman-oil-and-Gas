@extends('layouts.app')

@section('title', 'Login | GreatMan Oil & Gas')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-primary/5 to-secondary/5 px-lg">
    <div class="w-full max-w-md bg-white rounded-xl natural-shadow p-xxl">
        <div class="mb-xl text-center">
            <h1 class="font-display-lg text-display-lg text-primary mb-md">GreatMan</h1>
            <h2 class="font-headline-lg text-headline-lg text-on-surface">Admin Login</h2>
            <p class="text-on-surface-variant text-body-md mt-sm">Enter your credentials to access the dashboard</p>
        </div>

        <form method="POST" action="{{ route('login.store') }}" class="space-y-lg">
            @csrf

            <div>
                <label for="email" class="block font-label-md text-label-md text-on-surface mb-xs">Email Address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full px-md py-sm border border-outline rounded-lg font-body-md text-body-md focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/30 transition-all" placeholder="admin@demo.com">
                @error('email')
                    <span class="text-error text-label-sm mt-xs block">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password" class="block font-label-md text-label-md text-on-surface mb-xs">Password</label>
                <input id="password" type="password" name="password" required class="w-full px-md py-sm border border-outline rounded-lg font-body-md text-body-md focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/30 transition-all" placeholder="••••••••">
                @error('password')
                    <span class="text-error text-label-sm mt-xs block">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="w-full bg-primary text-on-primary py-md rounded-lg font-bold hover:opacity-90 transition-all">Sign In</button>
        </form>

        <div class="mt-xl pt-xl border-t border-outline-variant">
            <p class="text-label-sm text-on-surface-variant text-center mb-md">Demo Credentials:</p>
            <div class="bg-surface-container-low p-md rounded-lg space-y-xs">
                <div class="text-label-sm"><span class="text-on-surface-variant">Email:</span> <span class="font-mono font-bold text-primary">admin@demo.com</span></div>
                <div class="text-label-sm"><span class="text-on-surface-variant">Password:</span> <span class="font-mono font-bold text-primary">demo123</span></div>
            </div>
        </div>
    </div>
</div>
@endsection
