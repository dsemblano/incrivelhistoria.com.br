<footer class="content-info bg-orange-400">
  <div class="container bg-purple-500">
    
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'sitemap-footer flex flex-col py-2 text-black tracking-widest w-full justify-evenly
          xl:flex-row xl:mt-0 nav text-lg relative']) !!}
    
    <div class="iconssocialmedia bg-red-500 flex lg:flex-row justify-around content-around">
      <div class="w-1/2 md:pr-6 lg:pr-8 bg-green-600">
        {!! get_search_form(false) !!}
      </div>

      <div class="w-1/2 bg-green-200">
        @include('partials.socialmedia')
      </div>    
    </div>
  </div>
</footer>
