<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>CS Bazar | Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="http://cesarlab.com/templates/social/assets/img/favicon.ico"/>
<link rel="icon" type="image/gif" href="assets/img/favicon.gif">
 
<link href="assets/css/twitter-bootstrap/bootstrap.css" rel="stylesheet">
<link href="assets/css/social.css" rel="stylesheet">
<link href="assets/css/social.plugins.css" rel="stylesheet">
<link href="assets/css/social.examples.css" rel="stylesheet">
<link href="assets/css/font-awesome.css" rel="stylesheet">
<link href="assets/css/twitter-bootstrap/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/docs.css" rel="stylesheet">
<link href="assets/js/jqvmap/jqvmap/jqvmap.css" rel="stylesheet">
<link href="assets/js/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css" rel="stylesheet">
<link href="assets/js/bootstrap-fileupload/bootstrap-fileupload.min.css" rel="stylesheet">
<link href="assets/js/datatables/media/DT_bootstrap.css" rel="stylesheet">
<style>#g1,#g2,#g3{width:200px;height:160px;display:inline-block; }</style>
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
<div class="wraper sidebar-full">
 
<aside class="social-sidebar sidebar-full">
<div class="user-settings">
<div class="arrow"></div>
<h3 class="user-settings-title">Settings shortcuts</h3>
<div class="user-settings-content">
<a href="#my-profile">
<div class="icon">
<i class="icon-user"></i>
</div>
<div class="title">My Profile</div>
<div class="content">View your profile</div>
</a>
<a href="#view-messages">
<div class="icon">
<i class="icon-envelope-alt"></i>
</div>
<div class="title">View Messages</div>
<div class="content">You have <strong>17</strong> new messages</div>
</a>
<a href="#view-pending-tasks">
<div class="icon">
<i class="icon-tasks"></i>
</div>
<div class="title">View Tasks</div>
<div class="content">You have <strong>8</strong> pending tasks</div>
</a>
</div>
<div class="user-settings-footer">
<a href="#more-settings">See more settings</a>
</div>
</div>
<div class="social-sidebar-content">
<div class="scrollable">
<div>
<div class="user">
<img class="avatar" width="25" height="25" src="assets/img/avatar-30.png" alt="Julio Marquez">
<span data-toggle="dropdown"><?php echo $_SESSION['username']; ?></span>
<i class="icon-user trigger-user-settings"></i>
</div>
<div class="navigation-sidebar">
<i class="switch-sidebar-icon icon-chevron-left"></i>
<i class="switch-sidebar-full icon-chevron-right"></i>
<span>Navigation</span>
</div>
<div class="search-sidebar">
<form class="search-sidebar-form">
<input type="text" class="search-query input-block-level" placeholder="Search">
</form>
</div>
</div>
	<section class="menu">
	<div class="accordion" id="accordion2">
			<div class="accordion-group active">
			<div class="accordion-heading">
			<a class="accordion-toggle opened" href="index.php">
			<img src="assets/img/icons/stuttgart-icon-pack/32x32/home.png" alt="Dashboard">
			<span>Dashboard </span><span class="badge">9</span> </a>
			</div>
			</div>

	<div class="accordion-group ">
	<div class="accordion-heading">
	<a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion2" href="#collapse-form-stuff">
	<img src="assets/img/icons/stuttgart-icon-pack/32x32/sitemap.png" alt="Form Stuff">
	<span>Product </span><span class="arrow"></span> </a>
	</div>
	<ul id="collapse-form-stuff" class="accordion-body collapse nav nav-list collapse ">
	<li><a href="?q=allproduct">All Product</a></li>
	<li><a href="?q=new-product">New Product</a></li>

	<li><a href="?q=all-catagory">All catagory</a></li>
	<li><a href="?q=new-catagory">New Catagory</a></li>
	</ul> 
	</div>
		<div class="accordion-group ">
	<div class="accordion-heading">
	<a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion2" href="#collapse-marcent">
	<img src="assets/img/icons/stuttgart-icon-pack/32x32/database.png" alt="Form Stuff">
	<span>eShop </span><span class="arrow"></span> </a>
	</div>
	<ul id="collapse-marcent" class="accordion-body collapse nav nav-list collapse ">
	<li><a href="?q=all-marcent">View All eShop</a></li>
	<li><a href="?q=new-marcent">New eShop</a></li>
	
	</ul> 
	</div>

		<div class="accordion-group ">
	<div class="accordion-heading">
	<a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion2" href="#collapse-Purces">
	<img src="assets/img/icons/stuttgart-icon-pack/32x32/statistics.png" alt="Form Stuff">
	<span>Purces </span><span class="arrow"></span> </a>
	</div>
	<ul id="collapse-Purces" class="accordion-body collapse nav nav-list collapse ">
	<li><a href="?q=new-purces">New Purces</a></li>
	<li><a href="?q=old-product">Old Purces</a></li>

	</ul> 
	</div>

			<div class="accordion-group ">
	<div class="accordion-heading">
	<a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion2" href="#collapse-add">
	<img src="assets/img/icons/stuttgart-icon-pack/32x32/world.png" alt="Maps">
	<span>Left Ads</span><span class="arrow"></span> </a>
	</div>
	<ul id="collapse-add" class="accordion-body collapse nav nav-list collapse ">
	<li><a href="?q=all-add">All Add</a></li>
	<li><a href="?q=new-add">New add</a></li>
	<li><a href="?q=all-banner">All Banner</a></li>
	<li><a href="?q=new-banner">New Banner</a></li>
	</ul> 
	</div>


	</div>
	</section>
