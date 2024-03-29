{{--
  Template Name: All categories Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <section id="all-categories" class="md:my-12 md:pt-8">
      <div class="container">
        <x-page-allcategories />
      </div>
    </section>
  @endwhile
@endsection
