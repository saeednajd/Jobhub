<x-layout>

    <x-page-heading>
        New Job
    </x-page-heading>


    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="title" />
        <x-forms.input label="Salary" name="salary" placeholder="salary" />
        <x-forms.input label="Location" name="location" placeholder="location" />
        <x-forms.select label="schedule" name="schedule">
            <option>Part time</option>
            <option>Full time</option>

        </x-forms.select>
        <x-forms.input label="Url" name="url" placeholder="https://saeednajd.ir" />
        <x-forms.checkbox label="Feature" name="Featured"></x-forms.checkbox>
        <x-forms.input label="Tags(comma seperated)" name="tags" placeholder="Front end,backend" />


        <x-forms.button>submit</x-forms.button>
    </x-forms.form>
</x-layout>
