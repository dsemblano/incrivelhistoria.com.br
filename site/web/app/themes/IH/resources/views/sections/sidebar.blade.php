{{-- <div class="md:hidden">
    @include('partials.hrelement')
</div> --}}

<h3 class="category-name mb-0">
    <i class="fa-solid fa-fire-flame-curved mr-1 relative bottom-0.5"></i>Populares
</h3>

<?php
// Get popular posts based on post views
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'order' => 'DESC'
);
$query = new WP_Query($args);

if ($query->have_posts()) : ?>

    <ul class="recent-posts mb-6">
    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <li class="text-base lg:text-lg mt-2">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
            <span class="rt-reading-time block">
                <?php echo get_post_meta(get_the_ID(), 'post_views_count', true); ?> leituras
            </span> 
            
        </li>
    <?php endwhile; ?>
    </ul>

<?php endif; wp_reset_postdata(); ?>
@include('partials.hrelement')
@include('partials.lastposts')
@include('partials.hrelement')

@php(dynamic_sidebar('sidebar-primary'))    