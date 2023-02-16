{{-- @php $lastposts = lastposts('2'); @endphp
<ul>
    @while ($lastposts->have_posts()) @php $category->the_post() @endphp
    <li>
        <a class="no-underline hover:underline" href="{{ get_permalink() }}">
            {{ the_title() }}
        </a>
    </li>  
    @endwhile
</ul> --}}

<section id="recentes" class="border-b border-solid border-gray-400 mb-8">
    <h3 class="category-name inline-block text-2xl mb-4 text-red-700">Matérias recentes</h3>
    <ul>
        @php $recent_posts = wp_get_recent_posts((array('numberposts' => 3))); @endphp
        @foreach( $recent_posts as $recent )
            <li class="mb-5">
                {!! get_the_post_thumbnail($recent['ID'], 'large') !!}
                <h4 class="text-xl mt-2">
                    <a class="no-underline hover:underline" href={{ get_permalink($recent['ID']) }}>
                        {{ $recent['post_title'] }}
                    </a>
                </h4>
            </li>
        @endforeach
        @php wp_reset_query(); @endphp
    </ul>
</section>
