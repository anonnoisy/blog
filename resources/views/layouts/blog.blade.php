<!DOCTYPE html>
<html lang="en">

<head>

  @include('partials.blog.head')

</head>

<body>

  <!-- Navigation -->
  @include('components.blog.navbar')

  <!-- Page Header -->
  @yield('header')

  <!-- Main Content -->
  <div class="container">
    
    {{-- content is here --}}
    @yield('content')

  </div>

  <hr>

  <!-- Footer -->
  @include('components.blog.footer')

  {{-- javascript --}}
  @include('partials.blog.javascript')

</body>

</html>
