<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

  @php $current_page = basename(get_permalink()) @endphp

  <div class="container portrait:bg-yellow-400 landscape:bg-purple-500">
    <div class="flex flex-col landscape:flex-row md:flex-row mt-8 justify-between">
      <main id="main" class="main {{ ! is_front_page() ? "landscape:w-3/4" : '' }} landscape:bg-orange-500">
        @yield('content')
      </main>
    
      @if (! is_front_page())
      <aside class="sidebar landscape:w-1/4 lg:w-1/4 landscape:bg-pink-300">
        @include('sections.sidebar')
      </aside>
      @endif
    </div>
  </div>

@include('sections.footer')
