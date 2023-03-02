@if (! is_front_page())
<div class="page-header text-red-700">
  <img src="@asset('images/bg/periodos-bg.webp')" alt="background image categoria" class="" />
  <h1>{!! $title !!}</h1>
</div>
@endif