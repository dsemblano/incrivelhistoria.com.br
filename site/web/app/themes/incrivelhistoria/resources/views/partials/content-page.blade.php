@if (! is_front_page())
<article class="prose lg:prose-xl border-b border-solid border-gray-400 pb-10 mb-10">
    @php(the_content())
</article>
@endif


{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
