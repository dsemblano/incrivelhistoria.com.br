<section {{ $attributes }}>
    <span class="category-name mb-4">
      <strong>Destaques</strong>
    </span>
    <div class="flex flex-col">
      @php $destaques = destaques(); @endphp
      @if ($destaques->have_posts())
        @while ($destaques->have_posts()) @php $destaques->the_post() @endphp
        <div class="top flex flex-col lg:flex-row mb-6">
          <article class="flex flex-col lg:flex-row border-default rounded bg-gray-70 hover:bg-gray-100 hover:rounded">
          
            <div class="left w-full lg:w-2/3 h-full">
              <a href="{{ get_permalink() }}">
                <figure class="imgpost">
                  {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full h-full rounded-t-md xl:rounded-tr-none rounded-tl-md' ) ) }}
                </figure>
              </a>
            </div>
            
            <div class="right flex-row w-full lg:w-1/3 p-4">
              <h2 class="text-2xl md:text-3xl lg:text-2xl mb-2 font-bold">
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
        @endwhile
      @endif
    </div>
  </section>