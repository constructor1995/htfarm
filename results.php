<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>AdminDesigns - A Responsive HTML5 Admin UI Framework</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="faq-page">

    

    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
        <header class="navbar navbar-fixed-top bg-light">
            <div class="navbar-branding">
                <a class="navbar-brand" href="dashboard.html"> <b>Hot</b>Farm </a>
                <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
                <ul class="nav navbar-nav pull-right hidden">
                    <li>
                        <a href="#" class="sidebar-menu-toggle">
                            <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                        </a>
                    </li>
                </ul>
            </div>
            <form class="navbar-form navbar-left navbar-search ml5" method = "GET" action = "<?php echo $_SERVER['PHP_SELF']; ?>" >
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search..." value="<?php
                    if(isset($_GET['search']))
                    {
                        echo $_GET['search'];
                    }
                     ?>" name = "search" />
                </div>
            </form>
            
        </header>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
      <aside id="sidebar_left" class="nano nano-primary">
            <div class="nano-content">

                

                <!-- sidebar menu -->
                <ul class="nav sidebar-menu">
                    <li class="sidebar-label pt20">Menu</li>
                    <a href = "admin_forms-layouts" ><li>
                        <a class="accordion-toggle" href="admin_forms-layouts.php">
                            <span class="glyphicons glyphicons-stopwatch"></span>
                            <span class="sidebar-title">Home</span>
                            
                        </a>
                    </li></a>
                    <li>
                        <a class="accordion-toggle" href="assets/core/logout.php">
                            <span class="glyphicons glyphicons-stopwatch"></span>
                            <span class="sidebar-title">Logout</span>
                           
                        </a>
                    </li>
                    
                    
            </div>
      </aside>


        <!-- Start: Content -->
        <section id="content_wrapper">

                        

            
            <!-- Begin: Content -->
            <section id="content">

                <div class="row mt30 center-block">
                    <div class="col-md-12">
                        <div class="panel br-t bw5 br-grey mn">
                            <div class="panel-heading hidden">
                                <span class="panel-icon"><i class="fa fa-pencil"></i>
                                </span>
                                <span class="panel-title"> Title</span>
                            </div>

                            <div class="panel-body pn">
                                
                                
                                <div class="p25 br-t">
                                    <h5 class="text-muted mb20 mtn"> Search Results </h5>
                                    <div class="panel-group accordion accordion-lg" id="accordion1">
                                        <?php
                                            include ('assets/core/Handle_search.php');
                                            if(isset($_GET['search']))
                                            {
                                                $kor = new Handle_search($_GET['search']);
                                            }
                                            else

                                            {
                                                echo "not set";
                                            }
                                        ?>
                                    </div>
                                </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>

            </section>
            <!-- End: Content -->

        </section>

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Demo JS    
            Demo.init();

        });
    </script>
    <!-- END: PAGE SCRIPTS -->

</body>

</html>
