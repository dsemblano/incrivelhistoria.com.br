<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

  @php $current_page = basename(get_permalink()) @endphp

  <div class="container">
    <div class="flex flex-col landscape:flex-row lg:flex-row mt-8 justify-between {{ ! is_front_page() ? "gap-4" : '' }}">
      <main id="main" class="main {{ ! is_front_page() ? "landscape:w-3/4" : '' }}">
        @yield('content')
      </main>
    
      @if (! is_front_page())
      <aside class="sidebar landscape:w-1/4 lg:w-1/4">
        @include('sections.sidebar')
      </aside>
      @endif
    </div>
  </div>

@include('sections.footer')
