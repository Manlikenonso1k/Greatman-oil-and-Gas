{{-- resources/views/components/footer.blade.php --}}
@php
    $whatsappUrl = config('services.whatsapp.url', 'https://www.whatsapp.com/');
@endphp

<footer class="w-full py-xxl px-lg flex flex-col md:flex-row justify-between items-start gap-lg bg-primary">
    <div class="flex flex-col gap-md">
        <span class="font-headline-lg text-secondary font-bold">GreatMan</span>
        <p class="text-primary-fixed-dim max-w-xs">Think Energy, Think Greatman. Nigeria's leading destination for premium energy solutions.</p>
    </div>
    <div class="flex flex-col md:flex-row gap-xxl">
        <div class="flex flex-col gap-sm">
            <h5 class="text-on-primary font-bold mb-xs">Legal</h5>
            <a class="text-primary-fixed-dim hover:text-secondary-fixed transition-all font-label-sm" href="#">Privacy Policy</a>
            <a class="text-primary-fixed-dim hover:text-secondary-fixed transition-all font-label-sm" href="#">Terms of Service</a>
            <a class="text-primary-fixed-dim hover:text-secondary-fixed transition-all font-label-sm" href="#">Compliance</a>
        </div>
        <div class="flex flex-col gap-sm">
            <h5 class="text-on-primary font-bold mb-xs">Company</h5>
            <a class="text-primary-fixed-dim hover:text-secondary-fixed transition-all font-label-sm" href="#">Contact Us</a>
            <a class="text-primary-fixed-dim hover:text-secondary-fixed transition-all font-label-sm" href="#">Careers</a>
        </div>
    </div>
    <div class="w-full md:w-auto pt-xl md:pt-0 border-t md:border-t-0 border-outline-variant/20">
        <p class="text-primary-fixed-dim font-label-sm">© 2024 The GreatMan Oil and Gas. All rights reserved.</p>
    </div>
</footer>

<!-- Floating Action Buttons -->
<div class="fixed bottom-lg right-lg z-40 flex flex-col gap-md">
    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="bg-secondary text-on-secondary h-14 w-14 rounded-full shadow-lg flex items-center justify-center hover:scale-110 active:scale-95 transition-transform">
        <svg viewBox="0 0 24 24" aria-hidden="true" class="h-7 w-7 fill-current">
            <path d="M20.52 3.48A11.82 11.82 0 0 0 12.01 0C5.4 0 .03 5.37.03 11.99c0 2.11.55 4.18 1.59 5.99L0 24l6.17-1.58a11.96 11.96 0 0 0 5.83 1.49h.01c6.62 0 11.99-5.37 11.99-11.99 0-3.2-1.25-6.2-3.48-8.44Zm-8.51 18.43h-.01a9.93 9.93 0 0 1-5.07-1.39l-.36-.21-3.67.94.98-3.58-.24-.37a9.93 9.93 0 0 1-1.53-5.28c0-5.48 4.46-9.94 9.94-9.94 2.65 0 5.14 1.03 7.02 2.91a9.86 9.86 0 0 1 2.92 7.03c0 5.48-4.46 9.93-9.98 9.93Zm5.75-7.42c-.31-.16-1.84-.91-2.12-1.01-.28-.1-.48-.16-.68.16-.2.31-.78 1.01-.96 1.22-.18.2-.35.23-.66.08-.31-.16-1.31-.48-2.49-1.54-.92-.82-1.54-1.83-1.72-2.14-.18-.31-.02-.47.13-.62.13-.13.31-.35.47-.53.16-.18.21-.31.31-.51.1-.2.05-.37-.02-.53-.08-.16-.68-1.69-.94-2.31-.25-.6-.51-.52-.68-.52h-.58c-.2 0-.53.08-.81.37-.28.31-1.05 1.03-1.05 2.51 0 1.48 1.08 2.91 1.23 3.11.16.2 2.14 3.27 5.19 4.58.73.31 1.31.49 1.76.63.74.24 1.42.21 1.95.13.59-.09 1.84-.75 2.1-1.48.26-.73.26-1.35.18-1.48-.08-.13-.28-.21-.59-.37Z"/>
        </svg>
    </a>
    <a href="https://www.google.com/maps/place/Greatman+oil+and+Gas/@5.5358168,5.8120042,17z/data=!3m1!4b1!4m6!3m5!1s0x1041ad1f3d9e3b47:0x340d9fe2c4278f96!8m2!3d5.5358168!4d5.8120042!16s%2Fg%2F11z787fsbl?entry=ttu&g_ep=EgoyMDI2MDUwNi4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer" class="bg-primary text-on-primary h-14 w-14 rounded-full shadow-lg flex items-center justify-center hover:scale-110 active:scale-95 transition-transform">
        <span class="material-symbols-outlined">map</span>
    </a>
</div>
