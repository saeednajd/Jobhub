@props(['job'])

<div
    class="p-4 bg-white/5 rounded-xl flex flex-row gap-x-6 border border-transparent hover:border-blue-800 transition-colors duration-300 group">
    <div class="min-w-[6vw] min-h-[6vw]">
        <x-employer-logo wide='true' src="{{ Vite::asset('resources/images/pr.jfif') }}"></x-employer-logo>
    </div>


    <div class="flex-1 flex flex-col min-w-[30vw]">
        <a href="#" class="self-start text-sm text-gray-400"> {{ $job->employer->name }}</a>
        <h3 class="font-bold text-xl mt-4 group-hover:text-blue-800 transition-colors duration-700 ">{{ $job->title }}
        </h3>
        <p class="text-sm text-gray-300 mt-auto">{{ $job->salary }}</p>
    </div>

    <div class="space-x-1">

        @foreach ($job->Tags as $tag)
            <x-tag href='#' :tag="$tag" />
        @endforeach



    </div>
</div>
