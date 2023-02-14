{{-- <div class="flex flex-col md:flex-row  bg-blue-400"> --}}
<div class="flex flex-col md:flex-row">
    {{-- <x-home-curiosidadeslistas class="mt-4 border-b border-solid border-gray-400 pb-12 lg:w-3/4 bg-yellow-300 lg:pr-4" /> --}}
    <x-home-curiosidadeslistas class="mt-4 border-b border-solid border-gray-400 pb-12 lg:w-3/4 lg:pr-8" />
    {{-- <aside class="sidebar md:w-1/4 bg-green-400"> --}}
    <aside class="sidebar md:w-1/4">
        @include('sections.sidebar')
    </aside>
</div>

<section id="all-categories" class="border-b border-solid border-gray-400 pb-12 mt-8">
    <x-page-allcategories />
</section>