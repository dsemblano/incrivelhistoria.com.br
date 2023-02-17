<section {{ $attributes }}>

  <div class="landscape:w-3/4 w-full md:pr-6 lg:pr-8">
    <section id="curiosidades-listas" class="w-full">
      <span class="category-name inline-block text-2xl mb-4 text-red-700">Curiosidades e Listas</span>
      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
        @php $category = postbycategory('curiosidades', 4); @endphp
        @if ($category->have_posts())
        @while ($category->have_posts()) @php $category->the_post() @endphp
        <article class="mb-5 md:h-36 lg:h-48">
          <a class="no-underline hover:underline" href="{{ get_permalink() }}">
            {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
            <h2 class="text-xl mt-2">{{ the_title() }}</h2>
          </a>
        </article>
        @endwhile
        @else
        <div class="alert alert-warning">
          {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
        </div>
      </div>
      @endif
    </section>
    
    {{-- Next grid --}}  
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 mt-6">
  
      {{-- Next category --}}
      @php $category = postbycategory('historia-do-brasil'); @endphp
    
      <section id="historia-brasil" class="">
        <span class="category-name inline-block text-2xl mb-4 text-red-700">História do Brasil</span>
          @if ($category->have_posts())
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-5 md:h-48 lg:h-56">
            <a class="no-underline hover:underline" href="{{ get_permalink() }}">
              {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
              <h2 class="text-xl mt-2">{{ the_title() }}</h2>
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
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-5 md:h-48 lg:h-56">
            <a class="no-underline hover:underline" href="{{ get_permalink() }}">
              {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
              <h2 class="text-xl mt-2">{{ the_title() }}</h2>
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
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-5 md:h-48 lg:h-56">
            <a class="no-underline hover:underline" href="{{ get_permalink() }}">
              {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
              <h2 class="text-xl mt-2">{{ the_title() }}</h2>
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
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-5 md:h-48 lg:h-56">
            <a class="no-underline hover:underline" href="{{ get_permalink() }}">
              {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
              <h2 class="text-xl mt-2">{{ the_title() }}</h2>
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
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-5 md:h-48 lg:h-56">
            <a class="no-underline hover:underline" href="{{ get_permalink() }}">
              {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
              <h2 class="text-xl mt-2">{{ the_title() }}</h2>
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
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-5 md:h-48 lg:h-56">
            <a class="no-underline hover:underline" href="{{ get_permalink() }}">
              {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full' ) ) }}
              <h2 class="text-xl mt-2">{{ the_title() }}</h2>
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


