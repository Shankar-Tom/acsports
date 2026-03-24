  <main class="flex-1 flex items-center justify-center p-4 relative overflow-hidden">
      <!-- Abstract Background Elements -->
      <div
          class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary/5 rounded-full blur-[120px] -z-10">
      </div>
      <div class="absolute top-1/4 right-1/4 w-[300px] h-[300px] bg-primary/10 rounded-full blur-[80px] -z-10"></div>
      <div class="w-full max-w-[440px] animate-in fade-in zoom-in duration-500">
          <!-- Branding/Heading -->
          <div class="text-center mb-8">
              <h1 class="text-3xl font-bold tracking-tight mb-2">Welcome Back</h1>
              <p class="text-slate-500 dark:text-slate-400">Please enter your credentials to access the terminal</p>
          </div>
          <!-- Login Card -->
          <div class="glass-panel p-8 rounded-xl shadow-2xl">
              <form class="space-y-6" wire:submit="login">
                  <!-- Email Field -->
                  <div class="space-y-2">
                      <label class="text-sm font-semibold text-slate-700 dark:text-slate-300 ml-1">Email
                          Address</label>
                      <div class="relative group">
                          <span
                              class="absolute left-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-500 group-focus-within:text-primary transition-colors">mail</span>
                          <input
                              class="w-full pl-12 pr-4 py-3.5 bg-background-light dark:bg-bg-dark border border-slate-200 dark:border-[#316848] rounded-lg focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all text-sm input-glow"
                              placeholder="admin@bettingapp.com" required="" type="email" wire:model="email" />
                          @error('email')
                              <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                          @enderror
                      </div>
                  </div>
                  <!-- Password Field -->
                  <div class="space-y-2">
                      <div class="flex items-center justify-between ml-1">
                          <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Password</label>
                      </div>
                      <div class="relative group">
                          <span
                              class="absolute left-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-500 group-focus-within:text-primary transition-colors">lock</span>
                          <input
                              class="w-full pl-12 pr-12 py-3.5 bg-background-light dark:bg-bg-dark border border-slate-200 dark:border-[#316848] rounded-lg focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all text-sm input-glow"
                              placeholder="••••••••" required="" type="password" wire:model="password" />

                          @error('password')
                              <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                          @enderror
                      </div>
                  </div>
                  <!-- Options -->
                  <div class="flex items-center gap-2 ml-1">
                      <input
                          class="size-4 rounded border-slate-300 dark:border-red-900/50 bg-transparent text-primary focus:ring-primary focus:ring-offset-black"
                          id="remember" type="checkbox" />
                      <label class="text-sm text-slate-600 dark:text-slate-400 cursor-pointer select-none"
                          for="remember">Remember this device for 30 days</label>
                  </div>
                  <!-- Submit Button -->
                  <button wire:loading.attr="disabled" wire:target="login"
                      class="w-full bg-primary hover:bg-red-700 text-white font-bold py-4 rounded-lg shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2 group"
                      type="submit">
                      <span wire:loading.remove wire:target="login">Sign In to Dashboard</span>
                      <span wire:loading wire:target="login" class="flex items-center gap-2">
                          <span class="loading loading-spinner loading-sm"></span>
                          Signing in...
                      </span>
                      <span
                          class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
                  </button>
              </form>
          </div>
          <!-- Footer Security Info -->
          <div class="mt-8 flex flex-col items-center gap-4">
              <div class="flex items-center gap-2 text-xs text-slate-500 uppercase tracking-widest font-medium">
                  <span class="material-symbols-outlined text-sm">verified_user</span>
                  End-to-End Encrypted Session
              </div>
              <div
                  class="w-full h-px bg-gradient-to-r from-transparent via-slate-200 dark:via-primary/20 to-transparent">
              </div>
              <p class="text-xs text-slate-500 dark:text-slate-400 text-center leading-relaxed">
                  Access is restricted to authorized personnel only. <br />
                  All activities are logged and monitored.
              </p>
          </div>
      </div>
  </main>
