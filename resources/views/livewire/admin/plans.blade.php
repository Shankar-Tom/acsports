<div class="p-8 space-y-8">
    <!-- Stats Overview -->
    <div @class(['blur' => $showModal])>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8 ">
            <div
                class="flex flex-col gap-2 rounded-xl p-6 border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5">
                <div class="flex justify-between items-start">
                    <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total Plans</p>
                    <span class="material-symbols-outlined text-primary">overview</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <p class="text-slate-900 dark:text-white text-3xl font-bold">{{ $counts->total }}</p>
                </div>
            </div>
            <div
                class="flex flex-col gap-2 rounded-xl p-6 border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5">
                <div class="flex justify-between items-start">
                    <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Active Plans</p>
                    <span class="material-symbols-outlined">
                        toggle_on
                    </span>
                </div>
                <div class="flex items-baseline gap-2">
                    <p class="text-slate-900 dark:text-white text-3xl font-bold">{{ $counts->active }}</p>
                </div>
            </div>
            <div
                class="flex flex-col gap-2 rounded-xl p-6 border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5">
                <div class="flex justify-between items-start">
                    <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Inactive Plans</p>
                    <span class="material-symbols-outlined text-red-500">inactive_order</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <p class="text-slate-900 dark:text-white text-3xl font-bold">{{ $counts->inactive }}</p>
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
                                            <p class="text-sm font-bold text-slate-900 dark:text-white">
                                                {{ $plan->name }}
                                            </p>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">
                                                {{ $plan->description }}
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
    </div>

    <div @class([
        'fixed inset-0 z-50 flex items-center justify-center',
        'hidden' => !$showModal,
    ])>

        <div
            class="relative bg-white dark:bg-background-dark border border-slate-200 dark:border-primary/20 rounded-2xl shadow-2xl w-full max-w-5xl max-h-[90vh] flex flex-col overflow-hidden">
            <!-- Modal Header -->
            <div
                class="px-6 py-4 border-b border-slate-200 dark:border-primary/20 flex items-center justify-between bg-slate-50 dark:bg-primary/5">
                <div>
                    <h2 class="text-xl font-bold text-slate-900 dark:text-slate-100">Create New Plan</h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Draft your latest sports photography story
                    </p>
                </div>
                <button wire:click="closeModal()"
                    class="p-2 rounded-lg hover:bg-slate-200 dark:hover:bg-primary/10 text-slate-500 transition-colors">
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
                        class="w-full bg-slate-50 dark:bg-primary/5 border border-slate-200 dark:border-primary/20 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-xl font-bold py-3 px-4 text-slate-900 dark:text-slate-100 placeholder:text-slate-300 dark:placeholder:text-slate-600 transition-colors"
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

                            <input wire:model="price"
                                class="w-full bg-slate-50 dark:bg-primary/5 border border-slate-200 dark:border-primary/20 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-xl font-bold py-3 px-4 text-slate-900 dark:text-slate-100 placeholder:text-slate-300 dark:placeholder:text-slate-600 transition-colors"
                                placeholder="10.00" type="number" />
                            @error('price')
                                <p class="text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <!-- Billing Cycle Selection -->
                    <div class="space-y-2">
                        <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest">Duration
                            (in
                            days)
                        </label>
                        <input wire:model="duration"
                            class="w-full bg-slate-50 dark:bg-primary/5 border border-slate-200 dark:border-primary/20 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-xl font-bold py-3 px-4 text-slate-900 dark:text-slate-100 placeholder:text-slate-300 dark:placeholder:text-slate-600 transition-colors"
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
                            <p class="text-[10px] font-medium text-slate-500 uppercase">TOGGLE PUBLIC AVAILABILITY
                            </p>
                        </div>
                    </div>
                    <!-- Custom Toggle Switch -->
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input wire:model="isActive" class="sr-only peer" type="checkbox" value="" />
                        <div
                            class="w-11 h-6 bg-slate-800 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                        </div>
                        <span
                            class="ml-3 text-[10px] font-black   uppercase text-primary peer-checked:text-emerald-400">Active</span>
                    </label>
                </div>
                <!-- Modal Actions -->
                <div
                    class="px-6 py-4 border-t border-slate-200 dark:border-primary/20 flex items-center justify-between bg-slate-50 dark:bg-primary/5">

                    <div class="flex items-center gap-3">
                        <button wire:click="closeModal()"
                            class="px-5 py-2 rounded-lg border border-slate-300 dark:border-primary/30 text-slate-600 dark:text-slate-300 font-semibold hover:bg-slate-100 dark:hover:bg-primary/5 transition-all text-sm">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-6 py-2 rounded-lg bg-primary text-white font-bold hover:bg-primary/90 shadow-lg shadow-primary/20 transition-all text-sm">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>


    </div>

</div>
