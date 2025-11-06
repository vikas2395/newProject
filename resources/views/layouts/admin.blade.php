<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Admin') - {{ config('app.name') }}</title>

  <!-- Put Admin CSS files from public/admin/css/... -->
  <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/admin.css') }}">
  @stack('styles')
</head>
<body>
  <div id="wrapper" class="d-flex">
    <!-- Sidebar -->
    @include('partials.sidebar')

    <div id="content-wrapper" class="flex-fill">
      <!-- Topbar / Navbar -->
      @include('partials.topbar')

      <main class="container-fluid mt-4">
        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
      </main>

      <footer class="bg-light text-center py-3">
        &copy; {{ date('Y') }} {{ config('app.name') }}
      </footer>
    </div>
  </div>

  <!-- Put Admin JS files from public/admin/js/... -->
  <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/js/admin.js') }}"></script>
  @stack('scripts')
</body>
</html>
