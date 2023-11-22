const mix = require('laravel-mix');

// Compila los archivos de JavaScript
mix.js('resources/js/main.js', 'public/js');

// Compila los archivos CSS con PostCSS y Tailwind
mix.postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

// Si estás usando versionado de archivos para caché
if (mix.inProduction()) {
    mix.version();
}

