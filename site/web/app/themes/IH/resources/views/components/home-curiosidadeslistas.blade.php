<section {{ $attributes }}>

  <div class="landscape:w-3/4 w-full md:pr-6 lg:pr-8">
    <section id="curiosidades-listas" class="w-full">
      <span class="category-name inline-block text-2xl mb-4 text-red-700">Curiosidades e Listas</span>
      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
        @php $category = postbycategory('curiosidades'); @endphp
        @if ($category->have_posts())
        @while ($category->have_posts()) @php $category->the_post() @endphp
        <article class="mb-5 md:mb-12 md:h-48">
          <a href="{{ get_permalink() }}">
            {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
          </a>
            <h2 class="text-lg my-2">
              <a class="postslinks" href="{{ get_permalink() }}">
                {{ the_title() }}
              </a>
            </h2>
            <div class="timeread flex flex-row">
              <x-heroicon-o-arrow-left class="h-5 w-5 relative right-1 top-px" />
              {!! do_shortcode('[rt_reading_time label="Leitura:" postfix="minutos" postfix_singular="minuto"]') !!}
              teste
            </div>
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
      @php $category = postbycategory('historia-do-brasil'); @endphp
    
      <section id="historia-brasil" class="">
        <span class="category-name inline-block text-2xl mb-4 text-red-700">História do Brasil</span>
          @if ($category->have_posts())
          @php $first_loop = true; @endphp
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-5">
            {{-- @php echo $first_loop; @endphp --}}
            @if ($first_loop)
              <a href="{{ get_permalink() }}">
                {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
              </a>
              @php $first_loop = false; @endphp
            @endif
              <h2 class="text-lg my-2">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ the_title() }}
                </a>
          </article>
          @endwhile
          @else
          <div class="alert alert-warning">
            {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
          </div>
        @endif
      </section>
    
      {{-- Next category --}}  
      @php $category = postbycategory('direitos-humanos'); @endphp
    
      <section id="direitos-humanos" class="">
        <span class="category-name inline-block text-2xl mb-4 text-red-700">Direitos Humanos</span>
        @if ($category->have_posts())
        @php $first_loop = true; @endphp
        @while ($category->have_posts()) @php $category->the_post() @endphp
        <article class="mb-5">
          {{-- @php echo $first_loop; @endphp --}}
          @if ($first_loop)
            <a href="{{ get_permalink() }}">
              {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
            </a>
            @php $first_loop = false; @endphp
          @endif
            <h2 class="text-lg my-2">
              <a class="postslinks" href="{{ get_permalink() }}">
                {{ the_title() }}
              </a>
        </article>
        @endwhile
          @else
          <div class="alert alert-warning">
            {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
          </div>
        @endif
      </section>
  
      {{-- Next category --}}
      @php $category = postbycategory('batalhas-historicas'); @endphp
  
      <section id="batalhas-historicas" class="">
        <span class="category-name inline-block text-2xl mb-4 text-red-700">Batalhas Históricas</span>
        @if ($category->have_posts())
        @php $first_loop = true; @endphp
        @while ($category->have_posts()) @php $category->the_post() @endphp
        <article class="mb-5">
          {{-- @php echo $first_loop; @endphp --}}
          @if ($first_loop)
            <a href="{{ get_permalink() }}">
              {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
            </a>
            @php $first_loop = false; @endphp
          @endif
            <h2 class="text-lg my-2">
              <a class="postslinks" href="{{ get_permalink() }}">
                {{ the_title() }}
              </a>
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
    
      <section id="historia-brasil" class="">
        <span class="category-name inline-block text-2xl mb-4 text-red-700">Crime Organizado</span>
        @if ($category->have_posts())
        @php $first_loop = true; @endphp
        @while ($category->have_posts()) @php $category->the_post() @endphp
        <article class="mb-5">
          {{-- @php echo $first_loop; @endphp --}}
          @if ($first_loop)
            <a href="{{ get_permalink() }}">
              {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
            </a>
            @php $first_loop = false; @endphp
          @endif
            <h2 class="text-lg my-2">
              <a class="postslinks" href="{{ get_permalink() }}">
                {{ the_title() }}
              </a>
        </article>
        @endwhile
          @else
          <div class="alert alert-warning">
            {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
          </div>
        @endif
      </section>
    
      {{-- Next category --}}    
      @php $category = postbycategory('guerras'); @endphp
    
      <section id="direitos-humanos" class="">
        <span class="category-name inline-block text-2xl mb-4 text-red-700">Guerras</span>
        @if ($category->have_posts())
        @php $first_loop = true; @endphp
        @while ($category->have_posts()) @php $category->the_post() @endphp
        <article class="mb-5">
          {{-- @php echo $first_loop; @endphp --}}
          @if ($first_loop)
            <a href="{{ get_permalink() }}">
              {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
            </a>
            @php $first_loop = false; @endphp
          @endif
            <h2 class="text-lg my-2">
              <a class="postslinks" href="{{ get_permalink() }}">
                {{ the_title() }}
              </a>
        </article>
        @endwhile
          @else
          <div class="alert alert-warning">
            {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
          </div>
        @endif
      </section>
  
      {{-- Next category --}}  
      @php $category = postbycategory('batalhas-historicas'); @endphp
  
      <section id="periodos" class="">
        <span class="category-name inline-block text-2xl mb-4 text-red-700">Períodos</span>
        @if ($category->have_posts())
        @php $first_loop = true; @endphp
        @while ($category->have_posts()) @php $category->the_post() @endphp
        <article class="mb-5">
          {{-- @php echo $first_loop; @endphp --}}
          @if ($first_loop)
            <a href="{{ get_permalink() }}">
              {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
            </a>
            @php $first_loop = false; @endphp
          @endif
            <h2 class="text-lg my-2">
              <a class="postslinks" href="{{ get_permalink() }}">
                {{ the_title() }}
              </a>
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


