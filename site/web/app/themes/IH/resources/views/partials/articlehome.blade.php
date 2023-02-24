@php $category = postbycategory('historia-do-brasil'); @endphp
        @if ($category->have_posts())
          @php $first_loop = true; @endphp
          @while ($category->have_posts()) @php $category->the_post() @endphp
          <article class="mb-5">
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