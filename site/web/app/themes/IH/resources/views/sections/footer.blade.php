<footer class="content-info bg-gray-800 text-white">
  <div class="container">
    
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'sitemap-footer pt-8 text-white flex flex-col py-2 text-black tracking-widest w-full justify-evenly
          xl:flex-row xl:mt-0 nav text-lg relative']) !!}
    
    <div class="iconssocialmedia flex lg:flex-row justify-around content-around">
      <div class="w-1/2 md:pr-6 lg:pr-8 ">
        {!! get_search_form(false) !!}
      </div>

      <div class="w-1/2">
        {{-- @include('partials.socialmedia') --}}
      </div>    
    </div>
  </div>
</footer>
