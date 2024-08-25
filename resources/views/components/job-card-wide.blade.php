 @props(['job' => null])
 {{-- job cards start --}}
 <x-panel class="p-4 gap-4">

     {{-- left div for Employers image start--}}
     <div class="flex-[1]">
        <x-employer-logo :employer="$job->employer" />
     </div>
     {{-- left div for Employers image end --}}

     {{-- right div for Employers job info start --}}
     <div class="flex-[10]">
         <div>

             <div class="flex justify-between items-center">
                 <p class="text-sm text-gray-400"><a href="#">{{$job->employer->name}}</a></p>
                 <div class="flex items-center gap-3">

                     @foreach ($job->tags as $tag)
                     <x-tag size="small" :tag="$tag" />
                     @endforeach
                 </div>
             </div>
             <div class="mb-3">
                 <h3 class="text-xl mt-3 font-bold group-hover:text-sky-500 transition-colors duration-300 ">
                     {{ $job->title }}</h3>
             </div>
         </div>
         <div class="flex justify-between items-center">
             <p class="text-sm text-gray-400">{{$job->location}} - From ${{$job->salary}} {{$job->salary_type}}</p>
             <div class="flex items-center gap-3 flex-wrap">
                 @foreach ($job->tags as $tag )
                 <x-tag size="small" :tag="$tag" />
                 @endforeach
             </div>
         </div>
     </div>
     {{-- right div for Employers job info end --}}
 </x-panel>
 {{-- job cards end --}}
