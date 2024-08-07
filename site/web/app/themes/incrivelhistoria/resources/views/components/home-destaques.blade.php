<section {{ $attributes }}>
  <span class="category-name mb-4">Destaques</span>
  <div class="flex flex-col">
    @php $destaques = destaques(); @endphp
    @if ($destaques->have_posts())
    @php $first_loop = true; @endphp
    @php $second_loop = false; @endphp
    @while ($destaques->have_posts()) @php $destaques->the_post() @endphp

    @if ($first_loop)
    <article class="flex flex-col lg:flex-row mb-4 card">
      <div class="left w-full lg:w-2/3 h-full">
        <a href="{{ get_permalink() }}">
          <figure class="imgpost">
            {{ the_post_thumbnail('slideshow', array( 'class' => 'w-full h-full rounded-t-md xl:rounded-tr-none
            rounded-tl-md' ) ) }}
          </figure>
        </a>
      </div>

      <div class="right flex-row w-full lg:w-1/3 p-4">
        <h2 class="text-3xl mb-2">
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
    <div class="flex flex-col lg:flex-row segundoloop mt-4">
      @endif
      @php $second_loop = true; @endphp
      @if ($second_loop)
      <article class="rounded bg-gray-70 hover:bg-gray-100 hover:rounded mb-6 p-4 md:p-0">
        {{-- inicio mobile --}}
        <div class="flex flex-row justify-between gap-x-4 md:hidden">
          <a class="w-1/2" href="{{ get_permalink() }}">
            <figure class="imgpost">
              {{ the_post_thumbnail('curiosidades_small', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
            </figure>
          </a>
          <h2 class="text-xl mb-2 w-1/2">
            <a class="postslinks" href="{{ get_permalink() }}">
              {{ the_title() }}
            </a>
          </h2>
        </div>
        <p class="block md:hidden mt-2 excerpt">
          <a class="postslinks" href="{{ get_permalink() }}">
            {{ get_the_excerpt() }}
          </a>
        </p>
        {{-- fim mobile --}}

        <div class="hidden md:flex p-4 flex-row">
          <a class="w-1/2 md:w-full lg:w-1/2" href="{{ get_permalink() }}">
            <figure class="imgpost">
              {{ the_post_thumbnail('curiosidades_small', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
            </figure>
          </a>
          <div class="w-1/2 md:w-full lg:w-1/2 pl-4">
            <h2 class="text-xl mb-2">
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