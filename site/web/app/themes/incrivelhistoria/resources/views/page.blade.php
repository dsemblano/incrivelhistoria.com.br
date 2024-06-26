@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())
<section class="gap-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-5 w-full lg:pr-8 mb-6">
  @include('partials.page-header')
  @includeFirst(['partials.content-page', 'partials.content'])
</section>
@endwhile
@endsection