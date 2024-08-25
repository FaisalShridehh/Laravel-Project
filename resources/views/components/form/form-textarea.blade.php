<textarea
    {{$attributes->merge(['class' =>  "block w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-0 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-none  focus:ring-2 focus:ring-sky-600 focus:border-transparent  sm:text-sm sm:leading-6 px-2 resize-none bg-white/10"])}}>{{ $slot }}</textarea>
