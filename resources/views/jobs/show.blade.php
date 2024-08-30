{{-- showing a single job listing --}}
<x-app-layout>
  <x-page-heading>Job Details </x-page-heading>


    <div class="bg-white/10 shadow-lg rounded-lg p-8 mt-8 mx-auto  text-black">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-sky-600">{{$job->title}}</h1>
            <span class="text-sky-600 font-semibold">Salary: From ${{$job->salary}} {{ ucfirst($job->salary_type->value) }}

        </div>
        <div class="mt-4 text-gray-400">
            <h2 class="text-xl font-semibold mb-2">{{$job->company}} <span class="text-gray-600">-
                    {{$job->location}}</h2>
            <p class="leading-relaxed">{{$job->description}}</p>
        </div>
        <div class="mt-8 flex justify-between items-center">
            @canany(['update','delete'], $job)
            <div class="mr-4 flex gap-2 items-center">
                <!-- Edit Job button (checks if the user can update the job) -->
                @can('update', $job)
                <a href="{{ route('jobs.edit', $job->id) }}"
                    class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">Edit Job</a>
                @endcan
                <!-- Form for deletion -->
                <!-- Delete Job button (checks if the user can delete the job) -->
                @can('delete', $job)
                <form action="{{ route('jobs.destroy', $job->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">Delete
                        Job</button>
                </form>
                @endcan
            </div>
            @endcanany

            <div @cannot('update', $job) class="flex justify-end w-full" @endcannot>
                <a href="#" class="bg-sky-600 hover:bg-sky-700 text-white font-semibold py-2 px-4 rounded">Apply
                    Now</a>
            </div>
        </div>
    </div>

</x-app-layout>
