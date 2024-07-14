<div class="flex flex-row items-center author mb-4">
  <figure class="!m-0">
    <figcaption class="flex items-center !mt-0">
      {!! get_avatar( get_the_author_meta('ID'), 64, '', 'avatar', array('class' => 'rounded-full !m-0') ); !!}
  </figure>
  <div class="text-ihcinza p-author h-card inline-block ml-4">
    <div class="inline-block">
      {{ __('Autor: ', 'sage') }}<span class="font-bold">{{ get_the_author() }}</span>
    </div>

    <div class="text-base leading-6 text-gray-600">
      <time class="dt-published text-sm" datetime="{{ get_post_time('c', true) }}">
        @if ( get_the_modified_date() > get_the_date() )
        <span>Matéria criada em {{ get_the_date() }}<br></span>
        <span>Atualizada em {{ get_the_modified_date() }}</span>
        @else
        <span>Matéria criada em {{ get_the_date() }} </span>
        @endif
      </time>
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