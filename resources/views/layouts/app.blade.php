<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $title ?? 'AC Sports' }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f20d0d",
                        "background-light": "#ffffff",
                        "background-dark": "#000000",
                        "bg-dark": "#120808"
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .glass-panel {
            background: rgba(15, 15, 15, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(242, 13, 13, 0.2);
        }

        .input-glow:focus {
            box-shadow: 0 0 0 2px rgba(242, 13, 13, 0.2);
        }
    </style>
    @livewireStyles
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex flex-col font-display">
    <!-- Top Navigation Bar -->
    @guest
        <header
            class="w-full flex items-center justify-between px-6 py-4 border-b border-slate-200 dark:border-primary/10 bg-black">
            <div class="flex items-center gap-3">
                <div class="size-20 flex items-center justify-center">
                    <img alt="Logo" class="h-full w-auto object-contain" src="{{ asset('images/logo.png') }}" />
                </div>

            </div>
            {{-- <div class="hidden md:flex items-center gap-6">
                <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Documentation</a>
                <a class="text-sm font-medium hover:text-primary transition-colors" href="#">System Status</a>
                <button
                    class="bg-primary/10 text-primary hover:bg-primary/20 transition-all px-4 py-2 rounded-lg text-sm font-bold flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">help</span>
                    Support
                </button>
            </div> --}}
        </header>

        {{ $slot }}
        <footer class="py-6 px-6 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <p>© 2024 Betting Admin Panel. All rights reserved.</p>
            <div class="flex items-center gap-6">
                <a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
                <a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
                <div class="flex items-center gap-2">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                    </span>
                    Server: US-EAST-1
                </div>
            </div>
        </footer>


    @endguest
    @auth
        <div class="flex min-h-screen overflow-hidden">
            <!-- Sidebar Navigation -->
            <aside
                class="w-64 flex-shrink-0 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex flex-col">
                <div class="p-6 flex items-center gap-3">
                    <div class="w-10 h-10 overflow-hidden">
                        <img alt="AC Sports Pics Logo" class="w-full h-full object-contain"
                            src="{{ asset('images/logo.png') }}" />
                    </div>

                </div>
                <nav class="flex-1 px-4 py-4 space-y-1">
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-colors"
                        href="{{ route('admin.dashboard') }}" wire:navigate>
                        <span class="material-symbols-outlined">dashboard</span>
                        <span class="text-sm font-semibold">Dashboard</span>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
                        href="#">
                        <span class="material-symbols-outlined">description</span>
                        <span class="text-sm font-medium">Blog Posts</span>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
                        href="#">
                        <span class="material-symbols-outlined">newspaper</span>
                        <span class="text-sm font-medium">Sports News</span>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
                        href="#">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span class="text-sm font-medium">Expert Predictions</span>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
                        href="{{ route('admin.users') }}" wire:navigate>
                        <span class="material-symbols-outlined">group</span>
                        <span class="text-sm font-medium">User Management</span>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
                        href="{{ route('admin.plans') }}" wire:navigate>
                        <span class="material-symbols-outlined">card_membership</span>
                        <span class="text-sm font-medium">Plans</span>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
                        href="{{ route('admin.subscriptions') }}" wire:navigate>
                        <span class="material-symbols-outlined">subscriptions</span>
                        <span class="text-sm font-medium">Subscriptions</span>
                    </a>
                </nav>

            </aside>
            <main class="flex-1 flex flex-col min-w-0 overflow-y-auto">
                @include('layouts.adminheader')

                {{ $slot }}
            </main>
        </div>
    @endauth


    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        document.addEventListener('livewire:init', function() {
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "timeOut": "3000"
            };

            Livewire.on('success', data => {
                console.log(data);
                toastr.success(data.message);
            });

            Livewire.on('error', data => {
                toastr.error(data.message);
            });

            Livewire.on('info', data => {
                toastr.info(data.message);
            });

            Livewire.on('warning', data => {
                toastr.warning(data.message);
            });

            Livewire.on('livewire-error', data => {
                toastr.error(data[0].message);
            });




        });
    </script>
</body>

</html>
