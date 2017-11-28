<?php

use Themosis\Facades\Metabox;
use Themosis\Facades\Field;

Metabox::make(__('Custom Metabox', 'project'), 'post-types')->set([
    Field::text('custom-field-text', ['title' => __('Custom Field Text', 'project')], ['class' => 'custom-field-text-class']),
    Field::textarea('custom-field-textarea', ['title' => __('Custom Field Textarea', 'project')], ['class' => 'custom-field-textarea-class'])
]);
