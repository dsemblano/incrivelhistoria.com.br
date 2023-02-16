<section id="recentes" class="border-b border-solid border-gray-400 mb-8">
    <h3 class="category-name inline-block text-2xl mb-4 text-red-700">Matérias recentes</h3>
    
    @php $lastposts = lastposts(3); @endphp
    @while ($lastposts->have_posts()) @php $lastposts->the_post() @endphp
    <article class="mb-5">
        <a class="no-underline hover:underline" href="{{ get_permalink() }}">
        {{ the_post_thumbnail('large' ) }}
        <h4 class="text-base lg:text-xl mt-2">{{ the_title() }}</h4>
        <time class="dt-published text-xs md:text-base inline-block mt-1" datetime="{{ get_post_time('c', true) }}">
            {{ get_the_date() }}
        </time>
        </a>
    </article>
    @endwhile

</section>
