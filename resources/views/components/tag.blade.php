@props(['tag'])
<a href="/tags/{{ $tag->name }}"
    {{ $attributes->merge(['class' => 'bg-white/10 px-2 py-1 rounded-xl text-sm hover:bg-white/40 transition-colors duration-700 hover:text-black']) }}>
    {{ $tag->name }}

</a>
