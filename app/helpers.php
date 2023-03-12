<?php
use Illuminate\Support\Facades\Route;

if( ! function_exists('page_title')){
    function page_title($title){
        $base_title= config('app.name').' List of artisan';
        return empty($title) ? $base_title :  $title.' | '.$base_title;
    }
}

if( ! function_exists('set_active_route')){
    function set_active_route($route){
        return Route::is($route) ? 'active' : '';
    }

    
}