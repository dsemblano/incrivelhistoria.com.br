@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Nenhum resultado encontrado.', 'sage') !!}
    </x-alert>

    <div class="flex flex-row justify-start mt-4">
      <div class="relative">
        @include('partials/inputsearch')
      </div>
    </div>
    
  @endif

  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
