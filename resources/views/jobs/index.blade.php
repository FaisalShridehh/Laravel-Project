<x-app-layout>
    <div class="space-y-10">

        <section class="flex flex-col gap-4 justify-center text-center pt-6">
            <h1 class="text-4xl lg:text-6xl font-bold capitalize">Let's find you a great job!</h1>
            <x-form.form action="{{ route('jobs.search') }}" class="mt-6 items-center ">
                <x-form.search-input />
            </x-form.form>

        </section>




        <section class="pt-10">
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job) 
                    <x-job-card :$job/>
                @endforeach
            </div>
        </section>


        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="flex flex-wrap mt-6 gap-2">
                @foreach ($tags as  $tag)
                <x-tag size="base":tag="$tag" />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($recentJobs as $job )
                <x-job-card-wide :job="$job"/>
                @endforeach

            </div>
        </section>
    </div>
</x-app-layout>
