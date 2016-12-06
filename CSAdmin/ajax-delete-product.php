<?php
require_once('config.php');
$id=_rainsenitizedata(isset($_GET['sid'])?$_GET['sid']:NULL);

$sql="DELETE FROM `es_product_pictures` 
WHERE `es_product_pictures`.`p_id` = $id";
 $q = $conn->prepare($sql);
 $q->execute() or die(print_r($q->errorInfo()));

$sql="DELETE FROM `es_product_colors` 
WHERE `es_product_colors`.`clr_id` = $id";
 $q = $conn->prepare($sql);
 $q->execute() or die(print_r($q->errorInfo()));

$sql="DELETE FROM `es_product_sizes` WHERE `es_product_sizes`.`p_id` = $id";
 $q = $conn->prepare($sql);
 $q->execute() or die(print_r($q->errorInfo()));

 $sql="DELETE FROM `es_product_prices` WHERE `p_id` = $id";
 $q = $conn->prepare($sql);
 $q->execute() or die(print_r($q->errorInfo()));

  $sql="DELETE FROM `es_products` WHERE `p_id` = $id";
 $q = $conn->prepare($sql);
 $q->execute() or die(print_r($q->errorInfo()));
?>
