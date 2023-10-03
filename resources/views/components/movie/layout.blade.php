<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cima4all</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer=""></script>

<body class="h-full font-sans text-white bg-gray-900"" >
<div class="min-h-full ">
    <nav class="border-b border-gray-800 "">
  <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <livewire:navigation-drop-down>
        <div class="hidden md:block">
          <div class="flex items-center ml-4 md:ml-">
            <div class="relative bg-gray-100 lg:inline-flex rounded-xl">
            </div>
            <livewire:searchdropdown>
              <!-- Profile dropdown -->
              <div class="relative ml-3">

                <div>
                  <button type="button"
                    class="relative flex items-center max-w-xs text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">

                    <img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/60?u=50" alt="">
                  </button>
                </div>
              </div>
          </div>
        </div>

    </div>
  </div>
  </nav>
  </div>
  {{ $slot }}
  <livewire:scripts>

</html>
