@props(['wide' => false])


@if ($wide)
    <img {{ $attributes }} alt="" class="max-w-[6vw] rounded w-full h-auto max-h-[6vw]">
@else
    <img {{ $attributes }} alt="" class="max-w-[3vw] rounded w-full h-auto max-h-[3vw]">
@endif
