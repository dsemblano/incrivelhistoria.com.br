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