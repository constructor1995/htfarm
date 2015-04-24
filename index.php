
<?php
  include("assets/core/auth.php");
  include("assets/core/handle_reg.php");


  if(isset($_POST['login']))
  {
      $jarvis = new Devniche_auth($_POST['user'], $_POST['pass']);
  } 


  if(isset($_POST['send']))
  {
      $fl = new Hotfarm_registration($_POST['email'], $_POST['password'], $_POST['phoneno'], $_POST['firstname']);
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
      .modal-content
      {
          padding : 20px;
      }
    </style>
</head>

<body>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1 style="color:#FFF"><img src = "img./hotfarm.png" alt = "" />HotFarm </h1>
            <h3 style="color:#FFF">Alert/Advice others of crop pest around you or find help.</h3>
            <br>
<button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#login">
  Login
</button>            <span style="color:#FFF">OR</span>
<button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#reg">
  Register
</button>         </div>
    </header>
    
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" class="form-horizontal">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p class="modal-title">Login</p>
      </div>
      <div class="modal-body">
      <div class="row">
                            <div class="col-md-12">
       <div class="form-group">
        	<input type="text" name="user" id="user" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
        	<input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
        </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name = "login">Login</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="reg">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" class="form-horizontal">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p class="modal-title">Register</p>
      </div>
      <div class="modal-body">
      <div class="row">
                            <div class="col-md-12">
       <div class="form-group">
        	<input type="text" name="email" id="user" class="form-control" placeholder="Email Address">
        </div>
        <div class="form-group">
        	<input type="text" name="phoneno" id="user" class="form-control" placeholder="Phone Number">
        </div>
        <div class="form-group">
        	<input type="text" name="password" id="user" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
        	<input type="text" name="firstname" id="user" class="form-control" placeholder="Firstname">
        </div>
       
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name = "send" >Register</button>
      </div>
      </form>
    </div>
  </div>
</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
