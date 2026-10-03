<?php

// Datos compartidos del portal: los usan las rutas y el menú de navegación.
return [
    'nombre' => 'Portal de Salud Comunitaria',
    'lema'   => 'Servicios públicos de salud cerca de ti',

    'paginas' => [
        ['ruta' => 'inicio',    'url' => '/',          'menu' => 'Inicio',    'encabezado' => 'Tu salud, cerca de ti',                'descripcion' => 'Accede a servicios, orientación y noticias para cuidar de ti y de tu comunidad.'],
        ['ruta' => 'clinicas',  'url' => '/clinicas',  'menu' => 'Clínicas',  'encabezado' => 'Directorio de Clínicas Comunitarias',  'descripcion' => 'Encuentra una unidad de salud por ubicación, especialidad o disponibilidad.'],
        ['ruta' => 'tramites',  'url' => '/tramites',  'menu' => 'Trámites',  'encabezado' => 'Guía del Paciente y Trámites',         'descripcion' => 'Conoce los requisitos y pasos para realizar tus gestiones de salud de forma sencilla.'],
        ['ruta' => 'citas',     'url' => '/citas',     'menu' => 'Citas',     'encabezado' => 'Gestión de Citas',                     'descripcion' => 'Consulta cómo se asignan los turnos y revisa la disponibilidad semanal.'],
        ['ruta' => 'servicios', 'url' => '/servicios', 'menu' => 'Servicios', 'encabezado' => 'Servicios y Especialidades',           'descripcion' => 'Conoce la atención disponible, cómo prepararte y en qué horarios acudir.'],
        ['ruta' => 'noticias',  'url' => '/noticias',  'menu' => 'Noticias',  'encabezado' => 'Noticias y Alertas Sanitarias',        'descripcion' => 'Información verificada y oportuna para proteger la salud de tu comunidad.'],
        ['ruta' => 'preguntas', 'url' => '/preguntas', 'menu' => 'Preguntas', 'encabezado' => 'Preguntas Frecuentes',                 'descripcion' => 'Encuentra respuestas claras sobre tus derechos, citas y documentos.'],
        ['ruta' => 'personal',  'url' => '/personal',  'menu' => 'Personal',  'encabezado' => 'Directorio de Personal Médico',        'descripcion' => 'Consulta especialidades, horarios y clínicas de nuestro equipo de profesionales.'],
        ['ruta' => 'nosotros',  'url' => '/nosotros',  'menu' => 'Nosotros',  'encabezado' => 'Nosotros y Transparencia',             'descripcion' => 'Conoce nuestra misión, estructura y compromiso con una gestión pública abierta.'],
        ['ruta' => 'contacto',  'url' => '/contacto',  'menu' => 'Contacto',  'encabezado' => 'Contacto y Atención Ciudadana',        'descripcion' => 'Escríbenos o comunícate con el área adecuada. Estamos para orientarte.'],
    ],
];
