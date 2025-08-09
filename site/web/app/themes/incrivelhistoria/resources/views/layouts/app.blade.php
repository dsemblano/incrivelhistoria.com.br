<!doctype html>
<html @php(language_attributes())>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @php(do_action('get_header'))
  @php(wp_head())
  <?php echo \Roots\view('partials/gtaghead')->render(); ?>
  <link rel="author" type="text/plain" href="{{ asset('humans.txt') }}" />
  <?php echo \Roots\view('partials/favicon')->render(); ?>
</head>

{{--d

<body @php(body_class())> --}}

  <body @php(body_class())>
    @php(wp_body_open())
    <?php echo \Roots\view('partials/gtagbody')->render(); ?>

    <div id="app">
      <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content') }}
      </a>

      @include('sections.header')
      <div class="{{ (is_single() || is_category() || is_tag() || is_page('categorias')) ? "" : " container" }}">
        <main id=" main" class="main {{ is_front_page() ? " pt-6" : "" }}">
          @yield('content')
        </main>

        @if (is_search() || is_404())
        @hasSection('sidebar')
        <aside class="sidebar landscape:w-1/4 lg:w-1/4 h-">
          @yield('sidebar')
        </aside>
        @endif
        </aside>
        @endif
      </div>
      @include('sections.footer')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>

</html>