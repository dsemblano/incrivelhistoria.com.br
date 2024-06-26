<article @php(post_class(''))>
  <a href="{{ get_permalink() }}">
    <figure class="imgpost">
      {{ the_post_thumbnail('medium_large', array( 'class' => 'w-full' ) ) }}
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

    {{-- @includeWhen(get_post_type() === 'post', 'partials.entry-meta') --}}
  </header>
</article>