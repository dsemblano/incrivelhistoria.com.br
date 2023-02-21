@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
    {!! do_shortcode('[crp limit="4" heading="1" cache="1"]') !!}
  @endwhile
@endsection

