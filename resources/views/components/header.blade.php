{{-- resources/views/components/header.blade.php --}}
<header class="fixed top-0 left-0 right-0 z-50 flex justify-between items-center px-lg h-16 bg-surface shadow-sm">
    <div class="w-full flex justify-between items-center max-w-container-max mx-auto">
        <div class="flex items-center gap-md">
            <span class="font-headline-lg text-headline-lg font-bold text-secondary">GreatMan Oil &amp; Gas</span>
        </div>
        
        <nav class="hidden lg:flex items-center gap-xl">
            <a class="text-on-surface-variant hover:text-secondary transition-colors font-body-md" href="{{ route('home') }}">Live Status</a>
            <a class="text-secondary font-bold border-b-2 border-secondary font-body-md" href="{{ route('lpg-trust') }}">LPG Trust</a>
            <a class="text-on-surface-variant hover:text-secondary transition-colors font-body-md" href="{{ route('locator') }}">Locator</a>
        </nav>
        
        <div class="flex items-center gap-md">
            <a href="{{ route('order') }}" class="hidden sm:inline bg-primary text-on-primary px-lg py-sm rounded-lg font-bold hover:opacity-90 transition-all">Order Fuel</a>
            <div class="hidden md:flex gap-sm">
                <button class="p-xs rounded-full hover:bg-surface-container-high transition-colors">
                    <span class="material-symbols-outlined text-primary">account_circle</span>
                </button>
                <button class="p-xs rounded-full hover:bg-surface-container-high transition-colors">
                    <span class="material-symbols-outlined text-primary">local_gas_station</span>
                </button>
            </div>
            <button id="mobile-menu-btn" class="lg:hidden p-xs rounded-lg hover:bg-surface-container-high transition-colors">
                <span class="material-symbols-outlined text-primary">menu</span>
            </button>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="hidden absolute top-16 right-lg bg-surface shadow-lg rounded-lg p-lg flex flex-col gap-md min-w-48 z-40">
        <a href="{{ route('home') }}" class="text-on-surface hover:text-secondary">Live Status</a>
        <a href="{{ route('lpg-trust') }}" class="text-on-surface hover:text-secondary">LPG Trust</a>
        <a href="{{ route('locator') }}" class="text-on-surface hover:text-secondary">Locator</a>
        <a href="{{ route('order') }}" class="text-secondary font-bold">Order Fuel</a>
    </nav>
</header>

<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
