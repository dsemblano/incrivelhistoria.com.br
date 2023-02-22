<section id="recentes" class="mb-6">
    <h3 class="category-name inline-block text-2xl mb-4 text-red-700">Matérias recentes</h3>
    
    @php $lastposts = lastposts(3); @endphp
    @while ($lastposts->have_posts()) @php $lastposts->the_post() @endphp
    <article class="mb-5">
        <a href="{{ get_permalink() }}">
            {{ the_post_thumbnail('large', array('class' => '') ) }}
        </a>
        <h4 class="text-base lg:text-xl mt-2">
            <a class="postslinks" href="{{ get_permalink() }}">
                {{ the_title() }}
            </a>
        </h4>
        <time class="dt-published text-xs md:text-base inline-block mt-1" datetime="{{ get_post_time('c', true) }}">
            {{ get_the_date() }}
        </time>
    </article>
    @endwhile

</section>
