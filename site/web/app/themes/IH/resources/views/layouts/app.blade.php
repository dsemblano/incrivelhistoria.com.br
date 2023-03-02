<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

  @php $current_page = basename(get_permalink()) @endphp

  <div class="{{ ! is_single() && ! is_category() && ! is_tag() ? "container" : "single" }}">

    <div class="{{ ! is_single() && ! is_category() && ! is_tag() ? "flex flex-col landscape:flex-row lg:flex-row mt-8 justify-between gap-4" : "singleclass"}}">

      <main id="main" class="main {{ (! is_front_page() && ! is_single() && ! is_category() && ! is_tag()) ? "landscape:w-3/4" : '' }}">
        @yield('content')
      </main>
    
      @if (! is_front_page() && ! is_single() && ! is_category() && ! is_tag())
      <aside class="sidebar landscape:w-1/4 lg:w-1/4 h-">
        @include('sections.sidebar')
      </aside>
      @endif
    </div>
  </div>

@include('sections.footer')
