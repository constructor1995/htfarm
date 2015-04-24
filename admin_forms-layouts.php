

<?php
    include ("assets/core/loader.php");
    include ("assets/core/alert.php");

    error_reporting(E_ERROR);
    if(empty($_SESSION))
    {
        session_start();
    }
    if(isset($_SESSION['username']))
    {

    }
    if(isset($_POST['alert']))
    {
        if(isset($_POST['trial']))
        {
            if (($_FILES["img"]["type"] == "image/png") || ($_FILES["img"]["type"] == "image/jpg") || ($_FILES["img"]["type"] == "image/jpeg"))
            {
                if ($_FILES["img"]["error"] > 0) {
                   // echo "Return Code: " . $_FILES["picture"]["error"] . "<br/><br/>";
                } 
                else 
                {
                    
                    if (file_exists("images/" . $_FILES["img"]["name"])) {
                        echo $_FILES["img"]["name"] . " <b>already exists.</b> ";
                    } 
                    else 
                    {
                        move_uploaded_file($_FILES["img"]["tmp_name"], "images/" . $_FILES["img"]["name"]);
                          $jarvis = new InsertAdmin($_POST['pname'], $_POST['weather'], $_POST['parea'], $_POST['measure'], $_POST['address'], $_POST['state'], $_POST['city'], '', $_POST['datepicker2'], $_POST['pared'], $_POST['datepicker1'], 
            '', $_POST['location'], $_POST['cname']);
                    }
                }
        } 
         $jarvis = new InsertAdmin($_POST['pname'], $_POST['weather'], $_POST['parea'], $_POST['measure'], $_POST['address'], $_POST['state'], $_POST['city'], '', $_POST['datepicker2'], $_POST['pared'], $_POST['datepicker1'], 
            '', $_POST['location'], $_POST['cname'], $_FILES["img"]["name"]);
        }
    }


?>

