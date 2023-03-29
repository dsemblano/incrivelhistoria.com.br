@if ( is_category() || is_tag() || is_page('categorias') )

  <div class="page-header">
    <div class="heading-category container relative left-0 top-16 bg-white w-80 md:w-1/3 px-4 pb-4 text-center">
      <h1 class="text-red-700 font-bold text-4xl lg:text-6xl">{!! $title !!}</h1>
      <p class="category-description lg:text-xl my-4">
        {!! category_description() !!}
      </p>
    </div>
    @if (is_page('categorias'))
    <img src="@asset('images/bg/periodos-bg1920.webp')" alt="background image categoria" class="" />
    @else
    <img src="{{ get_taxonomy_image(get_queried_object()->term_id) }}" alt="Background imagem categoria {{get_queried_object()->name}}" style="width: 100%; height: 33rem; object-fit: cover;" class="imagecatbg w-full shadow-xl rounded-t-md wp-post-image">
    @endif  
  </div>

@endif