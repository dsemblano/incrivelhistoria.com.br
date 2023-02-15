<article @php(post_class('prose lg:prose-xl border-b border-solid border-gray-400'))>
  <a href={{ the_permalink() }}>
    {{ the_post_thumbnail('medium_large', array( 'class' => 'w-full' ) ) }}
  </a>
  <header>
    <h2 class="entry-title">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h2>

    @include('partials.entry-meta')
  </header>

  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