<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>HotFarm - Happy Farmer</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="admin-layout-page">

    

    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
        <header class="navbar navbar-fixed-top bg-light">
            <div class="navbar-branding">
                <a class="navbar-brand" href="dashboard.html"> <b>Hot</b>Farm <img src = "img/hotfarm.png" alt = '' width = 50 height = 50 /></a>
                <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
                <ul class="nav navbar-nav pull-right hidden">
                    <li>
                        <a href="#" class="sidebar-menu-toggle">
                            <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                        </a>
                    </li>
                </ul>
            </div>
            <form class="navbar-form navbar-left navbar-search ml5" role="search" method = "GET" action = "results.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search..." name = "search" />
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="assets/img/avatars/5.jpg" alt="avatar" class="mw30 br64 mr15">
                        <span><?php 
    error_reporting(E_ERROR);
      if(empty($_SESSION))
      {
          session_start();
      }
      if(isset($_SESSION['username']))
      {
          echo $_SESSION['username'];
      }
      ?></span>
                        <span class="caret caret-tp"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu" >        
                        <li class="br-t of-h">
                            <a href="assets/core/logout.php" class="fw600 p12 animated animated-short fadeInDown" >
                                <span class="fa fa-power-off pr5"></span> Logout </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        

        <!-- Start: Content -->
        <section id="content_wrapper">

            

            <!-- Begin: Content -->
            <section id="content" class="table-layout">

                <!-- begin: .tray-center -->
                <div class="tray tray-center p30 va-t posr animated-delay animated-long" data-animate='["800","fadeIn"]'>
                    <div class="">

                        <div class="tab-content mw900 center-block">


                            <!-- Registration 2 -->
                            <div class="admin-form tab-pane active" id="register2" role="tabpanel">
                                <div class="panel panel-danger heading-border">
                                    <div class="panel-heading">
                                        <span class="panel-title"><i class="fa fa-pencil-square"></i>Pest/Disease Alert Form</span>
                                    </div>
                                    <!-- end .form-header section -->

                                    <form method="post" enctype = "multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="form-register2">
                                        <div class="panel-body p25">
                                            <div class="section-divider mt10 mb40">
                                                <span>Pest Profile</span>
                                            </div>
                                            <!-- .section-divider -->
                                            
                                            <div class="section row">
                                            <div class="col-md-6">
                                                <label for="email" class="field prepend-icon">
                                                    <input type="text" name="pname" id="pname" class="gui-input" placeholder="Pest/Disease name">
                                                    <label for="pname" class="field-icon"><i class="fa fa-user"></i>
                                                    </label>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="weather" class="field prepend-icon">
                                                    <div class = "select" >
                                                        <select name = 'weather'>
                                                            <option value = "Select Season">Select Season</option>
                                                            <option value = "Dry Season">Dry Season</option>
                                                            <option value = "Rainy Season">Rainy Season</option>
                                                            <option value = "Harmattan">Harmattan</option>
                                                        </select>
                                                    </div>
                                                </label>
                                            </div>
                                            </div>

                                            <div class="section row">
                                            <div class="col-md-6">
                                                <label for="email" class="field prepend-icon">
                                                    <input type="text" name="cname" id="pname" class="gui-input" placeholder="Crop name">
                                                    <label for="pname" class="field-icon"><i class="fa fa-user"></i>
                                                    </label>
                                                </label>
                                            </div>
                                           
                                           <div class="col-md-6">
                                                    <label><b>show us an image</b></label>
                                                    <input type="file" name="img" id="pname" placeholder="Crop name">
                                                   
                                               
                                            </div>
                                            </div>
                                            <!-- end section -->
                                            
                                            <div class="section row">
                                                <div class="col-md-6">
                                                    <label for="datepicker1" class="field prepend-icon">
                                                    <input type="text" id="datepicker1" name="datepicker1" class="gui-input" placeholder="Date Pest/Disease started">
                                                    <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                                <!-- end section -->

                                                <div class="col-md-6">
                                                <label for="parea" class="field prepend-icon">
                                                        <input type="number"  min="1" max="100" name="parea" id="parea" class="gui-input" placeholder="Percentage area currently affected">
                                                        <label for="parea" class="field-icon">%</label>
                                                    </label>
                                                </div>
                                                <!-- end section -->
                                                
                                            </div>
                                            <!-- end .section row section -->

                                            

                                            <div class="section">
                                                    <label for="measure" class="field prepend-icon">
                                                        <textarea name="measure" id="measure" class="gui-textarea" placeholder="Control measures taken" cols="" rows=""></textarea>
                                                        <label for="measure" class="field-icon"><i class="fa fa-user"></i>
                                                        </label>
                                                    </label>
                                            </div>
                                            <!-- end section -->
                                            
                                            <div class="section-divider mv40">
                                                <span>Farm Location</span>
                                            </div>
                                            <!-- .section-divider -->
                                            
                                            <div class="section">
                                                    <label for="address" class="field prepend-icon">
                                                        <textarea name="address" id="address" class="gui-textarea" placeholder="Address of FarmLand" cols="" rows=""></textarea>
                                                        <label for="address" class="field-icon"><i class="fa fa-user"></i>
                                                        </label>
                                                    </label>
                                            </div>
                                            <!-- end section -->
                                            <div class="section row">
                                                <div class="col-md-6">
                                                <label for="state" class="field prepend-icon">
                                                    <input type="text" name="state" id="state" class="gui-input" placeholder="State">
                                                </label>
                                                </div>
                                                <!-- end section -->

                                                <div class="col-md-6">
                                                 <label for="city" class="field prepend-icon">
                                                    <input type="text" name="city" id="city" class="gui-input" placeholder="City">
                                                </label>
                                                </div>
                                                <!-- end section -->
                                                
                                            </div>
                                            <!-- end .section row section -->
                                            
                                            <div class="section">
                                                    <label class="field select">
                                                        <select id="location" name="location">
                                                            <option value="">Select country...</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AG">Antigua and Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan Republic</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="BN">Brunei</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="C2">China Worldwide</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="CD">Democratic Republic of the Congo</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="GA">Gabon Republic</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Laos</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="FM">Micronesia</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="AN">Netherlands Antilles</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn Islands</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="CG">Republic of the Congo</option>
                                                            <option value="RE">Reunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russia</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="KN">Saint Kitts and Nevis Anguilla</option>
                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                            <option value="VC">Saint Vincent and Grenadines</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">São Tomé and Príncipe</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="KR">South Korea</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SH">St. Helena</option>
                                                            <option value="LC">St. Lucia</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="TW">Taiwan</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="US">United States</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VA">Vatican City State</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="VG">Virgin Islands (British)</option>
                                                            <option value="WF">Wallis and Futuna Islands</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                        </select>
                                                        <i class="arrow double"></i>
                                                    </label>
                                                <!-- end section -->
                                                
                                            </div>
                                            
                                            <div class="section-divider mv40">
                                                <span>Harvest Record - this shouldn't be filled if harvest hasn't taken place</span>
                                            </div>
                                            <!-- .section-divider -->
                                            
                                            <div class="section row">
                                                <div class="col-md-6">
                                                    <label for="datepicker2" class="field prepend-icon">
                                                    <input type="text" id="datepicker2" name="datepicker2" class="gui-input" placeholder="Date of Harvest">
                                                    <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                                <!-- end section -->

                                                <div class="col-md-6">
                                                <label for="parea" class="field prepend-icon">
                                                        <input type="number"  min="1" max="100" name="pared" id="parea" class="gui-input" placeholder="Percentage of harvest destroyed">
                                                        <label for="parea" class="field-icon">%</label>
                                                    </label>
                                                </div>
                                                <!-- end section -->
                                                </div>

                                            

                                            <div class="section">
                                                <label class="option block">
                                                    <input type="checkbox" name="trial">
                                                    <span class="checkbox"></span>I am sure all informations given here are real and correct.
                                                </label>
                                            </div>
                                            <!-- end section -->

                                        </div>
                                        <!-- end .form-body section -->
                                        <div class="panel-footer">
                                            <button type="submit" class="btn btn-primary" name = "alert">Send an Alert</button>
                                        </div>
                                        <!-- end .form-footer section -->
                                    </form>
                                </div>
                                <!-- end .admin-form section -->
                            </div>
                            <!-- end: .admin-form -->

                        </div>

                    </div>
                </div>
                <!-- end: .tray-center -->

                <!-- begin: .tray-right -->
                <aside class="tray tray-right tray320 va-t pn" data-tray-height="match">

                   
                    <div class="animated-delay p20 pb15" data-animate='["300","fadeIn"]'>
                        <h4 class="mt5 mb20">My Alerts</h4>
                        <ul class="fs14 list-unstyled list-spacing-10 mb10 pl5">
                            <?php
                                $tree = new Alert_me();
                                $tree->check_user();
                            ?>
                           
                        </ul>
                    </div>

                </aside>
                <!-- end: .tray-right -->

            </section>
            <!-- End: Content -->

        </section>

        
    </div>
    <!-- End: Main -->

    <style>
    
    /* demo page styles */
    body {
        min-height: 2300px;
    }
    .affix-pane.affix {
        top: 80px;
        width: 289px;
    }
    .admin-form .panel.heading-border:before,
    .admin-form .panel .heading-border:before {
        transition: all 0.7s ease;
    }
    .custom-nav-animation li {
        display: none;
    }
    .custom-nav-animation li.animated {
        display: block;
    }
    </style>

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


            // Init Theme Core    
            Core.init();

            // Init Theme Core    
            Demo.init();

            // Custom page animation
            setTimeout(function() {
                $('.custom-nav-animation li').each(function(i, e) {
                    var This = $(this);
                    var timer = setTimeout(function() {
                        This.addClass('animated animated-short zoomIn');
                    }, 50 * i);
                });
            }, 500);


            $('.animation-nav').click(function() {
                $('.animation-nav').removeClass('btn-primary').addClass('btn-default');
                $(this).addClass('btn-primary');
            });

            // Form switcher nav
            var formSwitches = $('.admin-form-list a');

            formSwitches.on('click', function() {
                formSwitches.removeClass('item-active');
                $(this).addClass('item-active')

                if ($(this).attr('href') === "#contact3") {
                    setTimeout(function() {
                        initialize();
                    },100);
                }

            });

            // Contact form - Gmap
            function initialize() {
                var mapOptions = {
                    zoom: 10,
                    center: new google.maps.LatLng(29.760193, -95.369390),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
                var marker = new google.maps.Marker({
                    map: map,
                    draggable: false,
                    position: new google.maps.LatLng(29.760193, -95.369390)
                });
            }
            google.maps.event.addDomListener(window, 'resize', initialize);
            google.maps.event.addDomListener(window, 'load', initialize);


        });
    </script>
    <script type="text/javascript">


            /* @date picker
            ------------------------------------------------------------------ */
            $("#datepicker1").datepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: false
            });
			
			$("#datepicker2").datepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: false
            });


            $('.inline-dp').datepicker({
                numberOfMonths: 1,
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: false
            });

    </script>
    <!-- END: PAGE SCRIPTS -->

</body>

</html>
