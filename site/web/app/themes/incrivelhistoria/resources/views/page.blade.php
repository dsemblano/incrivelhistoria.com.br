@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())
<section id="{{ basename(get_permalink()) }}-page" class="pages">
  @include('partials.page-header')
  @includeFirst(['partials.content-page', 'partials.content'])
</section>
@endwhile
@endsection