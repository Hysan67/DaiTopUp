<x-layout>
   <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm bg-gray-800/50 p-6 rounded-lg shadow-md"> 
         <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="my-7 text-center text-2xl/9 font-bold tracking-tight text-white">{{ $activity }}</h2>
         </div>
         <form action="#" method="POST" class="space-y-6">
            {{ $slot }}

         <div>
            <label for="email" class="block text-sm/6 font-medium text-gray-100">Email</label>
            <div class="mt-2">
               <input id="email" type="email" name="email" required autocomplete="email" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
            </div>
         </div>
            
         <div>
            <div class="flex items-center justify-between">
               <label for="password" class="block text-sm/6 font-medium text-gray-100">Password</label>
            </div>
         <div class="mt-2 relative">
                  <input id="password" type="password" name="password" required autocomplete="current-password" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                  <button type="button" id="toggle-password" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-gray-200">
                     <svg id="eye-icon" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.274.857-.682 1.664-1.198 2.385M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                     </svg>
                  </button>
               </div>
            </div>
      
            <div>
               <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">{{ $activity }}</button>
            </div>
         </form>
      
         <p class="mt-10 text-center text-sm/6 text-gray-400">
            {{ $desc }}
            <a href="/{{ strtolower($next) }}" class="font-semibold text-indigo-400 hover:text-indigo-300">{{ $next }}</a>
         </p>
         </div>
      </div> 
</x-layout>