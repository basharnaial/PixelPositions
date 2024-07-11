<x-layout>
   <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" entype="multipart/form-data">
        <x-forms.input label="Your name" name="name" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password" />

        <x-forms.divider></x-forms.divider>
        <x-forms.input label="Employer Name" name="name" />
        <x-forms.input label="Logo Name" name="file" type="file" />

        <x-forms.button >Create Account</x-forms.button>
    </x-forms.form>
</x-layout>
