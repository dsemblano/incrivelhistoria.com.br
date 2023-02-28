@php
  $post_type = "post";
  $taxonomy = "category";
  $terms = get_terms(
      array(
          'taxonomy' => $taxonomy,
          'hide_empty' => 0,
          'hierarchical'=> 1,
      )
  );
@endphp

<span class="category-name mb-4 text-gray-700 uppercase font-bold">Por categoria</span>

<?php
echo '<div class="gap-4 lg:gap-10 grid grid-cols-2 lg:grid-cols-4">';

foreach($terms as $term):

    $term_id = $term->term_id;
    $term_name = $term->name;

    $query = array(
        'post_type' => $post_type, 
        'post_status' => 'publish',
        'posts_per_page' => 1,
    );
    $query['tax_query'] = array(
        array(
            'taxonomy' => $taxonomy,
            'terms' => $term_id
        )
    );
    $posts = new WP_Query($query);

    while($posts->have_posts()):
        $posts->the_post();
        $permalink = get_permalink($post->ID);
        $post_title = $post->post_title;
        $get_term_link = get_term_link($term_id);
    ?>
        <article>
        <!--<?php //echo the_terms( $post->ID, $taxonomy, 'Term: ', ' &raquo; ' );// with link?> &raquo;-->
        <!-- Term(s): <?php //echo join(', ',wp_get_post_terms($post->ID, $taxonomy, array("fields" => "names")));// without link?> &raquo;  -->
        {{-- <a href="{{ get_permalink() }}">{{ the_post_thumbnail('mais_extendida') }} </a> --}}
        <?php echo '<span class="category-name mb-4 text-red-700 leading-8">'.'<a href="'.$get_term_link.'">'.$term_name.'</a>'.'</span>';?>
        <h2 class="text-lg"><a class="postslinks" href="{{ get_permalink() }}">{{ the_title() }}</a></h2>
        </article>
    <?php
    endwhile;

endforeach;

echo '</div>';       
?>
