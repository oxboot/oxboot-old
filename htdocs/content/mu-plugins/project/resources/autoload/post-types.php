<?php

use Themosis\Facades\PostType;

$books = PostType::make('post-types', __('Post Types', 'project'), __('Post Type', 'project'))->set();
