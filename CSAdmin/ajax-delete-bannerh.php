<?php
require_once('config.php');
$id=_rainsenitizedata(isset($_GET['sid'])?$_GET['sid']:NULL);
$sql="DELETE FROM `es_banner` 
WHERE `_id` = $id";
 $q = $conn->prepare($sql);
 $q->execute() or die(print_r($q->errorInfo()));
?>