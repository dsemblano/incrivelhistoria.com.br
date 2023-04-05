<p>
  <picture>
    <?php echo get_the_author_meta('display_name', "eudes"); ?> 
  </picture>
  <span>{{ __('Por', 'sage') }}</span>
  <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" class="p-author h-card">
    {{ get_the_author() }}
  </a>
</p>

<time class="dt-published" datetime="{{ get_post_time('c', true) }}">
  @if (get_the_date() != get_the_modified_date())
  <p><i class="fa-regular fa-calendar-days mr-2"></i> Atualizado em {{ get_the_modified_date() }}</p>
  @else
  <p><i class="fa-regular fa-calendar-days mr-2"></i> Publicado em {{ get_the_date() }} </p>
  @endif  
</time>
