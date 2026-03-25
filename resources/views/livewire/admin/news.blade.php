<div class="p-8 space-y-8">
    <div @class(['blur' => $showModal]) <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div
                class="flex flex-col gap-2 rounded-xl p-6 border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5">
                <div class="flex justify-between items-start">
                    <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total news</p>
                    <span class="material-symbols-outlined text-secondary">overview</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <p class="text-slate-900 dark:text-white text-3xl font-bold">{{ $counts->total }}</p>
                </div>
            </div>
            <div
                class="flex flex-col gap-2 rounded-xl p-6 border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5">
                <div class="flex justify-between items-start">
                    <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Published news</p>
                    <span class="material-symbols-outlined text-emerald-500">
                        published_with_changes
                    </span>
                </div>
                <div class="flex items-baseline gap-2">
                    <p class="text-slate-900 dark:text-white text-3xl font-bold">{{ $counts->published }}</p>
                </div>
            </div>
            <div
                class="flex flex-col gap-2 rounded-xl p-6 border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5">
                <div class="flex justify-between items-start">
                    <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Draft news</p>
                    <span class="material-symbols-outlined text-amber-500">draft</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <p class="text-slate-900 dark:text-white text-3xl font-bold">{{ $counts->draft }}</p>
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
                        placeholder="Search News" type="text" />
                </div>
                <div class="flex flex-wrap gap-2">


                    <button wire:click="openModal()"
                        class="flex items-center gap-2 px-4 py-3 bg-slate-200 dark:bg-white/10 rounded-lg text-sm font-medium hover:bg-primary/20 transition-all">
                        <span class="material-symbols-outlined text-sm">add</span>
                        Post News
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
                                Headline</th>
                            <th
                                class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                Image</th>
                            <th
                                class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                Tags</th>
                            <th
                                class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                Status</th>

                            <th
                                class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-right">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 dark:divide-white/10">
                        @foreach ($this->allNews as $news)
                            <tr class="hover:bg-slate-50 dark:hover:bg-white/[0.02] transition-colors group">
                                <td class="px-6 py-4">
                                    {{ $news->title }}
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-slate-900 dark:text-white">
                                    <img src="{{ $news->image }}" alt="" class="w-16 h-16 object-cover">
                                </td>
                                <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">
                                    {{ implode(', ', $news->tags) }}
                                </td>
                                <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">
                                    <span class="{{ $news->status->color() }}">{{ $news->status->label() }}</span>
                                </td>

                                <td class="px-6 py-4 text-right">
                                    <button wire:click="edit({{ $news->id }})"
                                        class="text-slate-400 hover:text-primary transition-colors bg-transparent border-none cursor-pointer">
                                        <span class="material-symbols-outlined">edit</span>

                                    </button>
                                    <button wire:confirm="Are you sure to delete this news?"
                                        wire:click="delete({{ $news->id }})"
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
            {{ $this->allNews->links() }}
        </div>
    </div>

    <div @class([
        'fixed inset-0 z-50 flex items-center justify-center p-4 md:p-6',
        'hidden' => !$showModal,
    ])>
        <!-- Backdrop -->

        <!-- Modal Content -->
        <div
            class="relative bg-white dark:bg-background-dark border border-slate-200 dark:border-primary/20 rounded-2xl shadow-2xl w-full max-w-5xl max-h-[90vh] flex flex-col overflow-hidden">
            <!-- Modal Header -->
            <div
                class="px-6 py-4 border-b border-slate-200 dark:border-primary/20 flex items-center justify-between bg-slate-50 dark:bg-primary/5">
                <div>
                    <h2 class="text-xl font-bold text-slate-900 dark:text-slate-100">Create New News</h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Draft your latest sports photography story
                    </p>
                </div>
                <button wire:click="closeModal"
                    class="p-2 rounded-lg hover:bg-slate-200 dark:hover:bg-primary/10 text-slate-500 transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="flex-1 overflow-y-auto p-6 modal-scrollbar">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Main Content Fields -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- Title Section -->
                        <div>
                            <label
                                class="block mb-2 text-sm font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">News
                                Headline</label>
                            <input wire:model="headline"
                                class="w-full bg-slate-50 dark:bg-primary/5 border border-slate-200 dark:border-primary/20 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-xl font-bold py-3 px-4 text-slate-900 dark:text-slate-100 placeholder:text-slate-300 dark:placeholder:text-slate-600 transition-colors"
                                placeholder="e.g. Rivalry Night: State vs Tech" type="text" />
                            @error('headline')
                                <span class="text-red-900">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Content Editor -->
                        <div
                            class="border border-slate-200 dark:border-primary/20 rounded-xl overflow-hidden flex flex-col">

                            <div class="p-4 bg-transparent" wire:ignore.self>
                                {{-- <livewire:jodit-text-editor wire:model.live="content" :buttons="[
                                    'bold',
                                    'italic',
                                    'underline',
                                    'strikeThrough',
                                    '|',
                                    'left',
                                    'center',
                                    'right',
                                    '|',
                                    'link',
                                ]"
                                    class="w-full editor-min-height bg-transparent border-none focus:ring-0 text-slate-700 dark:text-slate-300 resize-none leading-relaxed text-lg" /> --}}
                                <textarea wire:model="content"
                                    class="w-full h-96 bg-transparent border-none focus:ring-0 text-slate-700 dark:text-slate-300 resize-none leading-relaxed text-lg"
                                    placeholder="Start writing your story here..."></textarea>
                                @error('content')
                                    <span class="text-red-900">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <!-- Sidebar / Settings Fields -->
                    <div class="space-y-6">
                        <!-- Featured Image -->
                        <div
                            class="bg-slate-50 dark:bg-primary/5 border border-slate-200 dark:border-primary/20 rounded-xl p-4">
                            <h3 class="font-bold text-sm mb-3 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-lg">image</span> Featured
                                Image
                            </h3>
                            <div
                                class="aspect-video w-full border-2 border-dashed border-slate-300 dark:border-primary/30 rounded-lg flex flex-col items-center justify-center bg-white dark:bg-background-dark/50 hover:bg-slate-100 dark:hover:bg-primary/10 transition-colors cursor-pointer group">
                                <input type="file" class="hidden" wire:model="image" accept="image/*" id="image">
                                @if ($image)
                                    <img src="{{ $image->temporaryUrl() }}" class="w-full h-full object-cover" />
                                @elseif($existingImage)
                                    <img src="{{ $existingImage }}" class="w-full h-full object-cover" />
                                @else
                                    <label for="image">
                                        <span
                                            class="material-symbols-outlined text-3xl text-slate-400 group-hover:scale-110 transition-transform">add_photo_alternate</span>
                                        <p class="text-[10px] font-medium mt-1 text-slate-500">Upload Image</p>
                                    </label>
                                @endif
                                @error('image')
                                    <span class="text-red-900">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- Organization -->
                        <div
                            class="bg-slate-50 dark:bg-primary/5 border border-slate-200 dark:border-primary/20 rounded-xl p-4 space-y-4">
                            <h3 class="font-bold text-sm flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-lg">category</span>
                                Other Details
                            </h3>
                            <div>
                                <label
                                    class="block text-[10px] font-semibold text-slate-500 uppercase mb-1">Status</label>
                                <select wire:model="status"
                                    class="w-full text-sm rounded-lg bg-white dark:bg-background-dark border-slate-300 dark:border-primary/20 focus:border-primary focus:ring-primary">
                                    <option>Select Status</option>
                                    @foreach (\App\Enums\PostStatus::cases() as $status)
                                        <option value="{{ $status->value }}">{{ $status->label() }}</option>
                                    @endforeach
                                </select>
                                @error('status')
                                    <span class="text-red-900">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label
                                    class="block text-[10px] font-semibold text-slate-500 uppercase mb-1">Tags</label>
                                <div class="flex flex-wrap gap-1 mb-2">
                                    @foreach ($tags as $tag)
                                        <span
                                            class="px-2 py-0.5 rounded bg-primary text-white text-[15px] font-medium flex items-center gap-1">
                                            {{ $tag }} <span wire:click="removeTag('{{ $tag }}')"
                                                class="material-symbols-outlined text-[15px] cursor-pointer">close</span>
                                        </span>
                                    @endforeach
                                </div>
                                <input wire:keydown.enter="addTag" wire:model="tag"
                                    class="w-full text-sm rounded-lg bg-white dark:bg-background-dark border-slate-300 dark:border-primary/20 focus:border-primary focus:ring-primary"
                                    placeholder="Add tag..." type="text" />
                                @error('tags')
                                    <span class="text-red-900">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal Footer -->
            <div
                class="px-6 py-4 border-t border-slate-200 dark:border-primary/20 flex items-center justify-between bg-slate-50 dark:bg-primary/5">

                <div class="flex items-center gap-3">
                    <button wire:click="closeModal"
                        class="px-5 py-2 rounded-lg border border-slate-300 dark:border-primary/30 text-slate-600 dark:text-slate-300 font-semibold hover:bg-slate-100 dark:hover:bg-primary/5 transition-all text-sm">
                        Cancel
                    </button>
                    <button wire:click="saveNews()"
                        class="px-6 py-2 rounded-lg bg-primary text-white font-bold hover:bg-primary/90 shadow-lg shadow-primary/20 transition-all text-sm">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
