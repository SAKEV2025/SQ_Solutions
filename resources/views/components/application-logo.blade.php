@props(['variant' => 'figura'])

@if($variant === 'letra')
    <img src="{{ asset('landing/LOGO_SAKEV_LETRA.png') }}" alt="SAKEV" {{ $attributes->merge(['class' => 'object-contain']) }} />
@else
    <img src="{{ asset('landing/LOGO_SAKEV.png') }}" alt="SAKEV" {{ $attributes->merge(['class' => 'object-contain']) }} />
@endif
