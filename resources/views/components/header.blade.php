<div class="w-full flex justify-center mt-6 sticky top-0">
    <nav class="hidden md:inline-block 
                bg-gray-800 dark:bg-gray-760 
                rounded-2xl px-12 ">
      <div class="flex h-16 items-center justify-center">
        <div class="flex items-baseline space-x-4">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="/Test" :active="request()->is('t')">Test</x-nav-link>
            <x-nav-link href="/Tee" :active="request()->is('cek')">Tee</x-nav-link>
        </div>
      </div>
    </nav>
</div>