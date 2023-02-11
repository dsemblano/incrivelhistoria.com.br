<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

  <main id="main" class="main {{ ! is_front_page() ? "container $current_page" : '' }}">
    @yield('content')
  </main>

  {{-- <aside class="sidebar flex-initial lg:w-1/4">
    @php(dynamic_sidebar('sidebar-primary'))
  </aside> --}}

@include('sections.footer')
