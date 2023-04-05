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
        echo '<a class="category-name underline" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
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

function wpb_author_info_box($content)
{
    global $post;

    // Detect if it is a single post with a post author
    if (is_single() && isset($post->post_author)) {
        // Get author's display name
        $display_name = get_the_author_meta('display_name', $post->post_author);

        // If display name is not available then use nickname as display name
        if (empty($display_name)) {
            $display_name = get_the_author_meta('nickname', $post->post_author);
        }

        // Get author's biographical information or description
        $user_description = get_the_author_meta('user_description', $post->post_author);

        // Get author's website URL
        $user_website = get_the_author_meta('url', $post->post_author);

        // Get link to the author archive page
        $user_posts = get_author_posts_url(get_the_author_meta('ID', $post->post_author));

        if (! empty($display_name)) {
            $author_details = '<h6 class="author_name">Autor: ' . $display_name . '</h6>';
        }

        if (! empty($user_description)) {
            // Author avatar and bio

            $author_details .= '<div class="author_details row"">' . '<figure class="col-sm-2 col-md-2 col-lg-2">' . get_avatar(get_the_author_meta('user_email'), 90) . '<a href="https://www.facebook.com/eudes.bezerra.37" target="_blank" rel="noopener"><img id="facebook_author" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDYwLjczNCA2MC43MzMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDYwLjczNCA2MC43MzM7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNNTcuMzc4LDAuMDAxSDMuMzUyQzEuNTAyLDAuMDAxLDAsMS41LDAsMy4zNTN2NTQuMDI2YzAsMS44NTMsMS41MDIsMy4zNTQsMy4zNTIsMy4zNTRoMjkuMDg2VjM3LjIxNGgtNy45MTR2LTkuMTY3aDcuOTE0ICAgdi02Ljc2YzAtNy44NDMsNC43ODktMTIuMTE2LDExLjc4Ny0xMi4xMTZjMy4zNTUsMCw2LjIzMiwwLjI1MSw3LjA3MSwwLjM2djguMTk4bC00Ljg1NCwwLjAwMmMtMy44MDUsMC00LjUzOSwxLjgwOS00LjUzOSw0LjQ2MiAgIHY1Ljg1MWg5LjA3OGwtMS4xODcsOS4xNjZoLTcuODkydjIzLjUyaDE1LjQ3NWMxLjg1MiwwLDMuMzU1LTEuNTAzLDMuMzU1LTMuMzUxVjMuMzUxQzYwLjczMSwxLjUsNTkuMjMsMC4wMDEsNTcuMzc4LDAuMDAxeiIgZmlsbD0iIzAwNkRGMCIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /></a>' . '</figure>' . '<p class="col-sm-10 col-md-10 col-lg-10">' . ($user_description) . '</p>'. '<a class="author_links offset-md-2" href="'. $user_posts .'">Publicações de ' . $display_name . '</a>';
        }

        // $author_details .= '<div class="author_links row""><a class="col-sm-8 col-md-8 col-lg-8" href="'. $user_posts .'">Publicações de ' . $display_name . '</a>';

        // Check if author has a website in their profile
        if (! empty($user_website)) {
            // Display author website link
            $author_details .= ' | <a href="' . $user_website .'" target="_blank" rel="nofollow noopener">Website</a></div>';
        } else {
            // if there is no author website then just close the paragraph
            $author_details .= '</div>';
        }

        // Pass all this info to post content
        $content = $content . '<footer class="author_bio_section container" >' . $author_details . '</footer>';
    }
    return $content;
}