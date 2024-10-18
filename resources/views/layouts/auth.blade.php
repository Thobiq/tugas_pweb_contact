@include('partials.head')
<body class="h-full">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-10 w-auto" src="/images/logo-unej.png" alt="Logo UNEJ">
          <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
            @yield('title-auth')
          </h2>
        </div>
      
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            {{-- form --}}
            @yield('content-auth')
          
        </div>
      </div>
</body>