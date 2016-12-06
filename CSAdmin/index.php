<?php
require_once('config.php');
if(!empty($_SESSION['username'])){
include 'header.php'; 

$q=_rainsenitizedata(isset($_GET['q'])?$_GET['q']:NULL);
if($q=="")
{
include 'dashbord.php'; 
}
else if($q=="allproduct") {
	include 'allproduct.php';
} 
else if($q=="new-product") {
	include 'new-product.php';
} 
else if($q=="product-details") {
	include 'product-details.php';
}
else if($q=="new-marcent") {
	include 'new-marcent.php';
} 
else if($q=="all-marcent") {
	include 'all-marcent.php';
} 
else if($q=="new-purces") {
	include 'new-purces.php';
} 
else if($q=="marcent-details") {
	include 'marcent-details.php';
}
else if($q=="all-catagory") {
	include 'all-catagory.php';
} 
else if($q=="new-catagory") {
	include 'new-catagory.php';
}
else if($q=="new-add") {
	include 'new-add.php';
}
else if($q=="all-add") {
	include 'all-add.php';
}
else if($q=="new-add") {
	include 'new-add.php';
}
else if($q=="edit-add") {
	include 'edit-add.php';
}
else if($q=="all-banner") {
	include 'all-banner.php';
}
else if($q=="new-banner") {
	include 'new-banner.php';
}
else if($q=="edit-header-banner") {
	include 'edit-header-banner.php';
}
/*
else if($q=="") {
	include '';
} 
*/
else {
	include 'dashbord.php';
}


 include 'footer.php'; 
}
else
{
	header('location: login.php');
 }
 ?>
