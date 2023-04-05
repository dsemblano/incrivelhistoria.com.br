
<div class="ml-4 mt-4">
  <div class="text-ihcor font-semibold dark:text-white p-author h-card"><span>{{ __('Por', 'sage') }}</span> {{ get_the_author() }}</div>
  <div class="mt-0.5 text-base leading-6 text-ihcor">
    <time class="dt-published" datetime="{{ get_post_time('c', true) }}">
      @if (get_the_date() != get_the_modified_date())
      <p><i class="fa-regular fa-calendar-days mr-2"></i> Atualizado em {{ get_the_modified_date() }}</p>
      @else
      <p><i class="fa-regular fa-calendar-days mr-2"></i> Publicado em {{ get_the_date() }} </p>
      @endif  
    </time>
  </div></div>