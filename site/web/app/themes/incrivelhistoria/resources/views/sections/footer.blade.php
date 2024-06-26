<footer class="content-info bg-ihcor text-ihcompl pb-12">
    @php(dynamic_sidebar('sidebar-footer'))
  <div class="container">

    <div class="flex flex-col md:flex-row justify-between items-center text-ihcompl py-8 mb-8 border-gray-500 border-b border-solid ">      
      
      <section id="social-icons" class="footer-right flex flex-col md:mt-8 order-2 mb-8">
        @include('partials/socialsiga')
      </section>
      <div class="relative order-3">
        @include('partials/inputsearch')
      </div>

  </div>

  {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'flex flex-row mb-8 justify-between lg:justify-start order-2 gap-2 md:gap-10 sitemap-footer text-ihcompl tracking-widest w-full
    nav text-sm relative']) !!}

    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'sitemap-footer gap-6 text-ihcompl grid grid-cols-2 gap-3 lg:flex lg:flex-col tracking-widest w-full justify-start
    xl:flex-row nav text-sm relative']) !!}

  <div class="text-sm mt-4 flex flex-col items-center copyright border-gray-500 border-t border-solid pt-8 gap-2">
    <p>© 2017 - {{date("Y")}} Incrível História<span class="sup align-text-bottom">&reg;</span></p>
    {{-- <a href="/">
      @include('partials/logoih')
    </a> --}}
    
  </div>
    
  </div>
</footer>
@include('partials/arrowcdtop')
