<?php

if (! function_exists('page_title')) {
    function page_title($title)
    {
        $pred = config('app.name') . ' - List of artisans';

        if ($title === '') {
            return $pred;
        } else {
            return $title . ' | ' . $pred;
        }
    }
}

if (! function_exists('set_active_route')) {
    function set_active_route($route)
    {
        return Route::is($route) ? 'active' : '';
    }
}
