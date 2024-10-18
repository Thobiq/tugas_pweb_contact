@include('partials.head')
<body class="h-full">

<div class="min-h-full">
    @include('partials.navbar')
    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $title }}</h1>
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        @yield('content')
      </div>
    </main>
  </div>
  
</body>
</html>