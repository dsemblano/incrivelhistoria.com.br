<section {{ $attributes }}>
    <span class="category-name mb-4">
      <strong>Destaques</strong>
    </span>
    <div class="flex flex-col">
      @php $destaques = destaques(); @endphp
      @if ($destaques->have_posts())
      @php $first_loop = true; @endphp
      @php $second_loop = false; @endphp
        @while ($destaques->have_posts()) @php $destaques->the_post() @endphp
        
        @if ($first_loop)
          <article class="flex flex-col lg:flex-row mb-4 border-default rounded bg-gray-70 hover:bg-gray-100 hover:rounded">
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

          @php $first_loop = false; @endphp
          @else
          {{-- segundo loop --}}
            @if ($second_loop == false)
            <div class="flex flex-col lg:flex-row segundoloop">
            @endif
          @php $second_loop = true; @endphp
          @if ($second_loop) 
            <article class="rounded bg-gray-70 hover:bg-gray-100 hover:rounded mb-2">
                <div class="p-4 flex flex-row gap-2">
                  <a class="w-1/2 md:w-full lg:w-1/2" href="{{ get_permalink() }}">
                    <figure class="imgpost">
                      {{ the_post_thumbnail('curiosidades_small', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
                    </figure>
                  </a>
                  <div class="w-1/2 md:w-full lg:w-1/2 pl-4">
                    <h2 class="text-lg md:text-base lg:text-lg font-bold">
                        <a class="postslinks" href="{{ get_permalink() }}">
                          {{ the_title() }}
                        </a>
                      </h2>
                      <p class="mb-3 excerpt">
                        <a class="postslinks" href="{{ get_permalink() }}">
                          {{ get_the_excerpt() }}
                        </a>
                      </p>
                  </div>
                </div>
              </article>          
          @endif
          @endif
        @endwhile
      @endif
    </div>
  </section>