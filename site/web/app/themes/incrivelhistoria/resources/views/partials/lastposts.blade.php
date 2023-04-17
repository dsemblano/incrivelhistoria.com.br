<section id="recent-posts" class="mb-6">
    <h3 class="sidebar-name mb-0">Últimas</h3>
    @php $lastposts = lastposts(4); @endphp
    @while ($lastposts->have_posts()) @php $lastposts->the_post() @endphp
    <article class="text-base mt-2 flex flex-row gap-x-4">
        <a href="{{ get_permalink() }}">
            <figure class="imgpost">
                {{ the_post_thumbnail('thumbnail', array( 'class' => 'max-w-none' ) ) }}
            </figure>    
        </a>
        <div class="title-reading flex flex-col">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
            <time class="dt-published text-sm inline-block mt-" datetime="{{ get_post_time('c', true) }}">
                {{ get_the_date() }}
            </time>
        </div>
        
    </article>
    @endwhile
</section>
