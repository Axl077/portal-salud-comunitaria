@extends('layouts.app')

@section('title', $pagina['menu'] . ' | ' . config('portal.nombre'))

@section('content')
    {{-- Migas de pan (en todas las páginas menos Inicio) --}}
    @unless (request()->routeIs('inicio'))
        <nav aria-label="Migas de pan" class="mb-3 text-xs text-primario">
            <a href="{{ route('inicio') }}" class="hover:underline">Inicio</a>
            <span aria-hidden="true">&gt;</span>
            <span>{{ $pagina['menu'] }}</span>
        </nav>
    @endunless

    <h1 class="text-3xl font-bold tracking-tight">{{ $pagina['encabezado'] }}</h1>
    <p class="mt-1 text-sm text-slate-500">{{ $pagina['descripcion'] }}</p>

    <div class="mt-8 rounded-xl border border-dashed border-borde bg-white p-10 text-center text-sm text-slate-500">
        Aquí se cargará el contenido de esta página.
    </div>
@endsection
