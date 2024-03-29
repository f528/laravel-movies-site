  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      @livewireStyles
                            <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
<script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
       @vite(['resources/css/app.css','resources/js/app.js'])

      <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.5/dist/cdn.min.js"></script>
      <title>Document</title>

  </head>



  <body class="font-sons bg-gray-900 text-white">
      <x-navbar />
      {{ $slot }}

      @livewireScripts
       @yield('scripts')
  </body>

  </html>
