<?php
// configuration
session_start();
define("dbtype", "mysql");
define("dbhost", "localhost");
define("dbname", "csbazar_bkb");
define("dbuser", "csbazar_csb");
define("dbpass", "789632145");
define("baseurl", "http://csbazar.com/demo/");

$conn = new PDO("mysql:host=".dbhost.";dbname=".dbname."",dbuser,dbpass);
require_once('sanitizer_function/sanitizer.php');
require_once('eden.php');
?>