<?php
// configuration
session_start();
define("dbtype", "mysql");
define("dbhost", "localhost");
define("dbname", "eshop");
define("dbuser", "root");
define("dbpass", "");
define("baseurl", "http://localhost/csbazar/");

define("sendfrom", "info@csbazar.com");
define("addcc", "Chandranath Mazumder <cpluss2003@yahoo.com>");
define("bcc", "bijon.bairagi@gmail.com");

$conn = new PDO("mysql:host=".dbhost.";dbname=".dbname."",dbuser,dbpass);
require_once('sanitizer_function/sanitizer.php');
require_once('eden.php');
require_once('mail/PHPMailerAutoload.php');

function _mailsend($mailsubject, $mailto='Chandranath Mazumder <cpluss2003@yahoo.com>', $mailbody){
$mail = new PHPMailer();
$mail->isSendmail();
$mail->setFrom(sendfrom);
$mail->addReplyTo($mailto);
$mail->addAddress(addcc);
$mail->AddBCC(bcc);
$mail->Subject = $mailsubject;
$mail->Body = $mailbody;
$mail->IsHTML(true);
}

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
		function slug($str)
{
	$str = strtolower(trim($str));
	$str = preg_replace('/[^a-z0-9-]/', '-', $str);
	$str = preg_replace('/-+/', "-", $str);
	return $str;
}
 function currentPageURL() {
    $curpageURL = 'http';
    //if ($_SERVER["HTTPS"] == "on") {$curpageURL.= "s";}
    $curpageURL.= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
    $curpageURL.= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
    $curpageURL.= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $curpageURL;
    }
?>
