<x-layout>
    <x-page-heading>New Company</x-page-heading>

    <x-forms.form method="POST" action="{{ route('companies.store') }}">
        @include('companies.form')
        <x-forms.button>Add Company</x-forms.button>
    </x-forms.form>
</x-layout>
