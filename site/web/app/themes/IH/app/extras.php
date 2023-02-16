<?php

// All custom functions here

function postbycategory($arg, $page=2) {
    $array = [
        'category_name' => $arg,
        'orderby' => 'rand',
        'posts_per_page'=>$page
        ];
        
    return new \WP_Query($array);
    wp_reset_postdata();
}

function lastposts($numbers=5) {
    $array = ['posts_per_page' => $numbers];

    return new \WP_Query( $array );
    wp_reset_postdata();
}