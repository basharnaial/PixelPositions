<x-layout>
    <x-page-heading>{{ $company->name }}</x-page-heading>

    <div class="space-y-4">
        <div>
            <span class="font-bold">Location:</span>
            {{ $company->location }}
        </div>
        <div>
            <span class="font-bold">Website:</span>
            <a href="{{ $company->website }}" class="text-blue-500 underline" target="_blank">{{ $company->website }}</a>
        </div>
    </div>
</x-layout>
