@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @includeFirst(['partials.content-page', 'partials.content'])
    {{-- <aside class="sidebar md:w-1/4">
      @include('sections.sidebar')
    </aside> --}}
  @endwhile
@endsection
