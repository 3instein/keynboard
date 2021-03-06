<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Key&Board') }}</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('images/gold-logo.png') }}">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  @livewireStyles
  @stack('prepend-style')
  @stack('addon-style')
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased overflow-hidden {{ request()->is('/') ? 'overflow-x-hidden' : '' }} {{ request()->is('interest-check') ? 'bg-slate-100' : '' }}">
  @include('components.navigation')
  <div class="min-h-screen">
    <main class="app">
      {{ $slot }}
    </main>
  </div>
  @include('components.footer')
  @livewireScripts
  @stack('prepend-script')
  @stack('addon-script')
</body>

</html>
