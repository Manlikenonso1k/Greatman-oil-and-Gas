{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title', 'GreatMan Oil & Gas')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-container": "#4a382d",
                        "primary-container": "#343d46",
                        "on-tertiary-fixed": "#27180f",
                        "on-error-container": "#93000a",
                        "primary-fixed": "#dae3ef",
                        "surface": "#fcf9f9",
                        "primary": "#1e2730",
                        "surface-container-low": "#f6f3f3",
                        "surface-variant": "#e4e2e2",
                        "on-surface": "#1b1b1c",
                        "on-secondary-container": "#516e00",
                        "inverse-on-surface": "#f3f0f0",
                        "outline": "#74777b",
                        "error": "#ba1a1a",
                        "surface-tint": "#565f69",
                        "error-container": "#ffdad6",
                        "on-secondary": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "on-surface-variant": "#44474b",
                        "on-tertiary-container": "#bba193",
                        "surface-container-lowest": "#ffffff",
                        "background": "#fcf9f9",
                        "tertiary-fixed-dim": "#dcc1b2",
                        "tertiary": "#332319",
                        "secondary-container": "#c6f265",
                        "surface-dim": "#dcd9da",
                        "on-primary": "#ffffff",
                        "secondary": "#4c6700",
                        "surface-container-high": "#eae7e8",
                        "surface-container-highest": "#e4e2e2",
                        "on-primary-fixed": "#141c25",
                        "on-primary-fixed-variant": "#3f4851",
                        "secondary-fixed": "#c6f265",
                        "tertiary-fixed": "#f9ddcd",
                        "surface-container": "#f0edee",
                        "inverse-primary": "#bec7d3",
                        "on-tertiary-fixed-variant": "#564337",
                        "surface-bright": "#fcf9f9",
                        "primary-fixed-dim": "#bec7d3",
                        "inverse-surface": "#303031",
                        "on-error": "#ffffff",
                        "outline-variant": "#c4c6cb",
                        "on-secondary-fixed-variant": "#384e00",
                        "secondary-fixed-dim": "#abd54c",
                        "on-primary-container": "#9ea7b2",
                        "on-secondary-fixed": "#141f00",
                        "on-background": "#1b1b1c"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "xxl": "1.5rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "xl": "32px",
                        "container-max": "1280px",
                        "gutter": "24px",
                        "lg": "24px",
                        "md": "16px",
                        "sm": "8px",
                        "unit": "8px",
                        "xxl": "48px",
                        "xs": "4px"
                    },
                    "fontFamily": {
                        "headline-lg-mobile": ["Inter"],
                        "label-sm": ["Inter"],
                        "display-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg": ["Inter"]
                    },
                    "fontSize": {
                        "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "500"}],
                        "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .natural-shadow { box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.04); }
        .natural-shadow-hover:hover { box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.08); }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        [x-cloak] { display: none !important; }
        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        .animate-marquee {
            animation: marquee 30s linear infinite;
        }
    </style>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('heroSlider', (slides = []) => ({
                slides,
                active: 0,
                interval: null,
                start() {
                    this.stop();
                    if (this.slides.length <= 1) {
                        return;
                    }
                    this.interval = setInterval(() => {
                        this.active = (this.active + 1) % this.slides.length;
                    }, 5000);
                },
                stop() {
                    if (this.interval) {
                        clearInterval(this.interval);
                        this.interval = null;
                    }
                },
                goTo(index) {
                    this.active = index;
                    this.start();
                }
            }));
        });
    </script>
</head>
<body class="bg-surface text-on-surface font-body-md antialiased">
    @include('components.header')
    
    <main class="pt-16">
        @include('components.price-ticker')

        @yield('content')
    </main>
    
    @include('components.footer')
</body>
</html>
