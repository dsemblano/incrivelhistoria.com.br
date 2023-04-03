<footer class="content-info bg-ihcor text-white pb-12">
  <div class="container">
    
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'sitemap-footer pt-8 text-white flex flex-col py-2 tracking-widest w-full justify-evenly
          xl:flex-row xl:mt-0 nav text-lg relative']) !!}

    <div class="flex flex-col md:flex-row justify-between mt-4">
      <div class="formfooter">
        <h3 class="text-2xl">Contato</h3>
        {!! do_shortcode('[contact-form-7 id="18361" title="Contato"]') !!}
      </div>
      
      <div class="footer-right flex flex-col">
        
        <div class="relative">
          @include('partials/inputsearch')
        </div>
        
        <div class="social-icons flex flex-row justify-around text-3xl mt-4">
          <a href="https://www.instagram.com/incrivelhistoria/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.facebook.com/incrivel.historia" target="_blank"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://www.youtube.com/@incrivelhistoriaoficial/" target="_blank"><i class="fa-brands fa-youtube"></i></a>      
        </div>
        
      </div>
    </div>

  </div>
</footer>
