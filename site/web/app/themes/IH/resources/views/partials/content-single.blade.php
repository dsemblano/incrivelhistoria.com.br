<article @php(post_class('w-full'))>
  <span class="article_categories text-lg lg:text-2xl container block">
    {{ the_category(' &bull; ') }}
  </span>
  
  <header class="mt-6">
    <h1 class="p-name container">
      {!! $title !!}
    </h1>
    <picture class="featured-singleimg w-full">
      {{ the_post_thumbnail('', array( 'class' => 'w-full shadow-xl lg:h-screen') ) }}
    </picture>

    <div class="container">
      @include('partials.entry-meta')  
    </div>
    
  </header>

<div class="container">
  <div class="flex flex-col landscape:flex-row lg:flex-row mt-8 justify-between e-content">
    <div class="landscape:w-3/4 prose lg:prose-xl">
      @php(the_content())
      @php(comments_template())
      {!! do_shortcode('[crp limit="4" heading="1" cache="1"]') !!}
    </div>
    <aside class="sidebar landscape:w-1/4 lg:w-1/4">
      @include('sections.sidebar')
    </aside>
  </div>
</div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>


</article>
