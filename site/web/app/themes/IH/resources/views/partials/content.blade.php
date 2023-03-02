<article @php(post_class(''))>
  <a href="{{ get_permalink() }}">
    <figure class="imgpost">
      {{ the_post_thumbnail('medium_large', array( 'class' => 'w-full shadow-xl rounded-md' ) ) }}
    </figure>
  </a>
  <header>
    <h2 class="entry-title text-lg my-4 font-bold">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h2>

    <p class="my-3 excerpt">
      <a class="postslinks" href="{{ get_permalink() }}">
        {{ get_the_excerpt() }}
      </a>
    </p>

    {{-- @include('partials.entry-meta') --}}
    {{-- <time class="dt-published" datetime="{{ get_post_time('c', true) }}">
      {{ get_the_date() }}
    </time> --}}
  </header>
{{-- 
  <div class="entry-summary">
    @php(the_excerpt())
  </div> --}}
</article>
