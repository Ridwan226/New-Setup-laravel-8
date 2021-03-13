<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admin Area | Antri Apps</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('member/assets/images/favicon.ico') }}">
        
       
        <!-- morris css -->
        <link rel="stylesheet" href="{{ asset('member/plugins/morris/morris.css') }}">

        @yield('app-css')
        
         
        <!-- Sweet Alert -->
        <link href="{{ asset('member/plugins/sweet-alert2/sweetalert2.css') }}" rel="stylesheet" type="text/css">


        
        <link href="{{ asset('member/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('member/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('member/assets/css/style.css') }}" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Start right Content here -->
            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.templates.sidemane')
            <!-- ========== Left Sidebar End ========== -->
            
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <!-- Top Bar Start -->
                    @include('admin.templates.header')
                    <!-- Top Bar End -->
                    <div class="page-content-wrapper ">

                        @yield('content')
                     
                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                @include('admin.templates.footer')
            

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{ asset('member/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('member/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('member/assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('member/assets/js/detect.js') }}"></script>
        <script src="{{ asset('member/assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('member/assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('member/assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('member/assets/js/waves.js') }}"></script>
        <script src="{{ asset('member/assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('member/assets/js/jquery.scrollTo.min.js') }}"></script>
        
          <!-- Sweet-Alert  -->
          <script src="{{ asset('member/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
          <script src="{{ asset('member/assets/pages/sweet-alert.init.js') }}"></script>   

        <!--Morris Chart-->
        <script src="{{ asset('member/plugins/morris/morris.min.js') }}"></script>
        <script src="{{ asset('member/plugins/raphael/raphael.min.js') }}"></script>

        <!-- dashboard js -->
        <script src="{{ asset('member/assets/pages/dashboard.int.js') }}"></script>   
        
            
 

        <!-- App js -->
        <script src="{{ asset('member/assets/js/app.js') }}"></script>
        
        
        @yield('app-js')

    </body>
</html>