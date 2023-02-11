{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  <div class="container mx-auto">
    @include('partials.page-header')
    @include('partials.content-page')
    @include('partials.homeblocks')
  </div>
  @endwhile
@endsection
