@props(['spanColor' => 'bg-white'])
<div class="flex align-items-center">
    <h3 {{ $attributes->merge(['class' => 'font-bold text-lg']) }}>
        <span class="{{ $spanColor }} w-2 h-2 inline-block rounded-xl px-2 mr-4">

        </span>
        {{ $slot }}
    </h3>
</div>
