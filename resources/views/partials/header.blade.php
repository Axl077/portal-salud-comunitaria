<header class="bg-primario text-white">
    <div class="mx-auto flex w-full max-w-6xl items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">

        <a href="{{ route('inicio') }}" class="flex items-center gap-3 rounded-lg focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-white">
            <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-white text-primario">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                    <path d="M3.22 12H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27"/>
                </svg>
            </span>
            <span class="leading-tight">
                <span class="block text-lg font-semibold">{{ config('portal.nombre') }}</span>
                <span class="hidden text-xs text-white/80 sm:block">{{ config('portal.lema') }}</span>
            </span>
        </a>

        <div class="flex items-center gap-3 text-sm">
            <button type="button" class="flex items-center gap-1.5 rounded-lg px-2 py-1 text-white/90 hover:text-white focus-visible:outline-2 focus-visible:outline-white">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <circle cx="12" cy="4" r="1"/><path d="m18 19 1-7-6 1"/><path d="m5 8 3-3 5.5 3-2.36 3.5"/><path d="M4.24 14.5a5 5 0 0 0 6.88 6"/><path d="M13.76 17.5a5 5 0 0 0-6.88-6"/>
                </svg>
                <span class="hidden sm:inline">Accesibilidad</span>
            </button>
            <span class="rounded-full bg-white/20 px-3 py-1 text-xs font-semibold">ES</span>
        </div>

    </div>
</header>
