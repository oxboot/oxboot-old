<?php

use Themosis\Facades\Page;

$custom = Page::make('options-page', 'Project options page')->set([
    'capability' => 'manage_options',
    'icon'       => 'dashicons-admin-generic',
    'position'   => 99,
    'tabs'       => true,
    'menu'       => __('Options', 'project')
]);
