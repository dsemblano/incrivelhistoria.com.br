<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

// Remove p from category description
remove_filter('term_description','wpautop');

// remove url field from comments
add_filter('comment_form_default_fields', function ($fields) {
    if(isset($fields['url']))
    unset($fields['url']);
    return $fields;
});

// Author box

add_filter('the_content', function($content) {
    if (is_single()) {
        $author_name = get_the_author_meta('display_name');
        $author_bio = get_the_author_meta('description');

        $author_box = '<div class="flex flex-col items-center author author-box mt-10 pt-10 border-gray-200 border-t border-solid"">';
        $author_box .= '<figure class="!m-0">';
        $author_box .= '<figcaption class="flex items-center !mt-0">';
        $author_box .= '<div class="author-avatar avatar avatar-128 photo rounded-full">' . get_avatar( get_the_author_meta('ID'), 128, '', 'avatar', array('class' => 'rounded-full !m-0') ) . '</div>';
        $author_box .= '</figure>';
        $author_box .= '<span class="p-author author-info text-center mt-8">';
        $author_box .= '<span class="font-semibold p-author mt-4 text-ihcinza">' . $author_name . '</span>';
        $author_box .= '<p class="author-bio text-ihcinza text-base">' . $author_bio . '</p>';
        $author_box .= '</span>';
        $author_box .= '</div>';
        $content .= $author_box;
    }
    return $content;
});

// defer local script
add_filter('script_loader_tag', function ($url) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.min.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
});