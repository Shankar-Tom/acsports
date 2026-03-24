<div class="max-w-4xl mx-auto p-8 space-y-12">
    <!-- Section 1: Profile Information -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="space-y-1">
            <h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">Profile Information</h3>
            <p class="text-sm text-slate-500 dark:text-slate-400">Update your photo and personal details.</p>
        </div>
        <div
            class="md:col-span-2 bg-white dark:bg-primary/5 rounded-xl border border-slate-200 dark:border-primary/20 p-6 space-y-6">
            <div class="flex items-center gap-6">
                <div class="relative group">
                    <div
                        class="w-24 h-24 rounded-full overflow-hidden border-4 border-white dark:border-background-dark shadow-xl">
                        <img alt="Admin Avatar" class="w-full h-full object-cover"
                            data-alt="Close-up portrait of a professional male administrator"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBqaOv2yf9n2Wp8AKcl5lNjws3ha_92Rc3JU-7WO94KzzYfiJTCnlndxwy-gAMRqZiE6nn5pT2TOoNwB132L01oZcH7FKVzjUq_AGAN7nqBgdfr-XQ6gr7f_aNqLE9GBd5N3AqzWjefB13VtLTb2hKpOiI0goGgapoXWd9oiDRCUqMo3UAPyzWZo88ud3C652X-SHKoK8YMbBkJUMZ5-SH35bWYKtohOG_pQkExnxJEKBb4Nif7KkIJFaehHKCUQwUt7ny8yRmeRi5" />
                    </div>
                    <button
                        class="absolute bottom-0 right-0 bg-primary p-2 rounded-full text-white shadow-lg hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-sm">photo_camera</span>
                    </button>
                </div>
                <div>
                    <h4 class="font-bold text-slate-900 dark:text-slate-100">Your Avatar</h4>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mb-2">JPG, GIF or PNG. Max size of 800K</p>
                    <div class="flex gap-2">
                        <button class="text-xs font-bold text-primary hover:underline">Upload new</button>
                        <span class="text-slate-300 dark:text-slate-700">|</span>
                        <button class="text-xs font-bold text-slate-400 hover:text-red-500">Remove</button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Full
                        Name</label>
                    <input
                        class="w-full bg-slate-50 dark:bg-background-dark border border-slate-200 dark:border-primary/20 rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-primary outline-none"
                        type="text" value="James Rodriguez" />
                </div>
                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Email
                        Address</label>
                    <input
                        class="w-full bg-slate-50 dark:bg-background-dark border border-slate-200 dark:border-primary/20 rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-primary outline-none"
                        type="email" value="james.r@acsportspics.com" />
                </div>
                <div class="space-y-1 md:col-span-2">
                    <label class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Phone
                        Number</label>
                    <input
                        class="w-full bg-slate-50 dark:bg-background-dark border border-slate-200 dark:border-primary/20 rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-primary outline-none"
                        type="tel" value="+1 (555) 000-1234" />
                </div>
            </div>
        </div>
    </section>
    <hr class="border-slate-200 dark:border-primary/10" />
    <!-- Section 2: Security -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="space-y-1">
            <h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">Security</h3>
            <p class="text-sm text-slate-500 dark:text-slate-400">Keep your account secure with a strong password
                and 2FA.</p>
        </div>
        <div class="md:col-span-2 space-y-4">
            <div
                class="bg-white dark:bg-primary/5 rounded-xl border border-slate-200 dark:border-primary/20 p-6 space-y-4">
                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Current
                        Password</label>
                    <input
                        class="w-full bg-slate-50 dark:bg-background-dark border border-slate-200 dark:border-primary/20 rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-primary outline-none"
                        placeholder="••••••••" type="password" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="space-y-1">
                        <label class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">New
                            Password</label>
                        <input
                            class="w-full bg-slate-50 dark:bg-background-dark border border-slate-200 dark:border-primary/20 rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-primary outline-none"
                            placeholder="Min. 8 chars" type="password" />
                    </div>
                    <div class="space-y-1">
                        <label
                            class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Confirm
                            New Password</label>
                        <input
                            class="w-full bg-slate-50 dark:bg-background-dark border border-slate-200 dark:border-primary/20 rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-primary outline-none"
                            placeholder="Repeat password" type="password" />
                    </div>
                </div>
            </div>
            <div
                class="bg-white dark:bg-primary/5 rounded-xl border border-slate-200 dark:border-primary/20 p-6 flex items-center justify-between">
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">verified_user</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 dark:text-slate-100">Two-Factor Authentication</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400">Add an extra layer of security to your
                            admin login.</p>
                    </div>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input checked="" class="sr-only peer" type="checkbox" value="" />
                    <div
                        class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                    </div>
                </label>
            </div>
        </div>
    </section>


    <!-- Footer Actions Mobile -->
    <div class="flex flex-col gap-3 pb-8">
        <button class="bg-primary text-white w-full py-3 rounded-lg font-bold shadow-lg shadow-primary/20">
            Save All Changes
        </button>

    </div>
</div>
