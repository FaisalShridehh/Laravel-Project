 @props(['job' => null])
 {{-- job cards start --}}
 <x-panel class="flex-col gap-4 text-center p-4">
     <div class="self-start text-sm">{{$job->employer->name}}</div>
     <div class="py-8 flex flex-col gap-7">
         <h3 class="group-hover:text-sky-500 text-xl font-bold transition-colors duration-500">{{$job->title}}</h3>
         <p class="text-xs">{{$job->location}} - From ${{$job->salary}} {{$job->salary_type}}</p>
     </div>
     <div class="flex justify-between items-center mt-auto w-full">
         <div class="flex justify-between items-center gap-4">
             @foreach ($job->tags as $tag )
             <x-tag size="small" :tag="$tag" />

             @endforeach
         </div>
        <x-employer-logo :employer="$job->employer" :width="42" :height="42" />


     </div>
 </x-panel>
 {{-- job cards end --}}