</div>
</div>
</aside> 
<header>
 
<nav class="navbar navbar-blue navbar-fixed-top social-navbar">
<div class="navbar-inner">
<div class="container-fluid">
<a class="btn btn-navbar" data-toggle="collapse" data-target=".social-sidebar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
<a class="brand" href="index.php">
CSBazar
</a>
<ul class="nav pull-right nav-indicators">
<li class="dropdown nav-notifications">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<span class="badge">9</span><i class="icon-warning-sign"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-notifications-header">
<a tabindex="-1" href="#">You have <strong>9</strong> new notifications</a>
</li>
<li class="nav-notification-body text-info">
<a href="#">
<i class="icon-user"></i> New User
<small class="pull-right">Just Now</small>
</a>
</li>
<li class="nav-notification-body text-error">
<a href="#">
<i class="icon-user"></i> User Deleted
<small class="pull-right">Just Now</small>
</a>
</li>
<li class="nav-notification-body text-warning">
<a href="#">
<i class="icon-cogs"></i> Sever is overloaded
<small class="pull-right">2 minutes ago</small>
</a>
</li>
<li class="nav-notification-body">
<a href="#">
<i class="icon-briefcase"></i> Backup is completed
<small class="pull-right">4 minutes ago</small>
</a>
</li>
<li class="nav-notification-body text-info">
<a href="#">
<i class="icon-user"></i> New User
<small class="pull-right">Just Now</small>
</a>
</li>
<li class="nav-notification-body text-error">
<a href="#">
<i class="icon-user"></i> User Deleted
<small class="pull-right">Just Now</small>
</a>
</li>
<li class="nav-notification-body text-warning">
<a href="#">
<i class="icon-cogs"></i> Sever is overloaded
<small class="pull-right">3 minutes ago</small>
</a>
</li>
<li class="nav-notification-body">
<a href="#">
<i class="icon-briefcase"></i> Backup is completed
<small class="pull-right">6 minutes ago</small>
</a>
</li>
<li class="nav-notifications-footer">
<a tabindex="-1" href="#">View all messages
</a>
</li>
</ul>
</li>
<li class="dropdown nav-tasks">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<span class="badge">13</span>
<i class="icon-tasks"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-taks-header">
<a tabindex="-1" href="#">You have <strong>13</strong> tasks in progress</a>
</li>
<li>
<a>
<strong>Windows PC</strong><span class="pull-right">30%</span>
<div class="progress progress-danger active">
<div class="bar" style="width: 30%;"></div>
</div>
</a>
</li>
<li>
<a>
<strong>Mac</strong><span class="pull-right">40%</span>
<div class="progress progress-info active">
<div class="bar" style="width: 40%;"></div>
</div>
</a>
</li>
<li>
<a>
<strong>iPad/iPhone</strong><span class="pull-right">80%</span>
<div class="progress progress-striped active">
<div class="bar" style="width: 80%;"></div>
</div>
</a>
</li>
<li>
<a>
<strong>Android</strong><span class="pull-right">5%</span>
<div class="progress progress-success active">
<div class="bar" style="width: 5%;"></div>
</div>
</a>
</li>
<li>
<a>
<strong>Others</strong><span class="pull-right">15%</span>
<div class="progress progress-warning active">
<div class="bar" style="width: 15%;"></div>
</div>
</a>
</li>
<li class="nav-taks-footer">
<a tabindex="-1" href="#">View all tasks
</a>
</li>
</ul>
</li>
<li class="dropdown nav-messages">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<span class="badge">8</span>
<i class="icon-envelope-alt"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-messages-header">
<a tabindex="-1" href="#">You have <strong>8</strong> new messages</a>
</li>
<li class="nav-message-body">
<a>
<img src="assets/img/avatars/user-55x55.png" alt="User">
<div>
<small class="pull-right">Just Now</small>
<strong>Julio Marquez</strong>
</div>
<div>
Lorem ipsum dolor sit amet, consectetur...
</div>
</a>
</li>
<li class="nav-message-body">
<a>
<img src="assets/img/avatars/user-55x55.png" alt="User">
<div>
<small class="pull-right">Just Now</small>
<strong>Julio Marquez</strong>
</div>
<div>
Lorem ipsum dolor sit amet, consectetur...
</div>
</a>
</li>
<li class="nav-message-body">
<a>
<img src="assets/img/avatars/user-55x55.png" alt="User">
<div>
<small class="pull-right">Just Now</small>
<strong>Julio Marquez</strong>
</div>
<div>
Lorem ipsum dolor sit amet, consectetur...
</div>
</a>
</li>
<li class="nav-message-body">
<a>
<img src="assets/img/avatars/user-55x55.png" alt="User">
<div>
<small class="pull-right">Just Now</small>
<strong>Julio Marquez</strong>
</div>
<div>
Lorem ipsum dolor sit amet, consectetur...
</div>
</a>
</li>
<li class="nav-messages-footer">
<a tabindex="-1" href="#">View all messages
</a>
</li>
</ul>
</li>
<li class="divider-vertical"></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down"></i></a>
<ul class="dropdown-menu">
<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
<li><a href="#"><i class="icon-cogs"></i> Settings</a></li>
<li><a href="logout.php"><i class="icon-off"></i> Log Out</a></li>
<li class="divider"></li>
<li><a href="#"><i class="icon-info-sign"></i> Help</a></li>
</ul>
</li>
</ul>
</div>
</div>
</nav> </header>