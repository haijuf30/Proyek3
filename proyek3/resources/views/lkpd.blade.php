<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>@yield('title')</title>
</head>
<body>

  <!-- Include Navbar -->
  @include('navbar')

  <p>LKPD</p>

  <!-- Footer (optional) -->
  <footer class="bg-gray-800 text-white text-center p-4 mt-4">
    <p>&copy; 2024 Your Brand. All rights reserved.</p>
  </footer>
</body>
</html>
