<x-layout>
    <x-page-heading>Search Result</x-page-heading>

    <div class="mt-4 space-y-6">
        @foreach ($jobs as $job)
            <x-job-card-wide :$job></x-job-card-wide>
        @endforeach

    </div>
</x-layout>
