<?php

/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */

Route::get('template', function () {
    return view('templates.'.get_page_template_slug());
});

Route::get('page', function ()
{
    return view('page');
});

Route::get('singular', [
    'post-types', function () {
        return view('post-type');
    },
]);

Route::get('singular', [
    'product', function () {
        return view('woocommerce.product');
    },
]);

Route::get('postTypeArchive', [
    'product', function () {
        return view('woocommerce.archive');
    },
]);

Route::get('home', function ()
{
    return view('index');
});

Route::get('404', function ()
{
    return view('404');
});
