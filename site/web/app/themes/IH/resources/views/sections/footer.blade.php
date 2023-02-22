<footer class="content-info bg-orange-400">
  <div class="container bg-purple-500">
    @if (has_nav_menu('tertiary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'tertiary_navigation', 'menu_class' => 'sitemap-footer flex flex-col']) !!}
    @endif
    {!! get_search_form(false) !!}
    @include('partials.socialmedia')
  </div>
</footer>
