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
    // add_filter('the_content', function($content) {
    //     global $post;
    
    //     // Check if the post has an author
    //     if (get_the_author_meta('ID')) {
    //         // Get the author's display name and bio
    //         $author_id = get_the_author_meta('ID');
    //         $author_name = get_the_author_meta('display_name');
    //         $author_bio = get_the_author_meta('description');
    
    //         // Check if the current user is the author
    //         $current_user_id = get_current_user_id();
    //         if ($current_user_id != $author_id) {
    //             // Build the author box HTML
    //             $author_box = '<div class="flex flex-col items-center author author-box mt-6">';
    //             $author_box .= '<figure class="!m-0">';
    //             $author_box .= '<figcaption class="flex items-center !mt-0">';
    //             $author_box .= '<div class="author-avatar avatar avatar-128 photo rounded-full">' . get_avatar( get_the_author_meta('ID'), 128, '', 'avatar', array('class' => 'rounded-full !m-0') ) . '</div>';
    //             $author_box .= '</figure>';
    //             $author_box .= '<span class="p-author author-info text-center mt-8">';
    //             $author_box .= '<span class="font-semibold p-author mt-4">' . $author_name . '</span>';
    //             $author_box .= '<p class="author-bio">' . $author_bio . '</p>';
    //             $author_box .= '</span>';
    //             $author_box .= '</div>';
    
    //             // Add the author box to the post content
    //             $content .= $author_box;
    //         }
    //     }
    //     if (! is_page() ) {
    //         return $content;
    //     }
        
    // });