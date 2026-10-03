<?php

use Illuminate\Support\Facades\Route;

// Una ruta por cada página definida en config/portal.php.
// Cuando una página tenga su propio contenido, se cambia su vista aquí.
foreach (config('portal.paginas') as $pagina) {
    Route::get($pagina['url'], fn () => view('pages.show', ['pagina' => $pagina]))
        ->name($pagina['ruta']);
}
