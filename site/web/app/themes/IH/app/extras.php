<?php

// All custom functions here

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

// function excerpt($num) {
//     $limit = $num+1;
//     $excerpt = explode(' ', get_the_excerpt(), $limit);
//     array_pop($excerpt);
//     $excerpt = implode(" ",$excerpt)."... (<a href='" .get_permalink($post->ID) ." '>Leia mais</a>)";
//     echo $excerpt;
// }

function excerpt($limit) {
    return wp_trim_words(get_the_excerpt(), $limit);
}

// Search highlight
function custom_search_highlight($text) {
    if (is_search()) {
      $sr = get_query_var('s');
      $keys = explode(" ", $sr);
      $text = preg_replace('/('.implode('|', $keys) .')/iu', '<mark>$0</mark>', $text);
    }
    return $text;
  }
  add_filter('the_excerpt', 'custom_search_highlight');
  add_filter('the_title', 'custom_search_highlight');
  
// Remove p from category description
remove_filter('term_description','wpautop');

function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        $categories = get_the_category(); 
        // the_category(' &bull; ');
        echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}