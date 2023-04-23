<article @php(post_class('w-full'))>
  
  <header class="header-post">
    <div class="container relative left-0 top-10 md:top-20 bg-white w-80 md:w-5/6 px-4 lg:w-2/5 lg:px-8 pb-4 text-center">

      <span class="category-post text-ihcat font-bold text-2xl lg:text-4xl">
        {{-- {{ esc_html( get_the_category()[0]->name)  }} --}}

        <a class="no_underline hover:underline" href="{{esc_url( get_category_link( get_the_category()[0]->term_id ) )}}">{{esc_html( get_the_category()[0]->name )}}</a>

      </span>

      <h1 class="p-name text-4xl lg:text-6xl my-4">
        {!! $title !!}
      </h1>
      <p class="mb-3 excerpt">
        {{ get_the_excerpt() }}
      </p>
        {{-- <div class="container text-center flex flex-col items-center text-xs lg:text-xl gap-1 lg:gap-3">
          @include('partials.entry-meta')
        </div> --}}
        <hr>
      <div class="categories lg:text-lg my-6">
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
  <div class="flex flex-col landscape:flex-row lg:flex-row justify-center lg:gap-x-12 e-content">
    <div class="landscape:w-3/4 prose xl:prose-lg 2xl:prose-xl prose-a:no-underline prose-figure:!m-0 prose-blockquote:!border-l-ihcat">
      <div class="author border-b border-dashed !my-4 lg:!my-6">
        @include('partials.entry-meta')
        @include('partials.readingtime')
        <div class="shareaholic-canvas" data-app="share_buttons" data-app-id-name="post_below_content"></div>
      </div>
      @php(the_content())
      @include('partials.threedots')
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
