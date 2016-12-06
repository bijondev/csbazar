<?php
// configuration
session_start();
define("dbtype", "mysql");
define("dbhost", "localhost");
define("dbname", "eshop");
define("dbuser", "root");
define("dbpass", "");
define("baseurl", "http://localhost/csbazarf/");

$conn = new PDO("mysql:host=".dbhost.";dbname=".dbname."",dbuser,dbpass);
require_once('sanitizer_function/sanitizer.php');
require_once('eden.php');

function _checkuniqurl($slug){

$conn = new PDO("mysql:host=".dbhost.";dbname=".dbname."",dbuser,dbpass);
    	 $sql="SELECT p_url FROM es_products where p_url=?";
        $q = $conn->prepare($sql) or die("ERROR: " . implode(":", $conn->errorInfo()));
        $q->execute(array($slug));
        $total = $q->rowCount();
        return $total;
}

function _makeuniqurl($slug){
	if(_checkuniqurl($slug)==0){
		$url =$slug;
		echo "++++Yes+++";
	}
	else{
		echo "++++NOOO+++";
		$x=1;
			while($x++) {
			  $url=$slug."-".$x;
			  //echo _checkuniqurl($slug)."check moooo";
			  if(_checkuniqurl($url)==0){
					break;
				}
			  }

	}

	return $url;
	}
?>
