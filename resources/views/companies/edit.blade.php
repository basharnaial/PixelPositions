<x-layout>
    <x-page-heading>Edit Company</x-page-heading>

    <x-forms.form method="POST" action="{{ route('companies.update', $company) }}">
        @method('PUT')
        @include('companies.form', ['company' => $company])
        <x-forms.button>Update Company</x-forms.button>
    </x-forms.form>
</x-layout>
