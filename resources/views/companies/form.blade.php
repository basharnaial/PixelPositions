@props(['company' => null])

<x-forms.input
    label="Company Name"
    name="name"
    placeholder="e.g. Google Inc."
    :value="old('name', $company?->name)"
/>

<x-forms.input
    label="phone"
    name="phone"
    placeholder="e.g. Mountain View, CA"
    :value="old('phone', $company?->phone)"
/>

<x-forms.input
    label="Website"
    name="website"
    placeholder="https://example.com"
    :value="old('website', $company?->website)"
/>
