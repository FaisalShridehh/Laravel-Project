<x-app-layout>
    <div class="h-[calc(100vh-250px]">
        <x-page-heading>Job details</x-page-heading>
        <div
            class="bg-white/5 px-4 py-6 shadow  backdrop-blur border border-white/10 sm:p-6 sm:rounded-lg max-w-5xl mx-auto">
            <div class="flex items-center justify-center">
                <img src="{{Vite::asset('resources/images/logo_without_text.svg')}}" alt="">

            </div>

            <x-form.form action="{{ route('jobs.store') }}" method="POST">
                <div class="mt-10 grid grid-cols-6 gap-4">
                    {{-- Title start --}}
                    <x-form.form-field class="col-span-3">
                        <x-form.form-label for="title">
                            Title
                            </x-form-label>
                            <div class="mt-2">
                                <x-form.form-input type="text" name="title" id="title"
                                    placeholder="Full Stack Developer" />
                                <x-form.form-error name="title" />
                            </div>
                    </x-form.form-field>
                    {{-- Title End --}}

                    {{-- Salary start --}}
                    <x-form.form-field class="col-span-3">
                        <x-form.form-label for="salary">
                            Salary
                            </x-form-label>
                            <div class="mt-2">

                                <div class="mt-2">
                                    <x-form.form-input type="number" name="salary" id="salary" placeholder="140,000" />
                                    <x-form.form-error name="salary" />
                                </div>
                            </div>
                    </x-form.form-field>
                    {{-- Salary End --}}


                    {{-- Salary Type Start --}}
                    <x-form.form-field class="col-span-3">
                        <x-form.form-label for="salary_type">Salary Type</x-form.form-label>
                        <div class="mt-2">
                            <x-form.form-select name="salary_type" id="salary_type"
                                :options="array_combine(array_column($salaryTypes, 'value'), array_column($salaryTypes, 'name'))"
                                :selected="old('salaryTypes')" />
                            <x-form.form-error name="salary_type" />
                        </div>
                    </x-form.form-field>
                    {{-- Salary Type End --}}

                    {{-- Schedule Start --}}
                    <x-form.form-field class="col-span-3">
                        <x-form.form-label for="schedule">Schedule</x-form.form-label>
                        <div class="mt-2">
                            <x-form.form-select name="schedule" id="schedule"
                                :options="array_combine(array_column($schedules, 'value'), array_column($schedules, 'name'))"
                                :selected="old('schedule')" />
                            <x-form.form-error name="schedule" />
                        </div>
                    </x-form.form-field>

                    {{-- Schedule End --}}

                    {{-- Company start --}}
                    <x-form.form-field class="col-span-3">
                        <x-form.form-label for="company">
                            Company
                            </x-form-label>
                            <div class="mt-2">
                                <x-form.form-input type="text" name="company" id="company" placeholder="Google" />
                                <x-form.form-error name="company" />
                            </div>
                    </x-form.form-field>
                    {{-- Company End --}}


                    {{-- Location start --}}
                    <x-form.form-field class="col-span-3">
                        <x-form.form-label for="location">Location</x-form.form-label>
                        <div class="mt-2">
                            <x-form.form-input type="text" name="location" id="location"
                                placeholder="Mountain View, CA" />
                            <x-form.form-error name="location" />
                        </div>
                    </x-form.form-field>
                    {{-- Location End --}}

                    {{-- Url Start --}}
                    <x-form.form-field class="col-span-3">
                        <x-form.form-label for="url">URL</x-form.form-label>
                        <div class="mt-2">
                            <x-form.form-input type="text" name="url" id="url"
                                placeholder="https://acme.com/jobs/ceo-wanted" />
                            <x-form.form-error name="url" />
                        </div>
                    </x-form.form-field>
                    {{-- Url End --}}

                    {{-- featured Start --}}
                    <x-form.form-field class="col-span-6">
                        <x-form.form-checkbox label="Feature (Costs Extra)" name="featured" />
                    </x-form.form-field>

                    {{-- featured End --}}

                    {{-- Description start --}}
                    <x-form.form-field class="col-span-6">
                        <x-form.form-label for="description">description</x-form-label>
                            <div class="mt-2">
                                <x-form.form-textarea name="description" id="description"
                                    placeholder="Job description" />
                                <x-form.form-error name="description" />
                            </div>
                    </x-form.form-field>
                    {{-- Description End --}}
                </div>
                <x-form.divider />
                 <x-form.form-field class="">
                        <x-form.form-label for="tags">Tags (comma separated)</x-form.form-label>
                        <div class="mt-2">
                            <x-form.form-input type="text" name="tags" id="tags"
                                placeholder="laracasts, video, education" />
                            <x-form.form-error name="tags" />
                        </div>
                    </x-form.form-field>


                <div class="mt-6 flex items-center justify-end gap-6 self-end">
                    <a href="{{ route('jobs.index')}}" class="text-sm font-semibold leading-6 text-white">Cancel</a>
                    <x-form.form-button type="submit">Save</x-form.form-button>
                </div>
            </x-form.form>
        </div>
    </div>
</x-app-layout>
