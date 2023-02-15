<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

  @php $current_page = basename(get_permalink()) @endphp

  <div class="flex flex-col md:flex-row mt-8 {{ ! is_front_page() ? "$current_page" : 'home' }} container mx-auto">
    <main id="main" class="main">
      @yield('content')
    </main>
  
    @if (! is_front_page())
    <aside class="sidebar">
      @include('sections.sidebar')
    </aside>
    @endif
  </div>

@include('sections.footer')
