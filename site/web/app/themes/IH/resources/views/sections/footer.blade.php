<footer class="content-info bg-ihcor text-white pb-12">
  <div class="container">

    {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'py-8 sitemap-footer text-white flex flex-col tracking-widest w-full justify-evenly
    xl:flex-row nav text-sm relative']) !!}

    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'py-8 sitemap-footer text-white flex flex-col tracking-widest w-full justify-evenly
    xl:flex-row nav text-sm relative']) !!}


    <div class="flex flex-col md:flex-row justify-between items-center py-8 border-gray-500 border-t border-solid ">
      <picture class="logos-header order-1 mb-4">
        @include('partials/logo')
      </picture>
      

        <section id="social-icons" class="footer-right flex flex-col mt-8 md:mt-0 order-2">
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

    <div class="mt-4 flex flex-row justify-center copyright border-gray-500 border-t border-solid pt-8">
      <p>© {{date("Y")}} Incrível História. Todos os direitos reservados</p>
      @include('partials/logoih')</div>

  </div>
</footer>
