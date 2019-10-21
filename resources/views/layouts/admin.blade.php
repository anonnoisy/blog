<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials.admin.head')
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_navbar.html -->
      @include('components.admin.navbar')
      <!-- partial -->

      <div class="container-fluid page-body-wrapper">

        <!-- partial:partials/_sidebar.html -->
        @include('components.admin.sidebar')
        <!-- partial -->

        <div class="main-panel">
          
          @yield('content')

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('components.admin.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    
    <!-- plugins:js -->
    @include('partials.admin.javascript')

    <!-- End custom js for this page-->
  </body>
</html>