@php
    $array = [
    'category__not_in' => '24, 52',
    'post_type'=>'post',
    'post_status'=>'publish',
    'posts_per_page'=>1,
    ];

    $slideshow = new \WP_Query($array);
@endphp

<section id="carousel" class="main-carousel h-96" data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true, "lazyLoad": true, "setGallerySize": false, "autoPlay": true, "dragThreshold": 20 }'>
    @if ($slideshow->have_posts())
      @while ($slideshow->have_posts()) @php $slideshow->the_post() @endphp
          <div class="carousel-cell">
              <a class="no-underline hover:underline" href="{{ get_permalink() }}">
                {{ the_post_thumbnail() }}
                <header>
                  <h2>{{ the_title() }}</h2>
                  {{-- <p>{{ FrontPage::slideshowExcerpt() }}</p> --}}
                </header>
              </a>
          </div>
      @endwhile
    @else
      <div class="alert alert-warning">
        {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
      </div>
    @endif
  
  </section>
  