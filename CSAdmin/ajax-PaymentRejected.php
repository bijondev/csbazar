<?php
require_once('config.php');
$id=_rainsenitizedata(isset($_GET['sid'])?$_GET['sid']:NULL);
$sql="UPDATE  `es_transections` SET  `p_status` =  'reject' 
WHERE  `es_transections`.`t_id` =?";
 $q = $conn->prepare($sql);
 $q->execute(array($id)) or die(print_r($q->errorInfo()));
?>