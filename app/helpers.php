<?php

if (! function_exists('page_title')) {

    function page_title($title) {

        $base_title = "Laracarte - List of artisans";
        
        if($title === '') {
            return "Laracarte - List of artisans";
        } else {
            return $title . ' | ' . "Laracarte - List of artisans";
        }
    }
}