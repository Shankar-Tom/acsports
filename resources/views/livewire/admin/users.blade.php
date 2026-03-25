<div class="p-8 space-y-8">
    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div
            class="flex flex-col gap-2 rounded-xl p-6 border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5">
            <div class="flex justify-between items-start">
                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total Registered</p>
                <span class="material-symbols-outlined text-primary">group</span>
            </div>
            <div class="flex items-baseline gap-2">
                <p class="text-slate-900 dark:text-white text-3xl font-bold">24,502</p>
                <p class="text-primary text-sm font-semibold">+12%</p>
            </div>
        </div>
        <div
            class="flex flex-col gap-2 rounded-xl p-6 border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5">
            <div class="flex justify-between items-start">
                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Currently Active</p>
                <span class="material-symbols-outlined text-primary">bolt</span>
            </div>
            <div class="flex items-baseline gap-2">
                <p class="text-slate-900 dark:text-white text-3xl font-bold">1,208</p>
                <p class="text-primary text-sm font-semibold">+5.4%</p>
            </div>
        </div>
        <div
            class="flex flex-col gap-2 rounded-xl p-6 border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5">
            <div class="flex justify-between items-start">
                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Restricted Access</p>
                <span class="material-symbols-outlined text-red-500">block</span>
            </div>
            <div class="flex items-baseline gap-2">
                <p class="text-slate-900 dark:text-white text-3xl font-bold">432</p>
                <p class="text-red-500 text-sm font-semibold">-2.1%</p>
            </div>
        </div>
    </div>
    <!-- Search & Filter Controls -->
    <div class="flex flex-col gap-4 mb-6">
        <div class="flex flex-col md:flex-row gap-3">
            <div class="flex-1 relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                    <span class="material-symbols-outlined text-slate-400">search</span>
                </div>
                <input
                    class="w-full bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 rounded-lg py-3 pl-12 pr-4 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none"
                    placeholder="Search by username, email, or wallet ID" type="text" />
            </div>
            <div class="flex flex-wrap gap-2">
                <button
                    class="flex items-center gap-2 px-4 py-3 bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 rounded-lg text-sm font-medium hover:border-primary transition-colors">
                    <span class="material-symbols-outlined text-sm">filter_list</span>
                    All Status
                    <span class="material-symbols-outlined text-sm">expand_more</span>
                </button>
                <button
                    class="flex items-center gap-2 px-4 py-3 bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 rounded-lg text-sm font-medium hover:border-primary transition-colors">
                    <span class="material-symbols-outlined text-sm">calendar_month</span>
                    Joined: Last 30 Days
                    <span class="material-symbols-outlined text-sm">expand_more</span>
                </button>
                <button
                    class="flex items-center gap-2 px-4 py-3 bg-slate-200 dark:bg-white/10 rounded-lg text-sm font-medium hover:bg-primary/20 transition-all">
                    <span class="material-symbols-outlined text-sm">download</span>
                    Export
                </button>
            </div>
        </div>
    </div>
    <!-- Users Table -->
    <div
        class="bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 rounded-xl overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 dark:bg-white/5 border-b border-slate-200 dark:border-white/10">
                        <th
                            class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                            User</th>
                        <th
                            class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                            Registration Date</th>
                     
                        <th
                            class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                            Status</th>
                        <th
                            class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-right">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-white/10">
                    @foreach ($this->users as $user)
                        <tr class="hover:bg-slate-50 dark:hover:bg-white/[0.02] transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-full flex items-center justify-center text-primary font-bold bg-red-600/20">
                                        JD</div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white">{{ $user->name }}
                                        </p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">{{ $user->email }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">
                                {{ $user->created_at->format('d M y') }}</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-bold text-primary bg-red-600/10">
                                    <span class="w-1.5 h-1.5 rounded-full bg-red-600"></span>
                                    Active
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </button>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <!-- Pagination -->
        
    </div>

</div>
