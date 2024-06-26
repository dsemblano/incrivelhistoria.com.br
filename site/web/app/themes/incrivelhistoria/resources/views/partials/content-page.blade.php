@if (! is_front_page())
<article class="prose lg:prose-xl border-b border-solid border-gray-400 pb-10 mb-10">
  @php(the_content())
</article>
@endif

@if ($pagination)
<nav class="page-nav" aria-label="Page">
  {!! $pagination !!}
</nav>
@endif