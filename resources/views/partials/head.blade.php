    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multi Role </title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/core.css' )}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/components.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/colors.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

     <!-- New Added  out of the Theme -->
     <link href="{{ asset('ajax/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
     <!-- close New Added  out of the Theme -->
 
  
    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('assets/js/plugins/loaders/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/core/libraries/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/core/libraries/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/pickers/daterangepicker.js')}}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/core/app.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/dashboard.js')}}"></script>
    <!-- /theme JS files -->


    <!--  Select Plugin  --> 
    <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/core/libraries/jquery_ui/interactions.min.js')}}"></script>
    <!--  Close for Select Plugin  --> 


    <!--  Core below --> 
    <script type="text/javascript" src=" {{ asset('assets/js/pages/picker_date.js')}} "></script>
    <script type="text/javascript" src="  {{ asset('assets/js/pages/form_select2.js')}}"></script>
    <script type="text/javascript" src=" {{ asset('assets/js/plugins/ui/ripple.min.js')}} "></script>