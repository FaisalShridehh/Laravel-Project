<x-app-layout>
    <x-page-heading>Log In</x-page-heading>
    <div
        class="bg-white/5 px-4 py-6 shadow  backdrop-blur border border-white/10 sm:p-6 sm:rounded-lg max-w-5xl mx-auto">
        <div class="flex items-center justify-center">
            <img src="{{Vite::asset('resources/images/logo_without_text.svg')}}" alt="">

        </div>

        <x-form.form action="{{ route('auth.store.login') }}" method="POST">
            @csrf
            <x-form.form-field>
                <x-form.form-label for="email">Email address
                </x-form.form-label>
                <x-form.form-input id="email" type="email" name="email" />
                <x-form.form-error name="email" />
            </x-form.form-field>

            <x-form.form-field>
                <x-form.form-label for="password">Password
                </x-form.form-label>
                <x-form.form-input id="password" type="password" name="password" autocomplete="new-password" />
                <x-form.form-error name="password" />
            </x-form.form-field>
            <x-form.form-button type="submit" class="self-end">Log In</x-form.form-button>
        </x-form.form>
    </div>

</x-app-layout>
