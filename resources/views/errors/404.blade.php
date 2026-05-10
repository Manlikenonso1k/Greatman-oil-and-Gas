<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Page Not Found | GreatMan Oil & Gas</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#1e2730",
                        secondary: "#4c6700",
                        error: "#d32f2f",
                        surface: "#fcf9f9",
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-surface">
    <div class="min-h-screen flex items-center justify-center px-lg py-xxl">
        <div class="text-center max-w-md">
            <div class="mb-xl">
                <span class="material-symbols-outlined text-9xl text-error">error</span>
            </div>
            <h1 class="text-6xl font-bold text-primary mb-md">404</h1>
            <h2 class="text-2xl font-bold text-on-surface mb-sm">Page Not Found</h2>
            <p class="text-on-surface-variant mb-xl">Sorry, the page you're looking for doesn't exist or has been moved.</p>
            <div class="flex gap-md justify-center">
                <a href="{{ url('/') }}" class="px-lg py-md bg-primary text-white rounded-lg font-bold hover:opacity-90 transition-all">Go Home</a>
                <a href="javascript:history.back()" class="px-lg py-md bg-gray-200 text-primary rounded-lg font-bold hover:bg-gray-300 transition-all">Go Back</a>
            </div>
        </div>
    </div>
</body>
</html>
