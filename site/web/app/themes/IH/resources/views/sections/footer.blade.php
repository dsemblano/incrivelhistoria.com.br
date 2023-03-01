<footer class="content-info bg-gray-800 text-white pb-12">
  <div class="container">
    
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'sitemap-footer pt-8 text-white flex flex-col py-2 tracking-widest w-full justify-evenly
          xl:flex-row xl:mt-0 nav text-lg relative']) !!}
    
    <div class="iconssocialmedia flex lg:flex-row justify-around content-around">

      <div class="w-1/2">
        {{-- @include('partials.socialmedia') --}}
      </div>    
    </div>
    <div class="flex flex-row justify-end mt-4">
      <div class="relative">
        @include('partials/inputsearch')
      </div>
    </div>
  </div>
</footer>
