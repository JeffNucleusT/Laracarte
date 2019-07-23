<?php

if (! function_exists('page_title')) {
    function page_title($title)
    {
        $pred = 'Laracarte - List of artisans';
        return isset($title) ? $title . ' | ' . $pred : $pred;
    }
}

if (! function_exists('set_active_route')) {
    function set_active_route($route)
    {
        return Route::is($route) ? 'active' : '';
    }
}
