<?php

// Load a CSS file stored in dist/css/screen.css
Asset::add('main.css', 'styles/main.css', false, '1.0', 'all');

// Load a JS file stored in dist/js/main.js
Asset::add('main.js', 'scripts/main.js', ['jquery'], '1.0', true);
