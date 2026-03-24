<div class="p-8 space-y-8">
    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div
            class="flex flex-col gap-2 rounded-xl p-6 border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5">
            <div class="flex justify-between items-start">
                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total Plans</p>
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
                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Active Plans</p>
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
                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Inactive Plans</p>
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
                    placeholder="Plan Name" type="text" />
            </div>
            <div class="flex flex-wrap gap-2">


                <button wire:click="openModal()"
                    class="flex items-center gap-2 px-4 py-3 bg-slate-200 dark:bg-white/10 rounded-lg text-sm font-medium hover:bg-primary/20 transition-all">
                    <span class="material-symbols-outlined text-sm">add</span>
                    Create Plan
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
                            Plan</th>
                        <th
                            class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                            Price</th>
                        <th
                            class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                            Duration</th>
                        <th
                            class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                            Status</th>
                        <th
                            class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-right">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-white/10">
                    @foreach ($this->plans as $plan)
                        <tr class="hover:bg-slate-50 dark:hover:bg-white/[0.02] transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-full flex items-center justify-center text-primary font-bold bg-red-600/20">
                                        {{ substr($plan->name, 0, 1) }}</div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white">{{ $plan->name }}
                                        </p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">{{ $plan->description }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-slate-900 dark:text-white">
                                {{ Number::currency($plan->price, 'USD') }}
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">
                                {{ $plan->duration }} days</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-bold {{ $plan->is_active ? 'text-green-600 ' : 'text-red-600 ' }}">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full {{ $plan->is_active ? 'bg-green-600' : 'bg-red-600' }}"></span>
                                    {{ $plan->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button wire:click="edit({{ $plan->id }})"
                                    class="text-slate-400 hover:text-primary transition-colors bg-transparent border-none cursor-pointer">
                                    <span class="material-symbols-outlined">edit</span>

                                </button>
                                <button wire:confirm="Are you sure to delete this plan?"
                                    wire:click="delete({{ $plan->id }})"
                                    class="text-slate-400 hover:text-primary transition-colors bg-transparent border-none cursor-pointer">
                                    <span class="material-symbols-outlined">delete</span>

                                </button>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <!-- Pagination -->
        {{ $this->plans->links() }}
    </div>

    <div @class([
        'fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm p-4 ',
        'hidden' => !$showModal,
    ])>
        <!-- Modal Container -->
        <div class="bg-surface-container border border-outline w-full max-w-xl relative overflow-hidden">
            <!-- Ghost Background Accent -->

            <div class="px-8 pt-8 pb-4 relative z-10 flex justify-between items-center border-b border-outline">
                <div>
                    <h2 class="text-2xl font-black   uppercase text-primary tracking-tighter">CREATE NEW PLAN</h2>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.3em]">REVENUE CONFIGURATION</p>
                </div>
                <button class="text-slate-400 hover:text-primary transition-colors" wire:click="closeModal">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <!-- Modal Body (Form) -->
            <form class="p-8 space-y-6 relative z-10" wire:submit="savePlan()">
                <!-- Plan Name Input -->
                <div class="space-y-2">
                    <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest">Plan
                        Name</label>
                    <input wire:model="planName"
                        class="w-full bg-surface-container-high border-none text-on-surface font-headline font-bold   tracking-wide px-4 py-3 focus:ring-2 focus:ring-primary outline-none text-slate-600"
                        placeholder="E.G. TITAN ELITE" type="text" />
                    @error('planName')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <!-- Price Input -->
                    <div class="space-y-2">
                        <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest">Price
                            (USD)</label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 font-black text-primary  ">$</span>
                            <input wire:model="price"
                                class="w-full bg-surface-container-high border-none text-on-surface font-headline font-black   tracking-wide pl-8 pr-4 py-3 focus:ring-2 focus:ring-primary outline-none text-slate-600"
                                placeholder="10.00" type="number" />
                            @error('price')
                                <p class="text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <!-- Billing Cycle Selection -->
                    <div class="space-y-2">
                        <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest">Duration (in
                            days)
                        </label>
                        <input wire:model="duration"
                            class="w-full bg-surface-container-high border-none text-on-surface font-headline font-black   tracking-wide pl-8 pr-4 py-3 focus:ring-2 focus:ring-primary outline-none text-slate-600"
                            placeholder="10" type="number" />
                        @error('duration')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <!-- Plan Status Toggle -->
                <div class="flex items-center justify-between p-4 bg-surface-container-low border border-outline">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-emerald-400">check_circle</span>
                        <div>
                            <p class="text-xs font-black   uppercase text-on-surface">Plan Status</p>
                            <p class="text-[10px] font-medium text-slate-500 uppercase">TOGGLE PUBLIC AVAILABILITY</p>
                        </div>
                    </div>
                    <!-- Custom Toggle Switch -->
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input {{ $isActive ? 'checked' : '' }} wire:model="isActive" class="sr-only peer"
                            type="checkbox" value="" />
                        <div
                            class="w-11 h-6 bg-slate-800 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                        </div>
                        <span
                            class="ml-3 text-[10px] font-black   uppercase text-primary peer-checked:text-emerald-400">Active</span>
                    </label>
                </div>
                <!-- Modal Actions -->
                <div class="flex items-center gap-4 pt-4">
                    <button wire:click="closeModal()"
                        class="flex-1 py-3 px-6 border border-outline text-slate-400 font-bold   uppercase text-xs tracking-widest hover:bg-surface-container-highest transition-colors"
                        type="button">
                        Cancel
                    </button>
                    <button
                        class="flex-1 py-3 px-6 bg-primary text-white font-black   uppercase text-sm tracking-widest shadow-lg shadow-primary/20 hover:scale-[1.02] transition-transform"
                        type="submit">
                        Save Plan
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>

</div>
