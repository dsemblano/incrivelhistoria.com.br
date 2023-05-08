<?php

// All custom functions here

function destaques() {
    if ( is_front_page() ) {
        $args = array(
            'posts_per_page' => 3,
            'orderby' => 'modified',
            'order' => 'DESC',
            'post__in' => get_option( 'sticky_posts' ),
            'ignore_sticky_posts' => 1
        );
        
        $sticky_query = new WP_Query( $args );
    
        return $sticky_query;
        wp_reset_postdata();
    }
}

function caturl($catname) {
    $category = get_category_by_slug(sanitize_title($catname));
    $cat_name = get_category_by_slug($catname)->cat_name;

    if ($category) {
        // Get the category URL from the category object
        $category_url = get_term_link($category);
        // Return the HTML link tag with the category URL and name
        return '<a href="' . $category_url . '">' . $cat_name . '</a>';
    } else {
        return '';
    }
}

function postbycategory($arg, $page=3) {
    $array = [
        'category_name' => $arg,
        // 'orderby' => 'rand',
        'posts_per_page'=>$page
        ];
        
    return new \WP_Query($array);
    wp_reset_postdata();
}

function lastposts($posts=6) {
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => $posts,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'ignore_sticky_posts' => 1,
    );

    return new WP_Query( $args );
    wp_reset_postdata();
}
  
