<?php include 'CSAdmin/config.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <meta charset="utf-8">
    <title>Cs Bazar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- Le styles -->
    <link href="<?php echo baseurl; ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo baseurl; ?>css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo baseurl; ?>css/style.css" id="main_style"  rel="stylesheet">
	<link href="<?php echo baseurl; ?>css/slider.css" id="slider_style" rel="stylesheet">
  <link href="<?php echo baseurl; ?>css/jquery-ui.css" id="slider_style" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?php echo baseurl; ?>js/jquery.js"></script>
  <script src="<?php echo baseurl; ?>js/jquery.jqzoom-core.js" type="text/javascript"></script>
  <script src="<?php echo baseurl; ?>js/jquery.ui.map.js" type="text/javascript"></script>
  <script src="<?php echo baseurl; ?>js/jquery-ui.min.js" type="text/javascript"></script>
  <script type="text/javascript">
  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=486943091353634";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
  </script>
<link rel="stylesheet" href="<?php echo baseurl; ?>css/jquery.jqzoom.css" type="text/css">
	<!--[if gte IE 9]>
		<script type="text/javascript">
			Cufon.set('engine', 'canvas');
		</script>
	<![endif]-->
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=8" />
	<![endif]-->
<script src="<?php echo baseurl; ?>js/scritps.js" type="text/javascript"></script>
<script src="<?php echo baseurl; ?>js/bkb-countdown.js" type="text/javascript"></script>
<div id="fb-root"></div>


  </head>
  <body><!-- FOR BACKGROUND COLOR & BACKGROUND IMAGE -->

  <div id="bg-effect">  <!-- FOR AWESOME BACKGROUND EFFECTS -->
  
  <!-- BEGIN HEADER -->
  	<header>
           <div class="fullwidth"> <!--fullwidth-->
            <div class="container"> <!--container-->            
                <div class="row"> <!--row-->

                        <div class="span4">
                            <div class="logoarea"><!-- BEGIN LOGOAREA -->
                                <a href="<?php echo baseurl; ?>">
                                    <img src="<?php echo baseurl; ?>img/logo1.png" alt="csbazar"><!-- LOGO IMAGE -->
                                </a>
                            </div>
                        </div>

                        <div class="span4 right">
                            <div class="contactarea"><!-- SOCIAL CONTACT -->
                               <ul class="nav nav-pills" style="margin-top: 12%;">
                               <?php
                               $busername=isset($_SESSION['busername'])?$_SESSION['busername']:NULL;
                               if(!empty($busername))
                               {
                               ?>
                               <li><a href="<?php echo baseurl; ?>logout.php">Welcome, <?php echo $_SESSION['u_name']; ?></a></li>
                                <li><a href="<?php echo baseurl; ?>logout.php">logout</a></li>
                                <?php
                              }
                              else{

                              ?>
                              <li>
                                <!--button id="fb-auth" class="fk-button-social fb ">Facebook Login</button>-->
                                </li>
                                <li><a href="<?php echo baseurl; ?>login">Sign In</a></li>
                                <li><a href="<?php echo baseurl; ?>SignUp">Registration</a></li>                                
                              <?php } ?>
                              <li><a href="<?php echo baseurl; ?>contact-us">Contact Us</a></li>    
                            </ul>
                            </div>
                            <div class="delivery_info">
<p>
<a href="http://www.csbazar.com/how-to-buy">
<img alt="" src="http://www.akhoni.com/media/wysiwyg/how-to-buy.png">
</a>
<img alt="Cash On Delivery" src="http://www.akhoni.com/media/wysiwyg/cashOnDelv.png" style="border-right: 1px solid #ffffff;">
<img alt="Replacement in 7days" src="http://www.akhoni.com/media/wysiwyg/replacement.png" style="border-right: 1px solid #ffffff;">
</p>
</div>
                        </div>
                        
                </div> <!--row-->
              </div>  <!--container-->
        </div>  <!--//fullwidth-->
        
         </div>
  	</header>
  <!-- END HEADER --> 