@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Nenhum resultado encontrado.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  <section class="gap-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-5 w-full md:pr-6 lg:pr-8">
    @while(have_posts()) @php(the_post())
        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    @endwhile
  </section>

  {{-- {!! get_the_posts_navigation() !!} --}}
  {!! get_the_posts_pagination(array('prev_text' => '« Anterior' , 'next_text' => 'Próximo »' )) !!}
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection