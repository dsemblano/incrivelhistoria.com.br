@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Página não encontrada!.', 'sage') !!}
    </x-alert>

    <div class="flex flex-row justify-start mt-4">
      <div class="relative">
        @include('partials/inputsearch')
      </div>
    </div>
    
  @endif
@endsection
