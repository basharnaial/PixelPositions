<x-layout>
    <x-page-heading>All Companies</x-page-heading>

    <div class="flex justify-end mb-4">
        <a href="{{ route('companies.create') }}" class="btn-primary">+ New Company</a>
    </div>

    <div class="grid lg:grid-cols-3 gap-6">
        @foreach($companies as $company)
            <div class="bg-white dark:bg-black/20 p-5 rounded-xl space-y-2 shadow">
                <h2 class="text-xl font-bold">{{ $company->name }}</h2>
                <p class="text-sm text-gray-400">{{ $company->location }}</p>
                <div class="flex gap-3 mt-4">
                    <a href="{{ route('companies.show', $company) }}" class="btn-secondary">View</a>
                    <a href="{{ route('companies.edit', $company) }}" class="btn-primary">Edit</a>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
