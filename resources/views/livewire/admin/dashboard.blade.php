<div class="p-8 space-y-8">
    <!-- Welcome Section -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
        <div>
            <h2 class="text-3xl font-black tracking-tight text-slate-900 dark:text-white">Dashboard Overview
            </h2>
            <p class="text-slate-500 dark:text-slate-400 mt-1">Welcome back, here's what's happening with
                your platform today.</p>
        </div>
        <div
            class="flex items-center gap-2 text-sm font-medium text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-800 px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-700">
            <span class="material-symbols-outlined text-sm">calendar_today</span>
            <span>Oct 24, 2023 - Oct 30, 2023</span>
        </div>
    </div>
    <!-- Metrics Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <div class="p-2 bg-blue-500/10 text-blue-500 rounded-lg">
                    <span class="material-symbols-outlined">group</span>
                </div>
                <span class="text-xs font-bold text-primary bg-primary/10 px-2 py-1 rounded-full">+12%</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total Users</p>
            <p class="text-2xl font-black mt-1">24,592</p>
        </div>
        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <div class="p-2 bg-primary/10 text-primary rounded-lg">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <span class="text-xs font-bold text-primary bg-primary/10 px-2 py-1 rounded-full">+8%</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Daily Handle</p>
            <p class="text-2xl font-black mt-1">$142,384</p>
        </div>
        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <div class="p-2 bg-amber-500/10 text-amber-500 rounded-lg">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <span
                    class="text-xs font-bold text-slate-400 bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded-full">Static</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Blog Posts</p>
            <p class="text-2xl font-black mt-1">1,204</p>
        </div>
        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <div class="p-2 bg-purple-500/10 text-purple-500 rounded-lg">
                    <span class="material-symbols-outlined">auto_graph</span>
                </div>
                <span class="text-xs font-bold text-red-500 bg-red-500/10 px-2 py-1 rounded-full">-3%</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Prediction Accuracy</p>
            <p class="text-2xl font-black mt-1">68.4%</p>
        </div>
    </div>
    <!-- Quick Actions Section -->
    <section>
        <h3 class="text-lg font-bold mb-4 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary">bolt</span>
            Quick Actions
        </h3>
        <div class="flex flex-wrap gap-4">
            <button
                class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-background-dark px-6 py-3 rounded-xl font-bold transition-all shadow-lg shadow-primary/20">
                <span class="material-symbols-outlined text-[20px]">add_circle</span>
                <span>Create New Blog Post</span>
            </button>
            <button
                class="flex items-center gap-2 bg-slate-900 dark:bg-white text-white dark:text-background-dark px-6 py-3 rounded-xl font-bold transition-all hover:opacity-90 border border-transparent">
                <span class="material-symbols-outlined text-[20px]">auto_awesome</span>
                <span>Post New Prediction</span>
            </button>
            <button
                class="flex items-center gap-2 bg-white dark:bg-slate-900 text-slate-700 dark:text-slate-300 px-6 py-3 rounded-xl font-bold transition-all hover:bg-slate-50 dark:hover:bg-slate-800 border border-slate-200 dark:border-slate-700">
                <span class="material-symbols-outlined text-[20px]">mail</span>
                <span>Send Newsletter</span>
            </button>
        </div>
    </section>
    <!-- Recent Activity Table -->
    <section
        class="bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
        <div class="px-6 py-5 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between">
            <h3 class="text-lg font-bold">Recent Content Updates</h3>
            <button class="text-sm font-bold text-primary hover:underline">View All Activity</button>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 dark:bg-slate-800/50">
                        <th
                            class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                            Title</th>
                        <th
                            class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                            Category</th>
                        <th
                            class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                            Author</th>
                        <th
                            class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                            Status</th>
                        <th
                            class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                            Date</th>
                        <th
                            class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-10 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center flex-shrink-0 overflow-hidden">
                                    <img alt="NFL" class="object-cover size-full"
                                        data-alt="Close up of an American football on turf"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB32COXDycoHAO-eB1YLckQV1t18KvJ_r3nmNb3vmc72ClY2ZKwLSjs2uabCepYTx5LudPXu-mQr_lxPsAUOiG88L254O9h7sXCcFZDUAlaAM0m8DeiP9mnGaoOOA2Z6sjOF9Q3p2T83bgB8Slrj889ys-xneeFXFJJDgSZxIDZrHOD02MaVKeQzmt7-QYWcYYIsTdDSA0fD667p_eUDzjjwbZdoLzlNOHnLKBiGy_q0cEbB3FDGlp_4bpMJWkGXvy4_uy_kDfaeBYK" />
                                </div>
                                <span class="font-semibold text-sm line-clamp-1">Top 5 NFL Picks for Week
                                    8: Expert Analysis</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300">Expert
                                Predictions</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="size-6 rounded-full bg-slate-300 dark:bg-slate-700 bg-cover bg-center"
                                    data-alt="Author profile avatar"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBR23zjMw-Hcrtmerhm9QfVfHl1hWxoqzdpLxiulloile3BrhSiso66fado7acKMYa2xyjpHVuqPChZZ83_dyF9QLtIKWuAuARraNEoYyn8zm9QVcQYcB3nmUGFeyuDl782G_K9ohaz5T957ul9jfocLSFwFwMpz0S6BEDB8OUtEFoTn_w2RM4rtzJdaNb4an27NcPHuOVK7AOJsWNNRfHCxPs_BZEvny4iOC_ViqUZaJMT56-7PnOyNKOFlCrjbjOHjGF8jR_9qWaa')">
                                </div>
                                <span class="text-sm font-medium">Marcus Chen</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-bold bg-primary/10 text-primary uppercase tracking-tight">
                                <span class="size-1.5 rounded-full bg-primary"></span>
                                Published
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">2 mins ago</td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">
                                <span class="material-symbols-outlined">more_vert</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-10 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center flex-shrink-0 overflow-hidden">
                                    <img alt="NBA" class="object-cover size-full"
                                        data-alt="Basketball player shooting a hoop"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBBdK1bmqJDiVX4Xt88vwgFx2zKvaYm_1s7M13mKYXR4C5GBV7fkVxKhJKUDhre8LvlzZ4-XM9hB3ho0AS7AerPjrs5WmxWlChylfh3H_a28H-Vb38vXIhheDovqNUVAaHhwbSclVumLIeHaJUwQz0SamaG0nGy5avUiuYajxLuvS7tdoQh2gzZwOYscJI7GAFEEBz6Bs2tLwzNZ8R8hkMx8tqFV300QX6ixoKYZX0cY3u9PbG2qPWWfKFBFfOuGfEfbrdtJ4-MLic" />
                                </div>
                                <span class="font-semibold text-sm line-clamp-1">NBA Opening Night: Prop
                                    Bets to Watch</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300">Sports
                                News</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="size-6 rounded-full bg-slate-300 dark:bg-slate-700 bg-cover bg-center"
                                    data-alt="Author profile avatar"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCbl9PO4wG0z0vF7PsffGFTM8T10CTKU3plzERY7hfbslzgiHMGwiTvbFl1AOBP-7XZK1KWM6dfywis5Ux-fnzUte79SRx0WNNTWws2Sdo0NHMX0KQlwoPWkc_2xdyFN3S9c-cAgh-cu-9N4L1i7sMZQ-hMCRzgUBKkLZrmh0Ri-7Em5ayP9Djz6mTE26vCpy_mae-t2n6W08H2w4_HtdWwvTT9FW8keu0yILCXyemDH3D6kA4RnI-k1zAw55gPmwWtchdkIqz-IJGM')">
                                </div>
                                <span class="text-sm font-medium">Sarah Jenkins</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-bold bg-slate-100 dark:bg-slate-800 text-slate-500 dark:text-slate-400 uppercase tracking-tight">
                                <span class="size-1.5 rounded-full bg-slate-400"></span>
                                Draft
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">45 mins ago</td>
                        <td class="px-6 py-4 text-right">
                            <button
                                class="text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">
                                <span class="material-symbols-outlined">more_vert</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-10 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center flex-shrink-0 overflow-hidden">
                                    <img alt="Soccer" class="object-cover size-full"
                                        data-alt="Action shot from a professional soccer match"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBeLx9Bd5uei5kMvQoYNhvFAd7u9LXmlRqaR11E0yO-dxdK-TtWk6wDwXZf4G752U4ZqG9k6f7FKsYu6PS74T-5LD-cdkjKJvFy76sb9VHzLz3-nZfsgewqlxL3SOp840OYpMTi872f87Boa7vVJNccarq6Enwxb5mBylZCGc9Rw5cwWR39n0hyafjYUGxmEnuTX6OvpCHN6L2PWCVC9G1QKBZuN32Cm0TJl9efF409AWC4sQ7ZQUCUZS2F2EVL1bSA7O1ZRIunw8YQ" />
                                </div>
                                <span class="font-semibold text-sm line-clamp-1">Premier League Weekend
                                    Review: Odds Shift</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300">Blog
                                Posts</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="size-6 rounded-full bg-slate-300 dark:bg-slate-700 bg-cover bg-center"
                                    data-alt="Author profile avatar"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDZROyA0ptlQFRtKRYNAKb52Bs5PNdm9Qz_roWhkEiQqhAcrOq7oOZGsuEFxjmiQE1n2lK-HwuWckzgtD9XUlYwKuH7TARkHM9o3GAtwLIzBJyvbaIU5NQg3XsitakvXM-WZkBW64DkJDv_O099K5czDQeCMR6oGygzcO095nfbuuwRJluGRfz4dIRRriZ2rdFEz_WDbvOHJLy_I842gbYwL0gdS4hfMABO4N8NxGEi5jImxls6EyGjoIbNjOf1UJ8kVmi1_ZV9HKIG')">
                                </div>
                                <span class="text-sm font-medium">Dave Sterling</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-bold bg-primary/10 text-primary uppercase tracking-tight">
                                <span class="size-1.5 rounded-full bg-primary"></span>
                                Published
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">3 hours ago</td>
                        <td class="px-6 py-4 text-right">
                            <button
                                class="text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">
                                <span class="material-symbols-outlined">more_vert</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors border-none">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-10 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center flex-shrink-0 overflow-hidden">
                                    <img alt="Tennis" class="object-cover size-full"
                                        data-alt="Tennis racket hitting a ball on a clay court"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDddde3VvwlxwyN8x9p7lIdcHu3s-3QfOrdjvBSYu1Qb50cH9pbPDx2uyGUsR4_isVm35GN9krFp8z4YY-9tXgqw7LK6gK1vH9rRWC_b-OV4tFW4NoU8t5fqY6oToZQ0yuU_OGN-YzDpQsroO77hT6zpllZNvnb3eGmS15eE0UGVzyRL8ZHCRQBEITJjEyqiQh4f28whSy8ZIu24pjjfvUajf8KLZE2rMPy-aYEZh-NyXR-lDyOSv0BzKfKRD_qWkLIDzCZMn9ve5Bg" />
                                </div>
                                <span class="font-semibold text-sm line-clamp-1">WTA Finals: Underdog
                                    Stories to Bet On</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300">Expert
                                Predictions</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="size-6 rounded-full bg-slate-300 dark:bg-slate-700 bg-cover bg-center"
                                    data-alt="Author profile avatar"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCDALpiLOTyH51ImryvrmY_rh03sZoF_YA7l6IlSJvHkTve_DIOuGhso8qBpwgrrRbx7W6xopP0QLJG_VS6QXKGiCEO3c6BPf4vekA1fFkDNaHszNTe13aHCbRWoH7F5KoBRyS2ePWCdzsv4Vpqll8zyVMOWfHUfdtQAHuFRgbGSuwJIyk-E-bjFVGlOJMLf8YmbQXUJGHyZY1lyZ96VCX_JuxCcMgoLxfF-64aRP4SzMElX17Tyq61J5T1qUBt7pNkbZfvmN9AKvY5')">
                                </div>
                                <span class="text-sm font-medium">Liam O'Neill</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-bold bg-primary/10 text-primary uppercase tracking-tight">
                                <span class="size-1.5 rounded-full bg-primary"></span>
                                Published
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">5 hours ago</td>
                        <td class="px-6 py-4 text-right">
                            <button
                                class="text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">
                                <span class="material-symbols-outlined">more_vert</span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div
            class="px-6 py-4 bg-slate-50 dark:bg-slate-800/30 flex items-center justify-between border-t border-slate-200 dark:border-slate-800">
            <span class="text-sm text-slate-500 dark:text-slate-400">Showing 4 of 1,204 results</span>
            <div class="flex items-center gap-2">
                <button
                    class="p-1 rounded bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-400 hover:text-slate-900 dark:hover:text-white disabled:opacity-50"
                    disabled="">
                    <span class="material-symbols-outlined text-sm">chevron_left</span>
                </button>
                <button
                    class="p-1 rounded bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-400 hover:text-slate-900 dark:hover:text-white">
                    <span class="material-symbols-outlined text-sm">chevron_right</span>
                </button>
            </div>
        </div>
    </section>
</div>
