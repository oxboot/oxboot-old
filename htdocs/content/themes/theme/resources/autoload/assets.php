<?php

if (file_exists(themosis_path('theme').'/dist/styles/main.css')) {
    // Load a CSS file stored in dist/css/screen.css
    Asset::add('main-style', 'styles/main.css', false, '1.0', 'all');
}

if (file_exists(themosis_path('theme').'/dist/scripts/main.js')) {
    // Load a JS file stored in dist/js/main.js
    Asset::add('main-script', 'scripts/main.js', ['jquery'], '1.0', true);
}
