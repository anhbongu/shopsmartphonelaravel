<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin::element.header')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('admin::element.sidebar')

        <!-- top navigation -->
        @include('admin::element.top_nav')
        <!-- /top navigation -->
         @yield('content')
        <!-- page content -->






        <!-- /page content -->

        <!-- footer content -->
        @include('admin::element.footer')
        <!-- /footer content -->
      </div>
    </div>

    @include('admin::element.script')
    
  </body>
</html>
