<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

   'paths' => ['api/*', 'sanctum/csrf-cookie', '*'],  // Agrega * para todas las rutas
    'allowed_methods' => ['*'], // Permitir todos los métodos (GET, POST, etc.)
    'allowed_origins' => ['*'], // Permitir todos los orígenes, o puedes especificar ['http://localhost:3001']
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'], // Permitir todos los headers
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];