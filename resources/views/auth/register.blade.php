<x-app-layout>
    <x-page-heading>Register</x-page-heading>
    <div
        class="bg-white/5 px-4 py-6 shadow  backdrop-blur border border-white/10 sm:p-6 sm:rounded-lg max-w-5xl mx-auto">
        <div class="flex items-center justify-center">
            <img src="{{Vite::asset('resources/images/logo_without_text.svg')}}" alt="">

        </div>

        <x-form.form action="{{ route('auth.store.register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col divide-y gap-6 divide-gray-700/50">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <x-form.form-field>
                        <x-form.form-label for="name">Name
                        </x-form.form-label>
                        <x-form.form-input id="name" type="text" name="name" autofocus />
                        <x-form.form-error name="name" />
                    </x-form.form-field>

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

                    <x-form.form-field>
                        <x-form.form-label for="password_confirmation">
                            Confirm password</x-form.form-label>
                        <x-form.form-input id="password_confirmation" type="password" name="password_confirmation" />

                        <x-form.form-error name="password_confirmation" />
                    </x-form.form-field>
                </div>
                <div class="grid grid-cols-1 gap-4 pt-4 ">
                    <x-form.form-field>
                        <x-form.form-label for="employer">Employer Name
                        </x-form.form-label>
                        <x-form.form-input id="employer" type="text" name="employer" autofocus />
                        <x-form.form-error name="employer" />
                    </x-form.form-field>
                    <x-form.form-field>
                        <x-form.form-label for="Logo">Employer Logo
                        </x-form.form-label>
                        <x-form.file-input id="logo"
                            class="block w-full rounded-md border-0 py-1.5  shadow-sm   sm:text-sm sm:leading-6 px-2"
                            name="logo" />
                        <x-form.form-error name="logo" />
                    </x-form.form-field>
                </div>
            </div>
            <x-form.form-button type="submit" class="self-end">Create Account</x-form.form-button>
        </x-form.form>
    </div>
</x-app-layout>
