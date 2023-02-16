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

<ul class="mt-8">
    <h3 class="category-name inline-block text-2xl mb-4 text-red-700">Recentes</h3>
    @php $recent_posts = wp_get_recent_posts(); @endphp
	@foreach( $recent_posts as $recent )
        <li>
            <a href={{ get_permalink($recent['ID']) }}>
            {{ $recent['post_title'] }}
            {!! get_the_post_thumbnail($recent['ID']) !!}
            </a>
        </li>
    @endforeach
	@php wp_reset_query(); @endphp
</ul>