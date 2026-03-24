    <header
        class="h-16 flex items-center justify-between px-8 bg-white/50 dark:bg-background-dark/50 backdrop-blur-md border-b border-slate-200 dark:border-slate-800 sticky top-0 z-10">
        <div class="flex items-center gap-4 flex-1">

        </div>
        <div class="flex items-center gap-4">

            <a href="{{ route('admin.profile') }}" wire:navigate
                class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">
                <span class="material-symbols-outlined">settings</span>
            </a>
            <div class="h-8 w-px bg-slate-200 dark:border-slate-800 mx-2"></div>
            <div class="flex items-center gap-3 pl-2">
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-bold leading-none">Alex Rivera</p>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Super Admin</p>
                </div>
                <div class="size-10 rounded-full bg-slate-200 dark:bg-slate-700 bg-cover bg-center border-2 border-primary"
                    data-alt="User profile avatar of Alex Rivera"
                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAmVSWPt_Zi2jp0n-Znyl-KBddmwRHhuhoKUy2Ikl4qT3eYhy5nBpZ_zaXvZmxibNDCIxZ0sZB7_MVLgvk9nYBFR-xm2lOYDUWVKipKfS3ZMrND81JWk1-s5HwRT86ou556UNkGflTsNy_0fsPdspgxuYd6qsacJeEDBrFUpfyy07il8KOaxgpazZOK_K8u8Vg5GkVW71AGYm_tIxuRhKdH_XSi4jxEpcwxfnL81Av8nt7UC4AWoPujAPLMQ6V4WGkptGdKwcbD8C5E')">
                </div>
            </div>
            <a class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg"
                href="{{ route('admin.logout') }}">
                <span class="material-symbols-outlined">logout</span>
            </a>
        </div>
    </header>
