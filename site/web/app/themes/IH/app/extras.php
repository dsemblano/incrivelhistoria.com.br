<?php

// All custom functions here

function postbycategory($arg, $page=3) {
    $array = [
        'category_name' => $arg,
        'orderby' => 'rand',
        'posts_per_page'=>$page
        ];
        
    return new \WP_Query($array);
    wp_reset_postdata();
}

function lastposts($posts=5) {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => $posts
    );

    return new WP_Query( $args );
    wp_reset_postdata();
}
