<article @php(post_class('w-full single-post'))>

  <header class="header-post">
    <div
      class="container relative left-0 top-10 md:top-20 bg-white w-80 md:w-5/6 px-4 lg:w-2/5 lg:px-8 pb-4 text-center rounded-md">

      <span class="category-post text-ihcat font-bold text-2xl lg:text-4xl">
        {{-- {{ esc_html( get_the_category()[0]->name) }} --}}

        <a class="no_underline hover:underline"
          href="{{esc_url( get_category_link( get_the_category()[0]->term_id ) )}}">{{esc_html(
          get_the_category()[0]->name )}}</a>

      </span>

      <h1 class="p-name text-4xl lg:text-6xl my-4 font-bold">
        {!! $title !!}
      </h1>
      <p class="mb-3 excerpt">
        {{ get_the_excerpt() }}
      </p>
      <hr>
      <div class="categories lg:text-lg my-6">
        {{ the_category(' &bull; ') }}
      </div>
    </div>

    <picture class="featured-singleimg w-full">
      {{ the_post_thumbnail('', array( 'class' => 'w-full shadow-xl h-auto lg:h-thumb mb-6') ) }}
    </picture>

  </header>

  <div class="container mb-12">
    <div class="flex flex-col landscape:flex-row lg:flex-row justify-center lg:gap-x-12 e-content">
      <div class="landscape:w-3/4 prose xl:prose-lg 2xl:prose-xl prose-a:no-underline prose-figure:!m-0">
        <div class="author border-b border-dashed !my-4 lg:!my-6">
          @include('partials.entry-meta')
          @include('partials.readingtime')
          @include('partials.share')
        </div>
        @php(the_content())
        @include('partials.tagspost')
        @include('partials.threedots')
        @include('partials.share')
        @php(comments_template())
        @include('partials.threedots')
        {!! do_shortcode('[crp limit="4" heading="1" cache="1"]') !!}
      </div>
      <aside class="sidebar landscape:w-1/4 lg:w-1/4 lg:self-end">
        @include('sections.sidebar')
      </aside>
    </div>
  </div>

  {{-- @if ($pagination)
  <footer>
    <nav class="page-nav" aria-label="Page">
      {!! $pagination !!}
    </nav>
  </footer>
  @endif --}}

  {{-- @php(comments_template()) --}}
</article>