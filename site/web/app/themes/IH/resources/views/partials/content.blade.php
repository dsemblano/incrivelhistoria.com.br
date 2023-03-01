<article @php(post_class(''))>
  <a href="{{ get_permalink() }}">
    {{ the_post_thumbnail('medium_large', array( 'class' => 'w-full' ) ) }}
  </a>
  <header>
    <h2 class="entry-title text-base lg:text-lg mt-2">
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
