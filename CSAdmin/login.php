<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>CS Bazar | Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="http://cesarlab.com/templates/social/assets/img/favicon.ico"/>
<link rel="icon" type="image/gif" href="../../assets/img/favicon.gif">
 
<link href="assets/css/twitter-bootstrap/bootstrap.css" rel="stylesheet">
<link href="assets/css/social.css" rel="stylesheet">
<link href="assets/css/social.plugins.css" rel="stylesheet">
<link href="assets/css/social.examples.css" rel="stylesheet">
<link href="assets/css/font-awesome.css" rel="stylesheet">
<link href="assets/css/twitter-bootstrap/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/docs.css" rel="stylesheet">
<style type="text/css">body{padding-top:40px;padding-bottom:40px;background-color:#e9eaed;}</style>
<style>.wraper #main{margin-top:40px;}</style>
<script>
        ie = false;
    </script>
 
<!--[if lt IE 9]>
      <script src="/templates/social/assets/js/html5shiv.js"></script>
    <![endif]-->
<!--[if lte IE 8]>
    <script src="/templates/social/assets/js/respond/respond.min.js"></script>
    <script>
        ie = 8;
    </script>
    <![endif]-->
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/templates/social/assets/js/jquery-flot/excanvas.min.js"></script><![endif]-->

</head>
<body>
<div class="container">
<form class="form-login" method="post" action="allphpaction.php">
<h2 class="form-heading">Please log in</h2>
<input type="text" class="input-block-level" placeholder="Email address" name="username">
<input type="password" class="input-block-level" placeholder="Password" name="passwoer">
<div class="row-fluid">
<label class="checkbox span6">
<input type="checkbox" value="remember-me"> Remember me
</label>
<input class="btn btn-primary pull-right span6" name="login" type="submit" value="Log in" />
</div>
<div class="forget-password">
<p class="text-center">Forgot password? <a href="#" id="link-forgot">Click here to reset</a></p>
</div>
<div class="row-fluid">
<button id="btn-register" class="btn btn-success pull-right span12" name="login" type="button">Register</button>
</div>
</form>
<form class="form-register hide" method="get" action="#">
<h2 class="form-heading">Register</h2>
<div class="alert alert-info hide">
We sent you an <strong>activation link</strong> to your email
</div>
<div id="register-container">
<p class="text-center">Who are you?</p>
<div class="input-prepend input-fullwidth">
<span class="add-on"><i class="icon-user"></i></span>
<div class="input-wrapper">
<input type="text" placeholder="Username"/>
</div>
</div>
<div class="input-prepend input-fullwidth">
<span class="add-on"><i class="icon-envelope-alt"></i></span>
<div class="input-wrapper">
<input type="text" placeholder="Email"/>
</div>
</div>
<div class="input-prepend input-fullwidth">
<span class="add-on"><i class="icon-lock"></i></span>
<div class="input-wrapper">
<input type="text" placeholder="Password"/>
</div>
</div>
<div class="input-prepend input-fullwidth">
<span class="add-on"><i class="icon-ok-sign"></i></span>
<div class="input-wrapper">
<input type="text" placeholder="Repeat Password"/>
</div>
</div>
</div>
<div class="form-actions">
<button class="btn btn-primary btn-back" type="button"><i class="icon-angle-left"></i> Back</button>
<button class="btn btn-success pull-right" type="button" id="btn-register-user">Register</button>
</div>
</form>
<form class="form-forgot hide" method="get" action="http://cesarlab.com/templates/social/demo/dashboard.html">
<h2 class="form-heading">Forgot password</h2>
<p>Enter your email address to reset your password</p>
<div class="input-prepend input-fullwidth">
<span class="add-on"><i class="icon-envelope-alt"></i></span>
<div class="input-wrapper">
<input type="text" placeholder="Email"/>
</div>
</div>
<div class="form-actions">
<button class="btn btn-primary btn-back" type="button"><i class="icon-angle-left"></i> Back</button>
<button class="btn btn-success pull-right" type="button">Send</button>
</div>
</form>
<div class="form-footer-copyright">
2013 © <small>Social - Facebook UI Responsive Admin Template</small>
</div>
</div>  
 
<script src="assets/js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="assets/js/jquery-ui/js/jquery-ui-1.10.1.custom.min.js"></script>
<script src="assets/js/twitter-bootstrap/bootstrap.js"></script>
<script src="assets/js/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!--[if lte IE 8]>
    <script src="/templates/social/assets/js/placeholders/placeholders.min.js"></script>
    <![endif]-->
<script src="assets/js/extents.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/login.js"></script>
 

</body>

</html>
