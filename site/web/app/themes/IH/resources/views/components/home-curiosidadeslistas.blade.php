<section {{ $attributes }}>

  <div class="landscape:w-3/4 w-full md:pr-6 lg:pr-8">
    <section id="curiosidades-listas" class="w-full">
      <span class="category-name inline-block text-2xl mb-4 text-red-700">Curiosidades e Listas</span>
      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
        @php $category = postbycategory('curiosidades'); @endphp
        @if ($category->have_posts())
        @while ($category->have_posts()) @php $category->the_post() @endphp
        <article class="mb-8 h-auto">
          <a href="{{ get_permalink() }}">
            {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
          </a>
            <h2 class="text-lg my-2 font-bold">
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
        </article>
        @endwhile
        @else
        <div class="alert alert-warning">
          {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
        </div>
      </div>
      @endif
    </section>
    @include('partials.hrelement')
    
    {{-- Next grid --}}  
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 mt-6">
  
      {{-- Next category --}}
    
      <section id="historia-brasil" class="">
        <span class="category-name inline-block text-2xl mb-4 text-red-700">História do Brasil</span>

        @php $category = postbycategory('historia-do-brasil'); @endphp
        @if ($category->have_posts())
          @php $first_loop = true; @endphp
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-8">
            {{-- @php echo $first_loop; @endphp --}}
            @if ($first_loop)
              <a href="{{ get_permalink() }}">
                {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
              </a>

              <h2 class="text-lg my-2 font-bold">
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

            @php $first_loop = false; @endphp
              @else
              <h2 class="text-lg my-2 font-bold">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ the_title() }}
                </a>
              </h2>
            @endif
          </article>
          @endwhile
        @else
          <div class="alert alert-warning">
            {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
          </div>
        @endif

      </section>
    
      {{-- Next category --}}  
    
      <section id="direitos-humanos" class="">
        <span class="category-name inline-block text-2xl mb-4 text-red-700">Direitos Humanos</span>
        @php $category = postbycategory('direitos-humanos'); @endphp
        @if ($category->have_posts())
          @php $first_loop = true; @endphp
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-8">
            {{-- @php echo $first_loop; @endphp --}}
            @if ($first_loop)
              <a href="{{ get_permalink() }}">
                {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
              </a>

              <h2 class="text-lg my-2 font-bold">
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

            @php $first_loop = false; @endphp
              @else
              <h2 class="text-lg my-2 font-bold">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ the_title() }}
                </a>
              </h2>
            @endif
          </article>
          @endwhile
        @else
          <div class="alert alert-warning">
            {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
          </div>
        @endif
      </section>
  
      {{-- Next category --}}
  
      <section id="batalhas-historicas" class="">
        <span class="category-name inline-block text-2xl mb-4 text-red-700">Batalhas Históricas</span>
        @php $category = postbycategory('batalhas-historicas'); @endphp
        @if ($category->have_posts())
          @php $first_loop = true; @endphp
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-8">
            {{-- @php echo $first_loop; @endphp --}}
            @if ($first_loop)
              <a href="{{ get_permalink() }}">
                {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
              </a>

              <h2 class="text-lg my-2 font-bold">
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

            @php $first_loop = false; @endphp
              @else
              <h2 class="text-lg my-2 font-bold">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ the_title() }}
                </a>
              </h2>
            @endif
          </article>
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
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 mt-6">
  
      {{-- Next category --}}
      @php $category = postbycategory('crime-organizado'); @endphp
    
      <section id="crime-organizado" class="">
        <span class="category-name inline-block text-2xl mb-4 text-red-700">Crime Organizado</span>
        @php $category = postbycategory('crime-organizado'); @endphp
        @if ($category->have_posts())
          @php $first_loop = true; @endphp
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-8">
            {{-- @php echo $first_loop; @endphp --}}
            @if ($first_loop)
              <a href="{{ get_permalink() }}">
                {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
              </a>

              <h2 class="text-lg my-2 font-bold">
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

            @php $first_loop = false; @endphp
              @else
              <h2 class="text-lg my-2 font-bold">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ the_title() }}
                </a>
              </h2>
            @endif
          </article>
          @endwhile
        @else
          <div class="alert alert-warning">
            {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
          </div>
        @endif
      </section>
    
      {{-- Next category --}}
    
      <section id="guerras" class="">
        <span class="category-name inline-block text-2xl mb-4 text-red-700">Guerras</span>
        @php $category = postbycategory('guerras'); @endphp
        @if ($category->have_posts())
          @php $first_loop = true; @endphp
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-8">
            {{-- @php echo $first_loop; @endphp --}}
            @if ($first_loop)
              <a href="{{ get_permalink() }}">
                {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
              </a>

              <h2 class="text-lg my-2 font-bold">
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

            @php $first_loop = false; @endphp
              @else
              <h2 class="text-lg my-2 font-bold">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ the_title() }}
                </a>
              </h2>
            @endif
          </article>
          @endwhile
        @else
          <div class="alert alert-warning">
            {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
          </div>
        @endif
      </section>
  
      {{-- Next category --}}
  
      <section id="periodos" class="">
        <span class="category-name inline-block text-2xl mb-4 text-red-700">Períodos</span>
        @php $category = postbycategory('periodos'); @endphp
        @if ($category->have_posts())
          @php $first_loop = true; @endphp
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-8">
            {{-- @php echo $first_loop; @endphp --}}
            @if ($first_loop)
              <a href="{{ get_permalink() }}">
                {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
              </a>

              <h2 class="text-lg my-2 font-bold">
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

            @php $first_loop = false; @endphp
              @else
              <h2 class="text-lg my-2 font-bold">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ the_title() }}
                </a>
              </h2>
            @endif
          </article>
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


