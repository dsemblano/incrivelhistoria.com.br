    <section {{ $attributes }}>
      <span class="category-name mb-4">
        <strong>@php echo caturl('curiosidades') @endphp</strong>
      </span>
      <div class="flex flex-col">

        @php $category = postbycategory('curiosidades'); @endphp
        @php $first_loop = true; @endphp
        @php $second_loop = false; @endphp
        @if ($category->have_posts())
        @while ($category->have_posts()) @php $category->the_post() @endphp
        @if ($first_loop)

        <div class="top flex flex-col lg:flex-row mb-6">
          <article class="flex flex-col lg:flex-row border-default rounded bg-gray-70 hover:bg-gray-100 hover:rounded">
          
            <div class="left w-full lg:w-2/3 h-full">
              <a href="{{ get_permalink() }}">
                <figure class="imgpost">
                  {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full h-full rounded-t-md xl:rounded-tr-none rounded-tl-md' ) ) }}
                </figure>
              </a>
            </div>
            
            <div class="right flex-row w-full lg:w-1/3 p-4">
              <h2 class="text-2xl md:text-3xl lg:text-2xl mb-2">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ the_title() }}
                </a>
              </h2>
              </p>

              
              <p class="mb-3 excerpt">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ get_the_excerpt() }}
                </a>
              </p>
              @include('partials.readingtime')
            </div>
          </article>
        </div>
        <div class="bottom flex flex-col md:flex-row md:gap-8">
          @php $first_loop = false; @endphp
          @else
          {{-- segundo loop --}}
            @if ($second_loop == false)
            <div class="flex flex-col lg:flex-row segundoloop mt-4">
            @endif
          @php $second_loop = true; @endphp
          @if ($second_loop) 
            <article class="rounded bg-gray-70 hover:bg-gray-100 hover:rounded mb-6 p-4 md:p-0">
                {{-- inicio mobile --}}
                <div class="flex flex-row justify-between gap-x-4 md:hidden">
                    <a class="w-1/2" href="{{ get_permalink() }}">
                        <figure class="imgpost">
                            {{ the_post_thumbnail('curiosidades_small', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
                        </figure>
                    </a>
                    <h2 class="w-1/2 text-lg md:text-base lg:text-lg">
                        <a class="postslinks" href="{{ get_permalink() }}">
                            {{ the_title() }}
                        </a>
                    </h2>
                </div>
                <p class="block md:hidden mt-2 excerpt">
                    <a class="postslinks" href="{{ get_permalink() }}">
                      {{ get_the_excerpt() }}
                    </a>
                  </p>
                {{-- fim mobile   --}}

                <div class="hidden md:flex p-4 flex-row">
                  <a class="w-1/2 md:w-full lg:w-1/2" href="{{ get_permalink() }}">
                    <figure class="imgpost">
                      {{ the_post_thumbnail('curiosidades_small', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
                    </figure>
                  </a>
                  <div class="w-1/2 md:w-full lg:w-1/2 pl-4">
                    <h2 class="text-lg md:text-base lg:text-lg">
                        <a class="postslinks" href="{{ get_permalink() }}">
                          {{ the_title() }}
                        </a>
                      </h2>
                      <p class="mb-3 excerpt">
                        <a class="postslinks" href="{{ get_permalink() }}">
                          {{ get_the_excerpt() }}
                        </a>
                      </p>
                  </div>
                </div>
              </article>          
          @endif
          @endif
        @endwhile
      @endif
    </div>
  </section>
    {{-- @include('partials.hrelement') --}}
    
    {{-- Next grid --}}  
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 mt-6 mb-8">
  
      {{-- Next category --}}
    
      <section id="historia-brasil" class="">
        <span class="category-name mb-4">
          <strong>@php echo caturl('historia-do-brasil') @endphp</strong>
        </span>

        @php $category = postbycategory('historia-do-brasil'); @endphp
        @if ($category->have_posts())
          @php $first_loop = true; @endphp
          @while ($category->have_posts()) @php $category->the_post() @endphp
          
            {{-- @php echo $first_loop; @endphp --}}
            @if ($first_loop)
            <article class="border-default pb-8 mb-8 rounded bg-gray-70 hover:bg-gray-100 hover:rounded h-97">
              <a href="{{ get_permalink() }}">
                <figure class="imgpost">
                  {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
                </figure>
              </a>
              <div class="wrap h-auto">
                <h2 class="text-xl mb-2">
                  <a class="postslinks" href="{{ get_permalink() }}">
                    {{ the_title() }}
                  </a>
                </h2>
  
                <p class="mb-3 excerpt">
                  <a class="postslinks" href="{{ get_permalink() }}">
                    {{ get_the_excerpt() }}
                  </a>
                </p>
                @include('partials.readingtime')
              </div>
            </article>

            @php $first_loop = false; @endphp
              @else
              <article class="rounded bg-gray-70 hover:bg-gray-100 hover:rounded mb-2">
                <div class="p-4 flex flex-row md:flex-col lg:flex-row gap-2">
                  <a class="w-1/2 md:w-full lg:w-1/2" href="{{ get_permalink() }}">
                    <figure class="imgpost">
                      {{ the_post_thumbnail('curiosidades_small', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
                    </figure>
                  </a>
                  <h2 class="text-lg md:text-base lg:text-lg w-1/2 md:w-full lg:w-1/2">
                    <a class="postslinks" href="{{ get_permalink() }}">
                      {{ the_title() }}
                    </a>
                  </h2>
                </div>
              </article>
            @endif
          @endwhile
        @else
          <div class="alert alert-warning">
            {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
          </div>
        @endif

      </section>
    
      {{-- Next category --}}  
    
      <section id="direitos-humanos" class="">
        <span class="category-name mb-4">
          <strong>@php echo caturl('direitos-humanos') @endphp</strong>
        </span>
        @php $category = postbycategory('direitos-humanos'); @endphp
        @if ($category->have_posts())
          @php $first_loop = true; @endphp
          @while ($category->have_posts()) @php $category->the_post() @endphp
          
          {{-- @php echo $first_loop; @endphp --}}
          @if ($first_loop)
          <article class="border-default pb-8 mb-8 rounded bg-gray-70 hover:bg-gray-100 hover:rounded h-97">
            <a href="{{ get_permalink() }}">
              <figure class="imgpost">
                {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
              </figure>
            </a>
            <div class="wrap h-auto">
              <h2 class="text-xl mb-2">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ the_title() }}
                </a>
              </h2>

              <p class="mb-3 excerpt">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ get_the_excerpt() }}
                </a>
              </p>
              @include('partials.readingtime')
            </div>
          </article>

          @php $first_loop = false; @endphp
            @else
            <article class="rounded bg-gray-70 hover:bg-gray-100 hover:rounded mb-2">
              <div class="p-4 flex flex-row md:flex-col lg:flex-row gap-2">
                  <a class="w-1/2 md:w-full lg:w-1/2" href="{{ get_permalink() }}">
                    <figure class="imgpost">
                      {{ the_post_thumbnail('curiosidades_small', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
                    </figure>
                  </a>
                  <h2 class="text-lg md:text-base lg:text-lg w-1/2 md:w-full lg:w-1/2">
                  <a class="postslinks" href="{{ get_permalink() }}">
                    {{ the_title() }}
                  </a>
                </h2>
              </div>
            </article>
          @endif
        @endwhile
      @else
        <div class="alert alert-warning">
          {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
        </div>
      @endif
      </section>
  
      {{-- Next category --}}
  
      <section id="batalhas-historicas" class="">
        <span class="category-name mb-4">
          <strong>@php echo caturl('batalhas-historicas') @endphp</strong>
        </span>
        @php $category = postbycategory('batalhas-historicas'); @endphp
        @if ($category->have_posts())
          @php $first_loop = true; @endphp
          @while ($category->have_posts()) @php $category->the_post() @endphp
          
          {{-- @php echo $first_loop; @endphp --}}
          @if ($first_loop)
          <article class="border-default pb-8 mb-8 rounded bg-gray-70 hover:bg-gray-100 hover:rounded h-97">
            <a href="{{ get_permalink() }}">
              <figure class="imgpost">
                {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
              </figure>
            </a>
            <div class="wrap h-auto">
              <h2 class="text-xl mb-2">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ the_title() }}
                </a>
              </h2>

              <p class="mb-3 excerpt">
                <a class="postslinks" href="{{ get_permalink() }}">
                  {{ get_the_excerpt() }}
                </a>
              </p>
              @include('partials.readingtime')
            </div>
          </article>

          @php $first_loop = false; @endphp
            @else
            <article class="rounded bg-gray-70 hover:bg-gray-100 hover:rounded mb-2">
              <div class="p-4 flex flex-row md:flex-col lg:flex-row gap-2">
                  <a class="w-1/2 md:w-full lg:w-1/2" href="{{ get_permalink() }}">
                    <figure class="imgpost">
                      {{ the_post_thumbnail('curiosidades_small', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
                    </figure>
                  </a>
                  <h2 class="text-lg md:text-base lg:text-lg w-1/2 md:w-full lg:w-1/2">
                  <a class="postslinks" href="{{ get_permalink() }}">
                    {{ the_title() }}
                  </a>
                </h2>
              </div>
            </article>
          @endif
        @endwhile
      @else
        <div class="alert alert-warning">
          {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
        </div>
      @endif
      </section>

       {{-- Next category --}}
       @php $category = postbycategory('crime-organizado'); @endphp
    
       <section id="crime-organizado" class="">
         <span class="category-name mb-4">
           <strong>@php echo caturl('crime-organizado') @endphp</strong>
         </span>
         @php $category = postbycategory('crime-organizado'); @endphp
         @if ($category->have_posts())
           @php $first_loop = true; @endphp
           @while ($category->have_posts()) @php $category->the_post() @endphp
           
           {{-- @php echo $first_loop; @endphp --}}
           @if ($first_loop)
           <article class="border-default pb-8 mb-8 rounded bg-gray-70 hover:bg-gray-100 hover:rounded h-97">
             <a href="{{ get_permalink() }}">
               <figure class="imgpost">
                 {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
               </figure>
             </a>
             <div class="wrap h-auto">
               <h2 class="text-xl mb-2">
                 <a class="postslinks" href="{{ get_permalink() }}">
                   {{ the_title() }}
                 </a>
               </h2>
 
               <p class="mb-3 excerpt">
                 <a class="postslinks" href="{{ get_permalink() }}">
                   {{ get_the_excerpt() }}
                 </a>
               </p>
               @include('partials.readingtime')
             </div>
           </article>
 
           @php $first_loop = false; @endphp
             @else
             <article class="rounded bg-gray-70 hover:bg-gray-100 hover:rounded mb-2">
               <div class="p-4 flex flex-row md:flex-col lg:flex-row gap-2">
                   <a class="w-1/2 md:w-full lg:w-1/2" href="{{ get_permalink() }}">
                     <figure class="imgpost">
                       {{ the_post_thumbnail('curiosidades_small', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
                     </figure>
                   </a>
                   <h2 class="text-lg md:text-base lg:text-lg w-1/2 md:w-full lg:w-1/2">
                   <a class="postslinks" href="{{ get_permalink() }}">
                     {{ the_title() }}
                   </a>
                 </h2>
               </div>
             </article>
           @endif
         @endwhile
       @else
         <div class="alert alert-warning">
           {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
         </div>
       @endif
       </section>
     
       {{-- Next category --}}
     
       <section id="guerras" class="">
         <span class="category-name mb-4">
           <strong>@php echo caturl('guerras') @endphp</strong>
         </span>
         @php $category = postbycategory('guerras'); @endphp
         @if ($category->have_posts())
           @php $first_loop = true; @endphp
           @while ($category->have_posts()) @php $category->the_post() @endphp
           
           {{-- @php echo $first_loop; @endphp --}}
           @if ($first_loop)
           <article class="border-default pb-8 mb-8 rounded bg-gray-70 hover:bg-gray-100 hover:rounded h-97">
             <a href="{{ get_permalink() }}">
               <figure class="imgpost">
                 {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
               </figure>
             </a>
             <div class="wrap h-auto">
               <h2 class="text-xl mb-2">
                 <a class="postslinks" href="{{ get_permalink() }}">
                   {{ the_title() }}
                 </a>
               </h2>
 
               <p class="mb-3 excerpt">
                 <a class="postslinks" href="{{ get_permalink() }}">
                   {{ get_the_excerpt() }}
                 </a>
               </p>
               @include('partials.readingtime')
             </div>
           </article>
 
           @php $first_loop = false; @endphp
             @else
             <article class="rounded bg-gray-70 hover:bg-gray-100 hover:rounded mb-2">
               <div class="p-4 flex flex-row md:flex-col lg:flex-row gap-2">
                   <a class="w-1/2 md:w-full lg:w-1/2" href="{{ get_permalink() }}">
                     <figure class="imgpost">
                       {{ the_post_thumbnail('curiosidades_small', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
                     </figure>
                   </a>
                   <h2 class="text-lg md:text-base lg:text-lg w-1/2 md:w-full lg:w-1/2">
                   <a class="postslinks" href="{{ get_permalink() }}">
                     {{ the_title() }}
                   </a>
                 </h2>
               </div>
             </article>
           @endif
         @endwhile
       @else
         <div class="alert alert-warning">
           {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
         </div>
       @endif
       </section>
   
       {{-- Next category --}}
   
       <section id="periodos" class="">
         <span class="category-name mb-4">
           <strong>@php echo caturl('periodos') @endphp</strong>
         </span>
         @php $category = postbycategory('periodos'); @endphp
         @if ($category->have_posts())
           @php $first_loop = true; @endphp
           @while ($category->have_posts()) @php $category->the_post() @endphp
           
           {{-- @php echo $first_loop; @endphp --}}
           @if ($first_loop)
           <article class="border-default pb-8 mb-8 rounded bg-gray-70 hover:bg-gray-100 hover:rounded h-97">
             <a href="{{ get_permalink() }}">
               <figure class="imgpost">
                 {{ the_post_thumbnail('mais_extendida', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
               </figure>
             </a>
             <div class="wrap h-auto">
               <h2 class="text-xl mb-2">
                 <a class="postslinks" href="{{ get_permalink() }}">
                   {{ the_title() }}
                 </a>
               </h2>
 
               <p class="mb-3 excerpt">
                 <a class="postslinks" href="{{ get_permalink() }}">
                   {{ get_the_excerpt() }}
                 </a>
               </p>
               @include('partials.readingtime')
             </div>
           </article>  
 
           @php $first_loop = false; @endphp
             @else
             <article class="rounded bg-gray-70 hover:bg-gray-100 hover:rounded mb-2">
               <div class="p-4 flex flex-row md:flex-col lg:flex-row gap-2">
                   <a class="w-1/2 md:w-full lg:w-1/2" href="{{ get_permalink() }}">
                     <figure class="imgpost">
                       {{ the_post_thumbnail('curiosidades_small', array( 'class' => 'w-full shadow-xl rounded-t-md' ) ) }}
                     </figure>
                   </a>
                   <h2 class="text-lg md:text-base lg:text-lg w-1/2 md:w-full lg:w-1/2">
                   <a class="postslinks" href="{{ get_permalink() }}">
                     {{ the_title() }}
                   </a>
                 </h2>
               </div>
             </article>
           @endif
         @endwhile
       @else
         <div class="alert alert-warning">
           {{ __('Desculpe, nenhum resultado encontrado.', 'sage') }}
         </div>
       @endif
       </section>
     
     </div>
     {{-- end grid --}}
      
     <div class="flex items-center justify-center mb-4">
      <button class="bg-ihcat hover:bg-ihcat text-2xl text-white py-3 px-6 rounded button transform hover:scale-110 transition duration-300 ease-in-out">
        <a href="/categorias/">Ver mais »</a>
      </button>
     </div>



