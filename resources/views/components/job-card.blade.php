@props(['job'])
<x-panel>
    <div class="self-start text-sm"> {{$job->employer->name}}</div>
    <div class="py-8 font-bold">
        <h3 class="group-hover:text-blue-800 transition-colors duration-700">{{$job->title}}</h3>
        <p>{{$job->salary}}</p>

    </div>
    <div class="flex justify-between align-items-center mt-auto">
        <div class="space-x-1">


           

            @if ($job->Tags->count() <= 3)
                @foreach ($job->Tags as $tag)
                    <x-tag href='#' :tag="$tag" /> 
                @endforeach
                
            @else
                <div class="flex flex-wrap gap-2">
                    @for ($i = 0; $i < 3; $i++)
                        <x-tag href='#' :tag="$job->Tags[$i]" /> 
                    @endfor
                    <p class="text-gray-500"> and {{ $job->Tags->count() - 3 }} more tags</p>
                </div>
            @endif
        </div>


        <x-employer-logo src="{{ Vite::asset('resources/images/pr.jfif') }}"></x-employer-logo>
    </div>
</x-panel>
