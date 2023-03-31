<article @php(post_class('w-full'))>
  
  <header class="header-post">
    <div class="breadcrumb container lg:text-lg my-4"><?php get_breadcrumb(); ?></div>
    <div class="container relative left-0 top-10 md:top-20 bg-white w-80 md:w-5/6 px-4 lg:w-2/5 lg:px-8 pb-4 text-center">
      <h1 class="p-name font-bold text-4xl lg:text-6xl">
        {!! $title !!}
      </h1>
      <div class="container text-center flex flex-col items-center text-xs lg:text-xl gap-1 lg:gap-3">
        @include('partials.entry-meta')
      </div>
      <div class="categories lg:text-lg my-4">
        {{ the_category(' &bull; ') }}
      </div>
    </div>
    
    <picture class="featured-singleimg w-full">
      {{ the_post_thumbnail('', array( 'class' => 'w-full shadow-xl lg:h-thumb mb-6') ) }}
    </picture>
{{-- 
    <div class="container flex flex-row justify-around gap-5 md:justify-start">
      @include('partials.entry-meta')
      @include('partials.readingtime')
    </div> --}}
    
  </header>

<div class="container mb-12">
  <div class="flex flex-col landscape:flex-row lg:flex-row mt-8 justify-center lg:gap-x-12 e-content">
    <div class="landscape:w-3/4 prose xl:prose-lg 2xl:prose-xl">
      @include('partials.readingtime')
      @php(the_content())
      @php(comments_template())
      {!! do_shortcode('[crp limit="4" heading="1" cache="1"]') !!}
    </div>
    <aside class="sidebar landscape:w-1/4 lg:w-1/4 lg:self-end">
      @include('sections.sidebar')
    </aside>
  </div>
</div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>


</article>
