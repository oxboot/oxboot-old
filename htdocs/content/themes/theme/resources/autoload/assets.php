<?php

// Load a CSS file stored in dist/css/screen.css
Asset::add('main-style', 'styles/main.css', false, '1.0', 'all');

// Load a JS file stored in dist/js/main.js
Asset::add('main-script', 'scripts/main.js', ['jquery'], '1.0', true);
