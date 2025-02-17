<div class="text-base leading-6 text-gray-600">
    <time class="dt-published text-sm" datetime="{{ get_post_time('c', true) }}">
      @if ( get_the_modified_time( 'U' ) > get_the_time( 'U' ) )
      <span>Matéria criada em {{ the_time('j F Y') }}<br></span>
      <span>Atualizada em {{ the_modified_time('j F Y') }}</span>
      @else
      <span>Matéria criada em {{ the_time('j F Y') }} </span>
      @endif
    </time>
  </div>