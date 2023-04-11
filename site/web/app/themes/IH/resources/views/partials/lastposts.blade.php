<section id="recentes" class="mb-6">
    <h3 class="sidebar-name mb-0">Últimas</h3>

    <ul id="recent-posts" class="mb-6">
    @php $lastposts = lastposts(4); @endphp
    @while ($lastposts->have_posts()) @php $lastposts->the_post() @endphp
    <li class="text-lg mt-2">
        <div class="p-4 flex flex-row md:flex-col lg:flex-row gap-2">
            <a href="{{ get_permalink() }}" class="w-1/3">
                <figure class="imgpost">
                    {{ the_post_thumbnail('mais_extendida', array( 'class' => '' ) ) }}
                </figure>    
            </a>
            <div class="w-2/3">
                <h4>
                    <a class="postslinks" href="{{ get_permalink() }}">
                        {{ the_title() }}
                    </a>
                </h4>
                <time class="dt-published text-sm inline-block mt-" datetime="{{ get_post_time('c', true) }}">
                    {{ get_the_date() }}
                </time>
            </div>

            
        </div>
    </li>
    @endwhile
    </ul>


</section>
