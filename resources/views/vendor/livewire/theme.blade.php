@php
if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

    $scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp

@if($paginator->hasPages())
<div
    class="px-6 py-4 bg-slate-50 dark:bg-white/5 border-t border-slate-200 dark:border-white/10 flex items-center justify-between">
    <p class="text-sm text-slate-500 dark:text-slate-400">Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total()}} items</p>
    <div class="flex items-center gap-1">
        <button @class(["p-2 text-slate-400 hover:text-primary transition-colors cursor-pointer", "pointer-events-none" => $paginator->onFirstPage()]) wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}">
            <span class="material-symbols-outlined">chevron_left</span>
        </button>
       
        <button @class(["p-2 text-slate-400 hover:text-primary transition-colors cursor-pointer", "pointer-events-none" => !$paginator->hasMorePages()]) wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}">
            <span class="material-symbols-outlined">chevron_right</span>
        </button>
    </div>
</div>
@endif
