<x-layout>

    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's find your next Job !!</h1>
            

            <x-forms.form action="/search" class="mt-8">
                <x-forms.input name="q" placeholder="Web Developer..." :label="false">

                </x-forms.input>
            </x-forms.form>
        </section>
        <section class="pt-10">
            <x-section-heading class="mb-6"> Top Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8">

                @foreach ($featuredjobs as $job)
                    <x-job-card :$job></x-job-card>
                @endforeach
            </div>

        </section>
        <section>
            <x-section-heading class="mb-6">Tags</x-section-heading>
            <div class="mt-6 flex justify-center">
                <div class="max-w-3xl w-full overflow-y-auto max-h-40">
                    <div class="flex flex-wrap justify-center gap-2">
                        @foreach ($tags as $tag)
                            <x-tag href='#' :tag="$tag">Tag</x-tag>
                        @endforeach
                    </div>
                </div>
            </div>



        </section>
        <section>
            <x-section-heading class="mb-6 " spanColor="bg-red-500">Recent jobs</x-section-heading>
            <div class="mt-4 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job></x-job-card-wide>
                @endforeach

            </div>
        </section>
    </div>

</x-layout>
