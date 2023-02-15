@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
  @endwhile
  {{-- <aside class="sidebar md:w-1/4">
    @include('sections.sidebar')
  </aside> --}}
@endsection

