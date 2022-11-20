<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Belajar Laravel | @yield('title')</title>
  @vite('resources/css/app.css')
</head>

<body data-theme="light" class="selection:bg-primary selection:text-white">

  <div class="flex flex-col justify-between min-h-screen">
    <div>

      @include('partials.navbar')
      @yield('content')

    </div>

    <footer class="flex items-center justify-center p-6">
      <span class="text-sm text-gray-500 dark:text-gray-400">© 2022 <a href="/about"
          class="hover:underline hover:text-primary">Dwi
          Husnawan™</a>. All Rights Reserved.
      </span>
    </footer>
  </div>

  </div>

  @vite('resources/js/app.js')
</body>

</html>
