<div class="flex flex-col items-center author">
  <div class="text-ihcor dark:text-white p-author h-card"><span>{{ __('Escrito por', 'sage') }}</span></div>
  <figure class="!m-0">
    <figcaption class="flex items-center !mt-0">
      {!! get_avatar( get_the_author_meta('ID'), 128, '', 'avatar', array('class' => 'rounded-full !m-0') ); !!}
  </figure>
  <span class="font-semibold p-author mt-4">{{ get_the_author() }}</span>

  <div class="mt-0.5 text-base leading-6 text-gray-600">
    <time class="dt-published" datetime="{{ get_post_time('c', true) }}">
      @if (get_the_date() != get_the_modified_date())
      <p><i class="fa-regular fa-calendar-days mr-2"></i> Atualizado em {{ get_the_modified_date() }}</p>
      @else
      <p><i class="fa-regular fa-calendar-days mr-2"></i> Publicado em {{ get_the_date() }} </p>
      @endif
    </time>
  </div>
</div>