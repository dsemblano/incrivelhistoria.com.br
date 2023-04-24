@php $posttags = get_the_tags();
@endphp
<div class="not-prose">
    <h3 class="tags-posts-title text-ihcat !text-lg uppercase mb-2">Tags usadas:</h3>
    <ul class="tags-posts flex flex-row gap-8">
    @if ($posttags)
        @foreach($posttags as $tag)
        <li class="bg-gray-100 rounded-lg p-2 text-base transform hover:scale-110 transition duration-300 ease-in-out">
            <a href="/tag/{{$tag->slug}}">
                {{$tag->name}}
            </a>
        </li>
        @endforeach
    @endif
    </ul>
</div>
