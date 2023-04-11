<footer class="content-info bg-ihcor text-white pb-12">
  
  <div class="container">

    <div class="flex flex-col md:flex-row justify-between items-center py-8 mb-8 border-gray-500 border-b border-solid ">      

      <section id="social-icons" class="footer-right flex flex-col md:mt-8 order-2 mb-8">
        <h3 class="span-title text-center text-lg">Siga o Incrível História</h3>
        <ul aria-label="Siga o Incrível História" class="social-icons flex flex-row justify-around text-3xl mt-2">
          <li>
            <a href="https://www.instagram.com/incrivelhistoria/" target="_blank"><i class="fa-brands fa-instagram transform hover:scale-125 transition duration-300 ease-in-out"></i></a>
          </li>
          <li>
            <a href="https://www.facebook.com/incrivel.historia" target="_blank"><i class="fa-brands fa-facebook transform hover:scale-125 transition duration-300 ease-in-out"></i></a>  
          </li>
          <li>
            <a href="https://www.youtube.com/@incrivelhistoriaoficial/" target="_blank"><i class="fa-brands fa-youtube transform hover:scale-125 transition duration-300 ease-in-out"></i></a>                  
          </li>
        </ul>
      </section>        
      <div class="relative order-3">
        @include('partials/inputsearch')
      </div>

  </div>

  <div class="flex flex-col-reverse md:flex-row-reverse justify-end gap-6 md:items-center mb-6">
    {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'order-2 gap-2 md:gap-10 sitemap-footer text-white flex flex-col tracking-widest w-full
    xl:flex-row nav text-sm relative']) !!}

  </div>

    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'sitemap-footer text-white flex flex-col tracking-widest w-full justify-start
    xl:flex-row nav text-sm relative']) !!}

  <div class="text-sm mt-4 flex flex-col items-center copyright border-gray-500 border-t border-solid pt-8 gap-2">
    <p>© {{date("Y")}} Incrível História. Todos os direitos reservados</p>
    <a href="/">
      @include('partials/logoih')
    </a>
    
  </div>
    
  </div>
</footer>
