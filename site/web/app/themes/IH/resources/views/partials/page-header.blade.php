@if ( is_category() || is_tag() )

  <div class="page-header">
    <div class="heading-category container relative left-0 top-16 bg-white w-80 md:w-1/3 px-4 pb-4 text-center">
      <h1 class="text-red-700 font-bold text-4xl lg:text-6xl">{!! $title !!}</h1>
      <p class="category-description lg:text-xl my-4">
        {!! category_description() !!}
      </p>
    </div>
    <img src="@asset('images/bg/periodos-bg1920.webp')" alt="background image categoria" class="" />
  </div>

@endif