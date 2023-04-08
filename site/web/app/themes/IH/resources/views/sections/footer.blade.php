<footer class="content-info bg-ihcor text-white pb-12">
  <div class="container">
    
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'border-gray-500 border-b border-solid py-8 sitemap-footer text-white flex flex-col tracking-widest w-full justify-evenly
          xl:flex-row nav text-sm relative']) !!}

    <div class="flex flex-col md:flex-row justify-between py-8">
      <div class="formfooter">
        <h3 class="text-xl">Email: <a class="hover:underline" href="mailto:contato@incrivelhistoria.com.br">contato@incrivelhistoria.com.br</a></h3>

        {{-- {!! do_shortcode('[contact-form-7 id="18361" title="Contato"]') !!} --}}
      </div>
      
      <div class="footer-right flex flex-col mt-8 md:mt-0">
        
        <div class="relative">
          @include('partials/inputsearch')
        </div>
        
        <div class="social-icons flex flex-row justify-around text-3xl mt-8">
          <a href="https://www.instagram.com/incrivelhistoria/" target="_blank"><i class="fa-brands fa-instagram transform hover:scale-125 transition duration-300 ease-in-out"></i></a>
          <a href="https://www.facebook.com/incrivel.historia" target="_blank"><i class="fa-brands fa-facebook transform hover:scale-125 transition duration-300 ease-in-out"></i></a>
          <a href="https://www.youtube.com/@incrivelhistoriaoficial/" target="_blank"><i class="fa-brands fa-youtube transform hover:scale-125 transition duration-300 ease-in-out"></i></a>      
        </div>
        
      </div>
    </div>

    <p class="mt-4 text-center copyright border-gray-500 border-t border-solid pt-8">{{date("Y")}} Incrivel História © Todos os direitos reservados</p>

  </div>
</footer>
