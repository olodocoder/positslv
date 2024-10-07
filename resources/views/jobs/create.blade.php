<x-layout>
    <x-page-heading>Create a Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Co-Founder"/>
            <x-forms.input label="Salary" name="salary" placeholder="$90,000" />
            <x-forms.input label="Location" name="location" placeholder="Surulere, Lagos" />
    <x-forms.select label="Schedule" name="schedule">
        <option value="Part Time">Part Time</option>
        <option value="Full Time">Full Time</option>
    </x-forms.select>
            <x-forms.input label="URL" name="url" placeholder="https://acme.com/fe-dev-wanted" />
            <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />
            <x-forms.divider/>
            <x-forms.input label="Tags (comma separated)" name="tags" placeholder="visas, flights, hotels" />

            <x-forms.button>Publish Job</x-forms.button>
    </x-forms.form>
</x-layout>