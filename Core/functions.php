<?php

if(!function_exists('get_base_path')){
    function get_base_path($path = '')
    {
        return BASE_PATH . $path;
    }
}

if(!function_exists('view')){
    function view($path, $attributes = [])
    {
        extract($attributes);

        require get_base_path('views/' . $path);
    }
}

if(!function_exists('dd')) {
    function dd($var = null)
    {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
        die();
    }
}

