<footer class="bg-pie text-slate-300">
    <div class="mx-auto w-full max-w-6xl px-4 py-8 sm:px-6 lg:px-8">

        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <span class="flex items-center gap-2 text-sm font-semibold text-white">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                    <path d="M3.22 12H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27"/>
                </svg>
                {{ config('portal.nombre') }}
            </span>

            <ul class="flex flex-wrap gap-x-6 gap-y-2 text-xs">
                <li><a href="#" class="hover:text-white hover:underline">Aviso de privacidad</a></li>
                <li><a href="#" class="hover:text-white hover:underline">Términos de uso</a></li>
                <li><a href="{{ route('nosotros') }}" class="hover:text-white hover:underline">Transparencia</a></li>
                <li><a href="#" class="hover:text-white hover:underline">Accesibilidad</a></li>
            </ul>
        </div>

        <p class="mt-6 border-t border-white/10 pt-4 text-xs text-slate-400">
            © {{ date('Y') }} Secretaría de Salud Comunitaria. Información pública para el cuidado de todas las personas.
        </p>
    </div>
</footer>
