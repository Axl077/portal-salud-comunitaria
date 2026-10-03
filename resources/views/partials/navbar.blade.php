<nav class="bg-primario-oscuro" aria-label="Navegación principal">
    <div class="mx-auto w-full max-w-6xl px-4 sm:px-6 lg:px-8">
        {{-- En pantallas chicas el menú se desplaza horizontalmente --}}
        <ul class="-mx-1 flex overflow-x-auto text-sm">
            @foreach (config('portal.paginas') as $pagina)
                @php $activa = request()->routeIs($pagina['ruta']); @endphp
                <li class="shrink-0">
                    <a href="{{ route($pagina['ruta']) }}"
                       @if ($activa) aria-current="page" @endif
                       class="block border-b-2 px-3 py-3 focus-visible:outline-2 focus-visible:-outline-offset-2 focus-visible:outline-white
                              {{ $activa ? 'border-alerta bg-white/15 font-semibold text-white' : 'border-transparent text-white/80 hover:text-white' }}">
                        {{ $pagina['menu'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
