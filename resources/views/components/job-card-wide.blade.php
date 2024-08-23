 {{-- job cards start --}}
 <x-panel class="p-4 gap-4 duration-300">
    
     {{-- left div for Employers image start--}}
     <div class="flex-[1]">
         <x-employer-logo :width="90" :height="90" />
     </div>
     {{-- left div for Employers image end --}}

     {{-- right div for Employers job info start --}}
     <div class="flex-[10]">
         <div>

             <div class="flex justify-between items-center">
                 <p class="text-sm text-gray-400"><a href="#">JoSequal</a></p>
                 <div class="flex items-center gap-3">
                     <x-tag size="small">Remote</x-tag>
                     <x-tag size="small">Full Time</x-tag>
                 </div>
             </div>
             <div class="mb-3">
                 <h3 class="text-xl mt-3 font-bold group-hover:text-sky-500 transition-colors duration-300 ">Full stack Laravel developer</h3>
             </div>
         </div>
         <div class="flex justify-between items-center">
             <p class="text-sm text-gray-400">Full Time - From $1000 per hour</p>
             <div class="flex items-center gap-3 flex-wrap">
                 <x-tag size="small">Frontend</x-tag>
                 <x-tag size="small">Backend</x-tag>
                 <x-tag size="small">Api</x-tag>
             </div>
         </div>
     </div>
     {{-- right div for Employers job info end --}}
 </x-panel>
 {{-- job cards end --}}
