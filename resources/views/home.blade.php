<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->


    <!-- Theme JS files -->
    <script type="text/javascript" src="assets/js/core/app.js"></script>

    <script type="text/javascript" src="assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /theme JS files -->

</head>

<body class="login-container">

    <!-- Main navbar -->
  <div class="navbar navbar-inverse">
    <div class="navbar-header">
      <a class="navbar-brand" href=""><img src="assets/images/logo_light.png" alt=""></a>

      <ul class="nav navbar-nav visible-xs-block">
        <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
        <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
      </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
      


    </div>
  </div>
  <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">

                    <!-- Error title -->
                    <div class="text-center content-group">
                        <h1 class="error-title">ERROR!</h1>
                        <h5>Oops, You forgot to logout properly last time!</h5>
                    </div>
                    <!-- /error title -->


                    <!-- Error content -->
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                            
                                

                                <div class="text-center">
                                    <a href="{{ route('logout') }}" role="menuitem" class="btn bg-success" onclick="event.preventDefault();document.getElementById('logout-form').submit();" >
                                    <i class="icon-circle-left2 position-left"></i>Log out</a>


                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                </div>
                            
                        </div>
                    </div>
                    <!-- /error wrapper -->


                    <!-- Footer -->
                    <div class="footer text-muted text-center">
                        &copy; 2018. <a href="#">SymBios Creations Limited</a> <a href="http://themeforest.net/user/Kopyov" target="_blank"></a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>
</html>
