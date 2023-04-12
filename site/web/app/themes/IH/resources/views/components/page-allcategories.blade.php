@php
  $post_type = "post";
  $taxonomy = "category";
  $terms = get_terms(
      array(
          'taxonomy' => $taxonomy,
          'hide_empty' => 0,
          'hierarchical'=> 1,
          'exclude' => 1195,
      )
  );
@endphp

{{-- <span class="category-name mb-4 text-gray-700 uppercase font-bold">Por categoria</span> --}}

<?php
echo '<div class="gap-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-5 w-full md:pr-6 lg:pr-8">';

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
        <?php echo '<h2 class="category-name mb-4 text-ihcat leading-8">'.'<a href="'.$get_term_link.'">'.$term_name.'</a>'.'</h2>';?>
        {{-- <span>Aqui: {{ $term->count }}</span> --}}
        <a href={{$get_term_link}}>
            <figure class="imgpost h-36">
                <img src="{{ get_taxonomy_image($term_id) }}" width="350" height="155" alt="Imagem da categoria {{$term_name}}" class="w-full shadow-xl rounded-t-md wp-post-image">
            </figure>
        </a>
        <p class="category-description my-4">
            <a class="hover:underline postslinks" href={{$get_term_link}}>
                {!! category_description($term_id) !!}
            </a>
          </p>
        {{-- <h2 class="text-lg"><a class="postslinks" href="{{ get_permalink() }}">{{ the_title() }}</a></h2> --}}
        </article>
    <?php
    endwhile;

endforeach;

echo '</div>';       
?>
