<?php

// All custom functions here

function destaques() {
    $args = array(
        'posts_per_page' => 3,
        'post__in' => get_option( 'sticky_posts' ),
        'ignore_sticky_posts' => 1
    );
    
    $sticky_query = new WP_Query( $args );

    return $sticky_query;
    wp_reset_postdata();
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

function lastposts($posts=5) {
    $args = array(
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
        'posts_per_page' => $posts,
    );

    return new WP_Query( $args );
    wp_reset_postdata();
}

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
        echo " › ";
        $categories = get_the_category(); 
        // the_category(' &bull; ');
        echo '<a class="sidebar-name underline" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
            // if (is_single()) {
            //     echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
            //     the_title();
            // }
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

// Author box

    function custom_author_box($content) {
        if (is_single()) {
            global $post;
    
            // Check if the post has an author
            if (get_the_author_meta('ID')) {
                // Get the author's display name and bio
                $author_id = get_the_author_meta('ID');
                $author_name = get_the_author_meta('display_name');
                $author_bio = get_the_author_meta('description');
        
                // Check if the current user is the author
                $current_user_id = get_current_user_id();
                if ($current_user_id != $author_id) {
                    // Build the author box HTML
                    $author_box = '<div class="flex flex-col items-center author author-box mt-6">';
                    $author_box .= '<figure class="!m-0">';
                    $author_box .= '<figcaption class="flex items-center !mt-0">';
                    $author_box .= '<div class="author-avatar avatar avatar-128 photo rounded-full">' . get_avatar( get_the_author_meta('ID'), 128, '', 'avatar', array('class' => 'rounded-full !m-0') ) . '</div>';
                    $author_box .= '</figure>';
                    $author_box .= '<span class="p-author author-info text-center mt-8">';
                    $author_box .= '<span class="font-semibold p-author mt-4">' . $author_name . '</span>';
                    $author_box .= '<p class="author-bio">' . $author_bio . '</p>';
                    $author_box .= '</span>';
                    $author_box .= '</div>';
        
                    // Add the author box to the post content
                    $content .= $author_box;
                }
            }
        
            return $content;
        }
    }
    add_filter('the_content', 'custom_author_box');    


// Remove wp_block_library_css
/* Check if page uses blocks */

// function is_gutenberg_page() {
//     global $post;
//     if ( function_exists( 'has_blocks' ) && has_blocks( $post->ID ) ) {
//         return true;
//     } else {
//         return false;
//     }
// }
// /* Remove Gutenberg stuff when no blocks being used. */
// add_action( 'wp_enqueue_scripts', 'conditionally_load_gutenberg_styles' );
// function conditionally_load_gutenberg_styles() {
// // if this is a Gutenberg, abort.
// if ( is_gutenberg_page() ) {
//     return;
// }
// wp_dequeue_style( 'wp-block-library' );
// wp_dequeue_style( 'wp-block-library-theme' );
// wp_dequeue_style( 'wc-block-style' );
// wp_dequeue_style( 'wc-blocks-style' );
// }

// Remove svg duotone
// add_action('after_setup_theme', function () {
//     remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
//     remove_action( 'in_admin_header', 'wp_global_styles_render_svg_filters' );
// } );

// // Disable REST API link in HTTP headers
// remove_action('template_redirect', 'rest_output_link_header', 11, 0);
 
// // REMOVE WP EMOJI
// remove_action('wp_head', 'print_emoji_detection_script', 7);
// remove_action('wp_print_styles', 'print_emoji_styles');
 
// remove_action('admin_print_scripts', 'print_emoji_detection_script');
// remove_action('admin_print_styles', 'print_emoji_styles');