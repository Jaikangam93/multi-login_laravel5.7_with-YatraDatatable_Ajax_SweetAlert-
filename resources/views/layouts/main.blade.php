<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>

<body>
 
    @include('partials.navbar')
  

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            @yield('content')

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>
</html>
