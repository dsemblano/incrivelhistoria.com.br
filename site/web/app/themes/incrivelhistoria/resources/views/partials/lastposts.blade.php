<section id="recent-posts" class="mb-6">
    <h3 class="sidebar-name mb-0">
        <strong>
            Últimas
        </strong>        
    </h3>
    @php $lastposts = lastposts(4); @endphp
    <ol id>
        @while ($lastposts->have_posts()) @php $lastposts->the_post() @endphp
        <li>
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
                    @php
                        // $post_time = get_post_time('U', true); // Get the post time in Unix timestamp format
                        // $date_format = date('d-m-Y', $post_time); // Convert Unix timestamp to dd-mm-yyyy format
                        // echo $date_format; // Output the date in dd-mm-yyyy format
                        $modified_date = get_the_modified_date('d-m-Y');
                    @endphp
                    <time class="dt-published text-sm inline-block mt-" datetime="{{$modified_date}}">
                        {{$modified_date}}
                    </time>
                </div>
                
            </article>
        </li>
    @endwhile
    </ol>
    
</section>
