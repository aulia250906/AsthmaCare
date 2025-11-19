<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>@yield('title', 'Laravel App')</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{ asset('images/logoasma.png') }}">

  <!-- Font & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=sticky_note_2" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Vite -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
  * {
      font-family: 'League Spartan';
    }
    html {
      scroll-behavior: smooth;
    }
    body {
      font-family: 'League Spartan';
    }
  </style>
</head>
<body class="bg-white antialiased">

<div id="pageloader"
     class="fixed inset-0 bg-white z-[9999] flex items-center justify-center">

    <div class="relative">
        <div class="w-16 h-16 rounded-full border-4 border-cyan-400 animate-ping opacity-60"></div>
        <div class="w-16 h-16 rounded-full border-4 border-cyan-500 animate-spin border-t-transparent absolute top-0"></div>
    </div>

</div>

  
  {{-- Konten utama --}}
  @yield('content')

  {{-- Tambahkan JS tambahan jika diperlukan --}}
  <script src="node_modules/flowbite/dist/flowbite.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();

    document.addEventListener("DOMContentLoaded", () => {
    setTimeout(() => {
        const loader = document.getElementById("pageloader");
        loader.classList.add("opacity-0");

        setTimeout(() => loader.style.display = "none", 500);
    }, 250);
});

  </script>
</body>
</html>
