<header id="header" class="banner sticky top-0 left-0 header-home w-full bg-white z-50 py-2 pt-4 text-gray-800">

  <nav class="nav-primary h-full pb-2 border-gray-300 border-b border-solid shadow-md h-">
    <div class="container">

      <div class="flex flex-wrap xl:flex-nowrap justify-between items-center mx-auto">

        @if ( is_home() || is_front_page() )
        <h1 id="logo" class=logo>
          <picture class="logos-header order-2 xl:order-1">
            @include('partials/logo')
          </picture>
        </h1>
        @else
        <picture class="logos-header order-2 xl:order-1">
          @include('partials/logo')
        </picture>
        @endif

        {{-- menu mobile --}}
        <div id="mobile-menu" class="flex flex-wrap order-3 ml-8 xl:hidden">
          <button id="button-search" aria-label="Botão busca" type="button" data-collapse-toggle="mobile-menu-3"
            aria-controls="mobile-menu-3" aria-expanded="false"
            class="xl:hidden text-gray-500 focus:outline-none focus:ring-4 focus:ring-gray-200 rounded-lg text-sm p-2.5 mr-1">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd"></path>
            </svg>
          </button>

          <button id="button-sandwich" aria-label="Botão menu sanduíche" data-collapse-toggle="mobile-menu-3"
            type="button" class="inline-flex items-center p-2 text-sm text-ihcor rounded-lg xl:hidden"
            aria-controls="mobile-menu-3" aria-expanded="false">
            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
            <svg class="hidden w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>

        {{-- menu desktop e ativa menu --}}
        <div class="hidden justify-between items-center w-full order-4 xl:flex xl:order-2" id="mobile-menu-3">
          <div class="relative mt-3 xl:hidden">
            @include('partials/inputsearch')
          </div>
          {!! wp_nav_menu(['theme_location' => 'second_navigation', 'container' => 'ul', 'menu_class' =>
          'pagemenumobile
          leading-loose text-base xl:hidden flex flex-col py-2 text-ihcor py-4 border-gray-200 border-b
          border-solid'])
          !!}

          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu mt-4 grid grid-cols-2 gap-3
          lg:flex lg:flex-col lg:py-4 text-ihcor lg:w-full justify-evenly
          xl:flex-row xl:mt-0 nav text-base relative' ]) !!}

          <div class="social-icons mt-8 pt-4 border-t border-solid border-gray-200 lg:hidden">
            @include('partials/socialsiga')
          </div>

        </div>

      </div>
      <div id="menupages" class="mt-3 container">
        <div class="flex flex-row justify-end">

          {!! wp_nav_menu(['theme_location' => 'second_navigation', 'container' => 'ul', 'menu_class' =>
          'pagemenudesktop text-base flex flex-col py-2 text-ihcor w-full justify-evenly
          xl:flex-row xl:mt-0 relative']) !!}

          <div class="relative">
            @include('partials/inputsearch')
          </div>
        </div>
      </div>
      {{-- fim --}}

  </nav>

</header>

{{-- <div id="search-desktop" class="container bg-yellow-400 w-1/3 hidden relative xl:block xl:bottom-12">
  @include('partials/inputsearch')
</div> --}}