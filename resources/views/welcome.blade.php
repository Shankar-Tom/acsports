<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $title ?? '' }} - {{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f20d0d",
                        "background-light": "#f8f5f5",
                        "background-dark": "#0a0a0a",
                    },
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"]
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
            font-family: 'Lexend', sans-serif;
        }

        .glass-effect {
            background: rgba(242, 13, 13, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(242, 13, 13, 0.2);
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 antialiased overflow-x-hidden">
    <div class="relative flex min-h-screen flex-col">
        <!-- Sticky Navigation -->
        <header
            class="sticky top-0 z-50 w-full border-b border-primary/20 bg-background-dark/80 backdrop-blur-md px-6 py-4 lg:px-20">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img alt="AC Sports Pics Logo" class="h-20 w-auto"
                        data-alt="AC Sports Pics professional red and white sports logo"
                        src="{{ asset('images/logo.png') }}" />

                </div>

                <div class="flex items-center gap-4">
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Predictions</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">News</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Insights</a>
                </div>
            </div>
        </header>
        <!-- Hero Section -->
        <main class="flex-grow">
            <section class="relative px-6 py-20 lg:py-32 overflow-hidden">
                <!-- Background Decoration -->
                <div
                    class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full -z-10 opacity-20 pointer-events-none">
                    <div class="absolute inset-0 bg-gradient-to-b from-primary/20 to-transparent"></div>
                </div>
                <div class="max-w-5xl mx-auto text-center">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-bold tracking-widest uppercase mb-8">
                        <span class="material-symbols-outlined text-sm">workspace_premium</span> Premium Sports Insights
                    </div>
                    <h1 class="text-5xl md:text-7xl font-black text-white leading-tight tracking-tight mb-6">
                        Winning <span class="text-primary italic">Starts</span> Here
                    </h1>
                    <p class="text-slate-400 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
                        Experience the ultimate sports betting edge with expert precision, data-driven insights, and
                        real-time alerts from the industry's top analysts.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <button
                            class="w-full sm:w-auto bg-primary text-white text-lg font-bold px-10 py-4 rounded-xl hover:scale-105 transition-transform shadow-[0_10px_30px_rgba(242,13,13,0.5)]"><span
                                class="flex items-center justify-center gap-2"><img alt="Google Play" class="h-8"
                                    src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" />
                                Download Android
                                App</span></button>
                        <button
                            class="w-full sm:w-auto text-white text-lg font-bold px-10 py-4 rounded-xl hover:bg-slate-700 transition-colors bg-black"><span
                                class="flex items-center justify-center gap-2"> <img alt="App Store" class="h-8"
                                    src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" />
                                Download iOS App</span></button>
                    </div>

                    <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 border-t border-primary/10 pt-10">
                        <div class="flex flex-col items-center">
                            <span class="text-3xl font-black text-white">85%</span>
                            <span class="text-slate-500 text-sm uppercase tracking-widest font-bold">Win Rate</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="text-3xl font-black text-white">10K+</span>
                            <span class="text-slate-500 text-sm uppercase tracking-widest font-bold">Members</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="text-3xl font-black text-white">50+</span>
                            <span class="text-slate-500 text-sm uppercase tracking-widest font-bold">Daily Picks</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="text-3xl font-black text-white">24/7</span>
                            <span class="text-slate-500 text-sm uppercase tracking-widest font-bold">Expert
                                Support</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Live Ticker Component -->
            <div class="bg-primary/5 border-y border-primary/10 py-3 overflow-hidden whitespace-nowrap">
                <div
                    class="flex animate-marquee gap-8 items-center text-xs font-bold tracking-wider text-primary uppercase">
                    <span>NFL: Chiefs -3.5 (L) vs Lions • </span>
                    <span class="text-slate-300">NBA: Celtics ML (-150) • </span>
                    <span>MLB: Yankees Over 8.5 • </span>
                    <span class="text-slate-300">NHL: Oilers to Win in Regulation • </span>
                    <span>UFC: Jones by Submission • </span>
                    <span class="text-slate-300">NFL: Chiefs -3.5 (L) vs Lions • </span>
                </div>
            </div>
            <!-- Features Section -->
            <section class="px-6 py-24 lg:px-20 bg-background-dark">
                <div class="max-w-7xl mx-auto">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16">
                        <div class="max-w-2xl">
                            <h2 class="text-primary font-bold uppercase tracking-widest text-sm mb-3">Our Competitive
                                Edge</h2>
                            <h3 class="text-4xl font-black text-white leading-tight">Everything You Need to Stay Ahead
                                of the Market</h3>
                        </div>
                        <p class="text-slate-400 text-lg max-w-sm">Stop guessing and start following a proven strategy
                            powered by data and industry insiders.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Expert Predictions -->
                        <div
                            class="group relative p-8 rounded-2xl bg-slate-900/50 border border-slate-800 hover:border-primary/50 transition-all">
                            <div
                                class="bg-primary/20 w-14 h-14 rounded-lg flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-3xl">trending_up</span>
                            </div>
                            <h4 class="text-xl font-bold text-white mb-4">Expert Predictions</h4>
                            <p class="text-slate-400 leading-relaxed mb-6">Detailed data-driven picks from seasoned
                                professionals with decades of combined experience in line movement analysis.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center gap-2 text-sm text-slate-300"><span
                                        class="material-symbols-outlined text-primary text-sm">check_circle</span> Daily
                                    VIP Slates</li>
                                <li class="flex items-center gap-2 text-sm text-slate-300"><span
                                        class="material-symbols-outlined text-primary text-sm">check_circle</span> Prop
                                    Bet Optimization</li>
                            </ul>
                        </div>
                        <!-- Real-time News -->
                        <div
                            class="group relative p-8 rounded-2xl bg-slate-900/50 border border-slate-800 hover:border-primary/50 transition-all">
                            <div
                                class="bg-primary/20 w-14 h-14 rounded-lg flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-3xl">bolt</span>
                            </div>
                            <h4 class="text-xl font-bold text-white mb-4">Real-time News</h4>
                            <p class="text-slate-400 leading-relaxed mb-6">Instant alerts on injuries, lineup changes,
                                and smart money shifts before the books can adjust their lines.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center gap-2 text-sm text-slate-300"><span
                                        class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    Discord Integration</li>
                                <li class="flex items-center gap-2 text-sm text-slate-300"><span
                                        class="material-symbols-outlined text-primary text-sm">check_circle</span> SMS
                                    Notifications</li>
                            </ul>
                        </div>
                        <!-- Exclusive Insights -->
                        <div
                            class="group relative p-8 rounded-2xl bg-slate-900/50 border border-slate-800 hover:border-primary/50 transition-all">
                            <div
                                class="bg-primary/20 w-14 h-14 rounded-lg flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-3xl">lock</span>
                            </div>
                            <h4 class="text-xl font-bold text-white mb-4">Exclusive Insights</h4>
                            <p class="text-slate-400 leading-relaxed mb-6">Deep-dive analysis and betting theories not
                                available to the general public. We find the value others miss.</p>
                            <ul class="space-y-3">
                                <li class="flex items-center gap-2 text-sm text-slate-300"><span
                                        class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    Archive access</li>
                                <li class="flex items-center gap-2 text-sm text-slate-300"><span
                                        class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    Strategy Workshops</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Pricing Section -->
            <section class="px-6 py-24 lg:px-20 bg-background-dark/50">
                <div class="max-w-7xl mx-auto text-center mb-16">
                    <h2 class="text-4xl font-black text-white mb-4">Choose Your Path to Victory</h2>
                    <p class="text-slate-400 max-w-xl mx-auto">Select the plan that fits your betting style. Upgrade or
                        cancel anytime.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <!-- Starter -->
                    <div
                        class="flex flex-col bg-slate-900 border border-slate-800 rounded-2xl p-8 hover:bg-slate-800/80 transition-all">
                        <h5 class="text-lg font-bold text-white mb-2">Starter</h5>
                        <div class="flex items-baseline gap-1 mb-6">
                            <span class="text-4xl font-black text-white">$29</span>
                            <span class="text-slate-400">/month</span>
                        </div>
                        <ul class="space-y-4 mb-8 flex-grow">
                            <li class="flex items-center gap-3 text-slate-300"><span
                                    class="material-symbols-outlined text-primary">done</span> Daily Top Picks</li>
                            <li class="flex items-center gap-3 text-slate-300"><span
                                    class="material-symbols-outlined text-primary">done</span> Basic Insights</li>
                            <li class="flex items-center gap-3 text-slate-300"><span
                                    class="material-symbols-outlined text-primary">done</span> Email Support</li>
                        </ul>
                        <button
                            class="w-full py-4 rounded-xl border border-primary/30 text-white font-bold hover:bg-primary/10 transition-colors">Get
                            Started</button>
                    </div>
                    <!-- Pro -->
                    <div
                        class="flex flex-col bg-slate-900 border-2 border-primary rounded-2xl p-8 relative scale-105 shadow-[0_20px_50px_rgba(242,13,13,0.15)]">
                        <div
                            class="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary text-white text-[10px] font-black tracking-widest uppercase px-4 py-1 rounded-full">
                            Most Popular</div>
                        <h5 class="text-lg font-bold text-white mb-2">Pro</h5>
                        <div class="flex items-baseline gap-1 mb-6">
                            <span class="text-4xl font-black text-white">$79</span>
                            <span class="text-slate-400">/month</span>
                        </div>
                        <ul class="space-y-4 mb-8 flex-grow">
                            <li class="flex items-center gap-3 text-slate-300"><span
                                    class="material-symbols-outlined text-primary">done</span> Everything in Starter
                            </li>
                            <li class="flex items-center gap-3 text-slate-300"><span
                                    class="material-symbols-outlined text-primary">done</span> Real-time Mobile Alerts
                            </li>
                            <li class="flex items-center gap-3 text-slate-300"><span
                                    class="material-symbols-outlined text-primary">done</span> Full Market Analysis
                            </li>
                            <li class="flex items-center gap-3 text-slate-300"><span
                                    class="material-symbols-outlined text-primary">done</span> Discord Community Access
                            </li>
                        </ul>
                        <button
                            class="w-full py-4 rounded-xl bg-primary text-white font-bold hover:brightness-110 transition-all shadow-lg">Join
                            Pro Now</button>
                    </div>
                    <!-- VIP -->
                    <div
                        class="flex flex-col bg-slate-900 border border-slate-800 rounded-2xl p-8 hover:bg-slate-800/80 transition-all">
                        <h5 class="text-lg font-bold text-white mb-2">VIP Platinum</h5>
                        <div class="flex items-baseline gap-1 mb-6">
                            <span class="text-4xl font-black text-white">$149</span>
                            <span class="text-slate-400">/month</span>
                        </div>
                        <ul class="space-y-4 mb-8 flex-grow">
                            <li class="flex items-center gap-3 text-slate-300"><span
                                    class="material-symbols-outlined text-primary">done</span> Everything in Pro</li>
                            <li class="flex items-center gap-3 text-slate-300"><span
                                    class="material-symbols-outlined text-primary">done</span> 1-on-1 Consulting</li>
                            <li class="flex items-center gap-3 text-slate-300"><span
                                    class="material-symbols-outlined text-primary">done</span> Private VIP Telegram
                            </li>
                            <li class="flex items-center gap-3 text-slate-300"><span
                                    class="material-symbols-outlined text-primary">done</span> Priority 24/7 Support
                            </li>
                        </ul>
                        <button
                            class="w-full py-4 rounded-xl border border-primary/30 text-white font-bold hover:bg-primary/10 transition-colors">Go
                            VIP</button>
                    </div>
                </div>
            </section>
            <!-- Trust Signals -->
            <section class="bg-primary py-12 px-6">
                <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-around gap-8">
                    <div class="flex items-center gap-4 text-white">
                        <span class="material-symbols-outlined text-4xl">support_agent</span>
                        <div>
                            <p class="font-bold text-xl leading-tight">24/7 Support</p>
                            <p class="text-white/70 text-sm">Always here when you need us.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 text-white">
                        <span class="material-symbols-outlined text-4xl">verified_user</span>
                        <div>
                            <p class="font-bold text-xl leading-tight">Secure Payments</p>
                            <p class="text-white/70 text-sm">Encrypted transactions &amp; privacy.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 text-white">
                        <span class="material-symbols-outlined text-4xl">thumb_up</span>
                        <div>
                            <p class="font-bold text-xl leading-tight">100% Verified</p>
                            <p class="text-white/70 text-sm">History tracking and transparent ROI.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <footer class="bg-black text-slate-400 px-6 py-16 border-t border-white/10">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <img alt="AC Sports Pics Logo" class="h-8 w-auto"
                            data-alt="AC Sports Pics red logo footer version"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBoEL7A3gjxp81vaMFVUuvaj0XoAmK6wHqViBOnGntaAWWaGCK0HiSN9wG5ENh3n6Z7E6erJrfFck62E9lPZFxXVCNu0sN_k5g2TEn9eljPqUaUJk0QZd4ATCqDgrnzi36IChWgV87V72Wc8ohCSUyK5Wi7lQFCYjHup-G8QCHDB39YQO6HQrmmrK2kosSQ-7MXagYjBVx4Mc5tWT_Go1UqQJnVOfqBI4dbQ-YFQCRMq3N0b06EEwVhl18WTGyShdQIQffwlKjwPT6" />
                        <span class="text-xl font-bold text-white">AC SPORTS PICS</span>
                    </div>
                    <p class="max-w-md mb-8 leading-relaxed">
                        The world's most trusted sports betting advisory. We leverage advanced analytics and
                        boots-on-the-ground intelligence to deliver winning picks daily.
                    </p>
                    <div class="flex gap-4">
                        <a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary transition-colors"
                            href="#"><span
                                class="material-symbols-outlined text-white text-lg">public</span></a>
                        <a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary transition-colors"
                            href="#"><span class="material-symbols-outlined text-white text-lg">share</span></a>
                        <a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary transition-colors"
                            href="#"><span class="material-symbols-outlined text-white text-lg">mail</span></a>
                    </div>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <a class="flex items-center bg-slate-900 border border-white/10 px-3 py-1.5 rounded-md hover:border-primary/50 transition-all"
                            href="#">
                            <img alt="Download on iOS App Store" class="h-6"
                                src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" />
                        </a>
                        <a class="flex items-center bg-slate-900 border border-white/10 px-3 py-1.5 rounded-md hover:border-primary/50 transition-all"
                            href="#">
                            <img alt="Download on Google Play Store" class="h-6"
                                src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" />
                        </a>
                    </div>
                </div>
                <div>
                    <h6 class="text-white font-bold mb-6">Quick Links</h6>
                    <ul class="space-y-3">
                        <li><a class="hover:text-primary transition-colors" href="#">Predictions</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">News Feed</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Pricing Plans</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h6 class="text-white font-bold mb-6">Legal</h6>
                    <ul class="space-y-3">
                        <li><a class="hover:text-primary transition-colors" href="#">Terms of Service</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Privacy Policy</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Responsible Gaming</a></li>
                    </ul>
                </div>
            </div>
            <div
                class="max-w-7xl mx-auto mt-16 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-sm">© 2024 AC Sports Pics. All rights reserved.</p>
                <div class="flex items-center gap-6 text-xs grayscale opacity-50">
                    <span>MUST BE 21+ TO BET</span>
                    <span>GAMBLING PROBLEM? CALL 1-800-GAMBLER</span>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
