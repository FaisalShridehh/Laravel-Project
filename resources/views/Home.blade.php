<x-app-layout>
    <div class="space-y-10">

        <section class="flex flex-col gap-4 justify-center text-center pt-6">
            <h1 class="text-4xl lg:text-6xl font-bold capitalize">Let's find you a great job!</h1>
            <form action="" class="mt-6 flex justify-center ">
                <div class="relative w-full max-w-xl flex  ">
                    <input type="text" name="searchJob" id="" placeholder="Web Developer..."
                        class="rounded-xl bg-white/10 border border-gray-400 pl-10 pr-5 py-4 placeholder-gray-400 text-white focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent w-full">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none ">
                        <svg class="h-5 w-5 text-gray-400 " viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </form>

        </section>




        <section class="pt-10">
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>


        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="flex flex-wrap mt-6 gap-2">
                <x-tag size="base">Frontend</x-tag>
                <x-tag size="base">Backend</x-tag>
                <x-tag size="base">Api</x-tag>
                <x-tag size="base">Frontend</x-tag>
                <x-tag size="base">Backend</x-tag>
                <x-tag size="base">Api</x-tag>
                <x-tag size="base">Frontend</x-tag>
                <x-tag size="base">Backend</x-tag>
                <x-tag size="base">Api</x-tag>
                <x-tag size="base">Api</x-tag>
                <x-tag size="base">Api</x-tag>
                <x-tag size="base">Api</x-tag>
                <x-tag size="base">Api</x-tag>
                <x-tag size="base">Api</x-tag>


            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
            </div>
        </section>
    </div>
</x-app-layout>
