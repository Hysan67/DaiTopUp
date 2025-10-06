<!DOCTYPE html>
<html lang="en" class="h-full  bg-gray-100 dark:bg-gray-900">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
   @vite('resources/css/app.css')
   @vite('resources/js/app.js')
   <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
   <script src="javascript/toogle-password.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>
   <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>
<body class="h-full">
   <div class="min-h-full">
      <x-navbar></x-navbar>
      <main >
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-white">
            {{ $slot }}
      </div>
      </main>
   </div>
</body>
</html>