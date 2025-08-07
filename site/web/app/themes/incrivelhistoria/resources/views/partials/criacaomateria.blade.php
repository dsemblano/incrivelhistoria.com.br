<div class="text-base leading-6 text-gray-600">
    <time class="dt-published text-sm" datetime="{{ get_post_time('c', true) }}">
      <span>Postado em {{ the_time('j F Y') }}<br></span>
      @if ( get_the_modified_time( 'U' ) > get_the_time( 'U' ) )
        <span>Atualizado em {{ the_modified_time('j F Y') }}</span>
      @endif
    </time>
  </div>