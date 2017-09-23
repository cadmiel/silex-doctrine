<?php

if ( ! function_exists('getControllerName'))
{
    function getControllerName(){

        $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri_segments = explode('/', $uri_path);
        unset($uri_segments[0]);

        if(strlen($uri_segments[1]) == 0)
            $uri_segments[1]='home';

        return  [
                    'alias' => strtolower($uri_segments[1]).'.controller',
                    'name'  => '\App\Controllers\\'.ucfirst(strtolower($uri_segments[1])).'Controller'
                ];

    }
}