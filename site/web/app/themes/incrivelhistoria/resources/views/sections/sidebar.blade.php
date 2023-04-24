<div class="lg:hidden">
    @include('partials.hrelement')
</div>
@include('partials.popularposts')
@include('partials.hrelement')
@include('partials.lastposts')
@include('partials.hrelement')

{{-- for tags widget --}}
@php(dynamic_sidebar('sidebar-primary'))    