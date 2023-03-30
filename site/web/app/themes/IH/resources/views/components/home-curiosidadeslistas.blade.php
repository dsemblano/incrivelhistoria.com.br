<section {{ $attributes }}>

  <div class="landscape:w-3/4 w-full md:pr-6 lg:pr-8">
    <section id="curiosidades-listas" class="w-full">
      <span class="category-name mb-4">
        <strong>@php echo caturl('curiosidades') @endphp</strong>
      </span>
      <div class="flex flex-col">

        @php $category = postbycategory('curiosidades'); @endphp
        @php $first_loop = true; @endphp
        @if ($category->have_posts())
        @while ($category->have_posts()) @php $category->the_post() @endphp
        @if ($first_loop)

        <div class="top flex flex-col lg:flex-row mb-12">
          <article class="flex flex-col lg:flex-row border-default hover:bg-gray-100 hover:rounded">
          
            <div class="left mr-4 w-full lg:w-2/3 h-full">
              <a href="{{ get_permalink() }}">
                <figure class="imgpost">
                  {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full h-full rounded-t-md xl:rounded-tr-none rounded-tl-md' ) ) }}
                </figure>
              </a>
            </div>
            
            <div class="right flex-row w-full lg:w-1/3 lg:p-4 p-4">
              <h2 class="text-2xl md:text-3xl lg:text-3xl mb-2 mt-4 lg:mt-0 font-bold">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ the_title() }}
                </a>
              </h2>
              </p>

              
              <p class="mb-3 excerpt">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ get_the_excerpt() }}
                </a>
              </p>
              @include('partials.readingtime')
            </div>
          </article>
        </div>
        <div class="bottom flex flex-col md:flex-row md:gap-8">
        @php $first_loop = false; @endphp
        {{-- @else

          <article class="mb-8 w-full md:w-1/2 h-3/6">
            <div class="flex flex-row md:flex-col gap-2 md:gap-0">
              <div class="left w-1/2 md:w-full">
                <a href="{{ get_permalink() }}">
                  <figure class="imgpost">
                    {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
                  </figure>
                </a>
              </div>

              <div class="right w-1/2 md:w-full md:mt-4">
                <h2 class="text-lg lg:text-2xl md:my-4 font-bold px-4">
                  <a class="postslinks" href="{{ get_permalink() }}">
                    {{ the_title() }}
                  </a>
                </h2>
              </div>              
            </div>
            <p class="mb-3 excerpt w-full mt-4 md:mt-0 px-4">
              <a class="postslinks" href="{{ get_permalink() }}">
                {{ get_the_excerpt() }}
              </a>
            </p>
          </article>
       --}}
        @endif
        
        @endwhile
      </div>
        @else
        <div class="alert alert-warning">
          {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
        </div>
      </div>
      @endif
      {{-- <section class="todas-noticias">
        todas
      </section> --}}
    </section>
    {{-- @include('partials.hrelement') --}}
    
    {{-- Next grid --}}  
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-6">
  
      {{-- Next category --}}
    
      <section id="historia-brasil" class="">
        <span class="category-name mb-4">
          <strong>@php echo caturl('historia-do-brasil') @endphp</strong>
        </span>

        @php $category = postbycategory('historia-do-brasil'); @endphp
        @if ($category->have_posts())
          @php $first_loop = true; @endphp
          @while ($category->have_posts()) @php $category->the_post() @endphp
          
            {{-- @php echo $first_loop; @endphp --}}
            @if ($first_loop)
            <article class="border-default pb-8 mb-8 h-3/6 hover:bg-gray-100 hover:rounded">
              <a href="{{ get_permalink() }}">
                <figure class="imgpost">
                  {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
                </figure>
              </a>
              <div class="wrap">
                <h2 class="text-lg md:text-base lg:text-lg mb-4 font-bold">
                  <a class="postslinks" href="{{ get_permalink() }}">
                    {{ the_title() }}
                  </a>
                </h2>
  
                <p class="mb-3 excerpt">
                  <a class="postslinks" href="{{ get_permalink() }}">
                    {{ get_the_excerpt() }}
                  </a>
                </p>
                @include('partials.readingtime')
              </div>
            </article>

            @php $first_loop = false; @endphp
              @else
              <article class="hover:bg-gray-100 hover:rounded">
                <div class="p-4 flex flex-row md:flex-col lg:flex-row gap-2">
                  <a class="w-1/2 md:w-full lg:w-1/2" href="{{ get_permalink() }}">
                    <figure class="imgpost">
                      {{ the_post_thumbnail('curiosidades_small', array( 'class' => 'w-full shadow-xl rounded-md' ) ) }}
                    </figure>
                  </a>
                  <h2 class="text-lg md:text-base lg:text-lg font-bold w-1/2 md:w-full lg:w-1/2">
                    <a class="postslinks" href="{{ get_permalink() }}">
                      {{ the_title() }}
                    </a>
                  </h2>
                </div>
              </article>
            @endif
          @endwhile
        @else
          <div class="alert alert-warning">
            {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
          </div>
        @endif

      </section>
    
      {{-- Next category --}}  
    
      <section id="direitos-humanos" class="">
        <span class="category-name mb-4">
          <strong>@php echo caturl('direitos-humanos') @endphp</strong>
        </span>
        @php $category = postbycategory('direitos-humanos'); @endphp
        @if ($category->have_posts())
          @php $first_loop = true; @endphp
          @while ($category->have_posts()) @php $category->the_post() @endphp
          
          {{-- @php echo $first_loop; @endphp --}}
          @if ($first_loop)
          <article class="border-default pb-8 mb-8 h-3/6 hover:bg-gray-100 hover:rounded">
            <a href="{{ get_permalink() }}">
              <figure class="imgpost">
                {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full shadow-xl rounded-md' ) ) }}
              </figure>
            </a>
            <div class="wrap">
              <h2 class="text-lg md:text-base lg:text-lg mb-4 font-bold">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ the_title() }}
                </a>
              </h2>

              <p class="mb-3 excerpt">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ get_the_excerpt() }}
                </a>
              </p>
              @include('partials.readingtime')
            </div>
          </article>

          @php $first_loop = false; @endphp
            @else
            <article class="hover:bg-gray-100 hover:rounded">
              <div class="p-4 flex flex-row md:flex-col lg:flex-row gap-2">
                  <a class="w-1/2 md:w-full lg:w-1/2" href="{{ get_permalink() }}">
                    <figure class="imgpost">
                      {{ the_post_thumbnail('curiosidades_small', array( 'class' => 'w-full shadow-xl rounded-md' ) ) }}
                    </figure>
                  </a>
                  <h2 class="text-lg md:text-base lg:text-lg font-bold w-1/2 md:w-full lg:w-1/2">
                  <a class="postslinks" href="{{ get_permalink() }}">
                    {{ the_title() }}
                  </a>
                </h2>
              </div>
            </article>
          @endif
        @endwhile
      @else
        <div class="alert alert-warning">
          {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
        </div>
      @endif
      </section>
  
      {{-- Next category --}}
  
      <section id="batalhas-historicas" class="">
        <span class="category-name mb-4">
          <strong>@php echo caturl('batalhas-historicas') @endphp</strong>
        </span>
        @php $category = postbycategory('batalhas-historicas'); @endphp
        @if ($category->have_posts())
          @php $first_loop = true; @endphp
          @while ($category->have_posts()) @php $category->the_post() @endphp
          
          {{-- @php echo $first_loop; @endphp --}}
          @if ($first_loop)
          <article class="border-default pb-8 mb-8 h-3/6 hover:bg-gray-100 hover:rounded">
            <a href="{{ get_permalink() }}">
              <figure class="imgpost">
                {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full shadow-xl rounded-md' ) ) }}
              </figure>
            </a>
            <div class="wrap">
              <h2 class="text-lg md:text-base lg:text-lg mb-4 font-bold">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ the_title() }}
                </a>
              </h2>

              <p class="mb-3 excerpt">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ get_the_excerpt() }}
                </a>
              </p>
              @include('partials.readingtime')
            </div>
          </article>

          @php $first_loop = false; @endphp
            @else
            <article class="hover:bg-gray-100 hover:rounded">
              <div class="p-4 flex flex-row md:flex-col lg:flex-row gap-2">
                  <a class="w-1/2 md:w-full lg:w-1/2" href="{{ get_permalink() }}">
                    <figure class="imgpost">
                      {{ the_post_thumbnail('curiosidades_small', array( 'class' => 'w-full shadow-xl rounded-md' ) ) }}
                    </figure>
                  </a>
                  <h2 class="text-lg md:text-base lg:text-lg font-bold w-1/2 md:w-full lg:w-1/2">
                  <a class="postslinks" href="{{ get_permalink() }}">
                    {{ the_title() }}
                  </a>
                </h2>
              </div>
            </article>
          @endif
        @endwhile
      @else
        <div class="alert alert-warning">
          {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
        </div>
      @endif
      </section>
    
    </div>
    {{-- end grid --}}
  
    {{-- Next grid --}}  
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-6">
  
      {{-- Next category --}}
      @php $category = postbycategory('crime-organizado'); @endphp
    
      <section id="crime-organizado" class="">
        <span class="category-name mb-4">
          <strong>@php echo caturl('crime-organizado') @endphp</strong>
        </span>
        @php $category = postbycategory('crime-organizado'); @endphp
        @if ($category->have_posts())
          @php $first_loop = true; @endphp
          @while ($category->have_posts()) @php $category->the_post() @endphp
          
          {{-- @php echo $first_loop; @endphp --}}
          @if ($first_loop)
          <article class="border-default pb-8 mb-8 h-3/6 hover:bg-gray-100 hover:rounded">
            <a href="{{ get_permalink() }}">
              <figure class="imgpost">
                {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full shadow-xl rounded-md' ) ) }}
              </figure>
            </a>
            <div class="wrap">
              <h2 class="text-lg md:text-base lg:text-lg mb-4 font-bold">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ the_title() }}
                </a>
              </h2>

              <p class="mb-3 excerpt">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ get_the_excerpt() }}
                </a>
              </p>
              @include('partials.readingtime')
            </div>
          </article>

          @php $first_loop = false; @endphp
            @else
            <article class="hover:bg-gray-100 hover:rounded">
              <div class="p-4 flex flex-row md:flex-col lg:flex-row gap-2">
                  <a class="w-1/2 md:w-full lg:w-1/2" href="{{ get_permalink() }}">
                    <figure class="imgpost">
                      {{ the_post_thumbnail('curiosidades_small', array( 'class' => 'w-full shadow-xl rounded-md' ) ) }}
                    </figure>
                  </a>
                  <h2 class="text-lg md:text-base lg:text-lg font-bold w-1/2 md:w-full lg:w-1/2">
                  <a class="postslinks" href="{{ get_permalink() }}">
                    {{ the_title() }}
                  </a>
                </h2>
              </div>
            </article>
          @endif
        @endwhile
      @else
        <div class="alert alert-warning">
          {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
        </div>
      @endif
      </section>
    
      {{-- Next category --}}
    
      <section id="guerras" class="">
        <span class="category-name mb-4">
          <strong>@php echo caturl('guerras') @endphp</strong>
        </span>
        @php $category = postbycategory('guerras'); @endphp
        @if ($category->have_posts())
          @php $first_loop = true; @endphp
          @while ($category->have_posts()) @php $category->the_post() @endphp
          
          {{-- @php echo $first_loop; @endphp --}}
          @if ($first_loop)
          <article class="border-default pb-8 mb-8 h-3/6 hover:bg-gray-100 hover:rounded">
            <a href="{{ get_permalink() }}">
              <figure class="imgpost">
                {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full shadow-xl rounded-md' ) ) }}
              </figure>
            </a>
            <div class="wrap">
              <h2 class="text-lg md:text-base lg:text-lg mb-4 font-bold">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ the_title() }}
                </a>
              </h2>

              <p class="mb-3 excerpt">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ get_the_excerpt() }}
                </a>
              </p>
              @include('partials.readingtime')
            </div>
          </article>

          @php $first_loop = false; @endphp
            @else
            <article class="hover:bg-gray-100 hover:rounded">
              <div class="p-4 flex flex-row md:flex-col lg:flex-row gap-2">
                  <a class="w-1/2 md:w-full lg:w-1/2" href="{{ get_permalink() }}">
                    <figure class="imgpost">
                      {{ the_post_thumbnail('curiosidades_small', array( 'class' => 'w-full shadow-xl rounded-md' ) ) }}
                    </figure>
                  </a>
                  <h2 class="text-lg md:text-base lg:text-lg font-bold w-1/2 md:w-full lg:w-1/2">
                  <a class="postslinks" href="{{ get_permalink() }}">
                    {{ the_title() }}
                  </a>
                </h2>
              </div>
            </article>
          @endif
        @endwhile
      @else
        <div class="alert alert-warning">
          {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
        </div>
      @endif
      </section>
  
      {{-- Next category --}}
  
      <section id="periodos" class="">
        <span class="category-name mb-4">
          <strong>@php echo caturl('periodos') @endphp</strong>
        </span>
        @php $category = postbycategory('periodos'); @endphp
        @if ($category->have_posts())
          @php $first_loop = true; @endphp
          @while ($category->have_posts()) @php $category->the_post() @endphp
          
          {{-- @php echo $first_loop; @endphp --}}
          @if ($first_loop)
          <article class="border-default pb-8 mb-8 h-3/6 hover:bg-gray-100 hover:rounded">
            <a href="{{ get_permalink() }}">
              <figure class="imgpost">
                {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full shadow-xl rounded-md' ) ) }}
              </figure>
            </a>
            <div class="wrap">
              <h2 class="text-lg md:text-base lg:text-lg mb-4 font-bold">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ the_title() }}
                </a>
              </h2>

              <p class="mb-3 excerpt">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ get_the_excerpt() }}
                </a>
              </p>
              @include('partials.readingtime')
            </div>
          </article>  

          @php $first_loop = false; @endphp
            @else
            <article class="hover:bg-gray-100 hover:rounded">
              <div class="p-4 flex flex-row md:flex-col lg:flex-row gap-2">
                  <a class="w-1/2 md:w-full lg:w-1/2" href="{{ get_permalink() }}">
                    <figure class="imgpost">
                      {{ the_post_thumbnail('curiosidades_small', array( 'class' => 'w-full shadow-xl rounded-md' ) ) }}
                    </figure>
                  </a>
                  <h2 class="text-lg md:text-base lg:text-lg font-bold w-1/2 md:w-full lg:w-1/2">
                  <a class="postslinks" href="{{ get_permalink() }}">
                    {{ the_title() }}
                  </a>
                </h2>
              </div>
            </article>
          @endif
        @endwhile
      @else
        <div class="alert alert-warning">
          {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
        </div>
      @endif
      </section>
    
    </div>
    {{-- end grid --}}
  </div>

  <aside class="sidebar lg:w-1/4 landscape:w-1/4">
    @include('sections.sidebar')
  </aside>

</section>


