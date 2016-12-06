<?php
require_once('config.php');
$id=_rainsenitizedata(isset($_GET['sid'])?$_GET['sid']:NULL);
$sql="UPDATE `es_users` SET 
            `u_status` = 'E'
            WHERE `u_id` =?";
            $q = $conn->prepare($sql);
             $q->execute(array($id)) or die(print_r($q->errorInfo()));
?>