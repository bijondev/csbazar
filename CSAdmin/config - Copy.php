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
?>
