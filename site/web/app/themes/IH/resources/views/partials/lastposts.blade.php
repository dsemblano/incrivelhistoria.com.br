<section id="recentes" class="mb-6">
    <h3 class="category-name mb-0">Matérias recentes</h3>
    
    @php $lastposts = lastposts(4); @endphp
    @while ($lastposts->have_posts()) @php $lastposts->the_post() @endphp
    <article class="mb-5">
        {{-- <a href="{{ get_permalink() }}">
            {{ the_post_thumbnail('large', array('class' => '') ) }}
        </a> --}}
        <h4 class="text-base lg:text-lg mt-2">
            <a class="postslinks" href="{{ get_permalink() }}">
                {{ the_title() }}
            </a>
        </h4>
        <div class="flex flex-row mt-2 gap-3">
            @include('partials.readingtime')
            <time class="dt-published text-sm inline-block mt-" datetime="{{ get_post_time('c', true) }}">
                {{ get_the_date() }}
            </time>
        </div>
        
    </article>
    @endwhile

</section>
