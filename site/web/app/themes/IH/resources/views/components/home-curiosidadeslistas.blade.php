<section {{ $attributes }}>

  <div class="mt-4 border-b border-solid border-gray-400 pb-12 md:w-3/4 md:pr-6 lg:pr-8">
    <section id="curiosidades-listas" class="w-full">
      <h2 class="text-xl mb-4 text-red-700">Curiosidades e Listas</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
        @php $category = postbycategory('curiosidades'); @endphp
        @if ($category->have_posts())
        @while ($category->have_posts()) @php $category->the_post() @endphp
        <article class="mb-10 md:h-36 lg:h-48">
          <a href={{ the_permalink() }}>
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
        <h2 class="text-xl mb-4 text-red-700">História do Brasil</h2>
        <div class="">
          @if ($category->have_posts())
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-10 md:h-36 lg:h-48">
            <a href={{ the_permalink() }}>
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
    
      {{-- Next category --}}  
      @php $category = postbycategory('direitos-humanos'); @endphp
    
      <section id="direitos-humanos" class="">
        <h2 class="text-xl mb-4 text-red-700">Direitos Humanos</h2>
        <div class="">
          @if ($category->have_posts())
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-10 md:h-36 lg:h-48">
            <a href={{ the_permalink() }}>
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
  
      {{-- Next category --}}
      @php $category = postbycategory('batalhas-historicas'); @endphp
  
      <section id="batalhas-historicas" class="">
        <h2 class="text-xl mb-4 text-red-700">Batalhas Históricas</h2>
        <div class="">
          @if ($category->have_posts())
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-10 md:h-36 lg:h-48">
            <a href={{ the_permalink() }}>
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
    
    </div>
    {{-- end grid --}}
  
    {{-- Next grid --}}  
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 mt-6">
  
      {{-- Next category --}}
      @php $category = postbycategory('crime-organizado'); @endphp
    
      <section id="historia-brasil" class="">
        <h2 class="text-xl mb-4 text-red-700">Crime Organizado</h2>
        <div class="">
          @if ($category->have_posts())
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-10 md:h-36 lg:h-48">
            <a href={{ the_permalink() }}>
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
    
      {{-- Next category --}}    
      @php $category = postbycategory('guerras'); @endphp
    
      <section id="direitos-humanos" class="">
        <h2 class="text-xl mb-4 text-red-700">Guerras</h2>
        <div class="">
          @if ($category->have_posts())
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-10 md:h-36 lg:h-48">
            <a href={{ the_permalink() }}>
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
  
      {{-- Next category --}}  
      @php $category = postbycategory('batalhas-historicas'); @endphp
  
      <section id="periodos" class="">
        <h2 class="text-xl mb-4 text-red-700">Períodos</h2>
        <div class="">
          @if ($category->have_posts())
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-10 md:h-36 lg:h-48">
            <a href={{ the_permalink() }}>
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
    
    </div>
    {{-- end grid --}}
  </div>

  <aside class="sidebar md:w-1/4">
    @include('sections.sidebar')
  </aside>

</section>


