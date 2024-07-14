@if (! is_single())

<div class="timeread flex flex-row text-sm">
    <i class="fa-regular fa-clock mr-1 relative top-0.5"></i>
    <div class="text-sm">
        {!! do_shortcode('[rt_reading_time label="Leitura:" postfix="minutos" postfix_singular="minuto"]') !!}
    </div>

</div>

@else

<div class="timeread flex flex-row text-xl">
    <i class="fa-regular fa-clock mr-1 relative top-1.5 right-1 text-gray-600"></i>
    <div class="text-lg text-gray-600">
        {!! do_shortcode('[rt_reading_time label="Leitura:" postfix="minutos" postfix_singular="minuto"]') !!}
    </div>

</div>

@endif