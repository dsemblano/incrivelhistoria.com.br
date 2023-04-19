<div class="flex flex-row items-center author mb-4">
  <figure class="!m-0">
    <figcaption class="flex items-center !mt-0">
      {!! get_avatar( get_the_author_meta('ID'), 64, '', 'avatar', array('class' => 'rounded-full !m-0') ); !!}
  </figure>
  <div class="text-ihcor dark:text-white p-author h-card inline-block ml-4">
    <span>{{ __('Escrito por', 'sage') }}</span>
  <span class="font-semibold p-author mt-4">{{ get_the_author() }}</span>

  <div class="text-base leading-6 text-gray-600">
    <time class="dt-published" datetime="{{ get_post_time('c', true) }}">
      @if (get_the_date() != get_the_modified_date())
      <span>Atualizado em {{ get_the_modified_date() }}</span>
      @else
      <span>Publicado em {{ get_the_date() }} </span>
      @endif
    </time>
  </div>
</div>
</div>