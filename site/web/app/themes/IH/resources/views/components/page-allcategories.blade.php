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

<h2 class="text-xl my-4 text-gray-600">Todas as categorias</h2>

<?php
echo '<ul class="gap-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">';

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
        <li>
        <!--<?php //echo the_terms( $post->ID, $taxonomy, 'Term: ', ' &raquo; ' );// with link?> &raquo;-->
        <!-- Term(s): <?php //echo join(', ',wp_get_post_terms($post->ID, $taxonomy, array("fields" => "names")));// without link?> &raquo;  -->
        {{-- <a href={{ the_permalink() }}>{{ the_post_thumbnail('mais_extendida') }} </a> --}}
        <?php echo '<a class="text-sm uppercase text-red-700 leading-8" href="'.$get_term_link.'">'. '<span>'.$term_name.'</span>'.'</a>';?>
        <h2 class="text-xl"><a href={{ the_permalink() }}>{{ the_title() }}</a></h2>
        </li>
    <?php
    endwhile;

endforeach;

echo '</ul>';       
?>
