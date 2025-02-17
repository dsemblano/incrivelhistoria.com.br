<div class="flex flex-col lg:flex-row items-center author py-2">
  <figure class="lg:w-1/5">
    <figcaption class="">
      {{-- {!! get_avatar( get_the_author_meta('ID'), 64, '', 'avatar', array('class' => 'rounded-full !m-0') ); !!} --}}
      <img src="@asset('images/Eudes-Bezerra.webp')" alt="Autor Eudes Bezerra" class="rounded-full" />
  </figure>
  <div class="text-ihcat p-author h-card lg:w-4/5">
    <div class="inline-block text-center">
      {{ __('Autor: ', 'sage') }}<span class="font-bold">{{ get_the_author() }}</span>
      <p class="author-bio text-ihcinza text-sm text-center">
        @php
        echo get_the_author_meta('description');
        @endphp
      </p>
    </div>
  </div>
</div>

{{-- <time class="dt-published" datetime="{{ get_post_time('c', true) }}">
  {{ get_the_date() }}
</time> --}}

{{-- <p>
  <span>{{ __('By', 'sage') }}</span>
  <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" class="p-author h-card">
    {{ get_the_author() }}
  </a>
</p> --}}