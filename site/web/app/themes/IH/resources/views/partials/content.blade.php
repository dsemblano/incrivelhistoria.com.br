<article @php(post_class('border-default'))>
  <a href="{{ get_permalink() }}">
    <figure class="imgpost">
      {{ the_post_thumbnail('medium_large', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
    </figure>
  </a>
  <header>
    <div class="wrap">
      <h2 class="text-lg md:text-base lg:text-lg my-4 font-bold">
        <a class="postslinks" href="{{ get_permalink() }}">
          {{ the_title() }}
        </a>
      </h2>

      <p class="mb-3 excerpt">
        <a class="postslinks" href="{{ get_permalink() }}">
          {{ get_the_excerpt() }}
        </a>
      </p>
      {{-- @include('partials.readingtime') --}}
    </div>

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
