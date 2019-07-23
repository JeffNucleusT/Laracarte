<?php

if (! function_exists('page_title')) {
    function page_title($title)
    {
        $pred = 'Laracarte - List of artisans';
        return isset($title) ? $title . ' | ' . $pred : $pred;
    }
}
