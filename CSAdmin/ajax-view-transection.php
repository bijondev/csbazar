<?php
require_once('config.php');
$tid=_rainsenitizedata(isset($_GET['tid'])?$_GET['tid']:NULL);
        $sql = "SELECT t.`transection_no`, p.p_name, p.p_url, t.total_price, t.quantaty, t.p_status, t.t_status, p.`p_name`, pp.`prc_price`, t.`p_method`, t.`p_status`, t.`t_id`, u.u_name, u.username, u_phone, u.u_address
FROM
    `es_transections` AS `t`
    LEFT JOIN `es_products` AS `p` 
        ON (`t`.`product_id` = `p`.`p_id`)
    LEFT JOIN `es_users` AS `u`
        ON (`t`.`u_id` = `u`.`u_id`)
    LEFT JOIN `es_product_prices` AS `pp`
        ON (`t`.`price_id` = `pp`.`prc_id`)
    LEFT JOIN `es_marcents` AS `m`
        ON (`p`.`marchent_id` = `m`.`mr_id`) AND (`pp`.`p_id` = `p`.`p_id`)
        where t_id=?";
        $q = $conn->prepare($sql);
        $q->execute(array($tid)) or die(print_r($q->errorInfo()));
        $result = $q->fetch(PDO::FETCH_OBJ);
?>
<link href="assets/css/twitter-bootstrap/bootstrap.css" rel="stylesheet">
<div class="modal-header">
  <a class="close" data-dismiss="modal">&times;</a>
  <h3>Transection Details</h3>
</div>
<div class="modal-body">

<div class="control-group">
<span class="label label-success"><b>Payment Status :</b>
<?php echo $result->p_status; ?></span>
</div>

<div class="control-group">
<b>Transection No :</b>
<?php echo $result->transection_no; ?>
</div>

<div class="control-group">
<b>E-mail :</b>
<?php echo $result->username; ?>
</div>

<div class="control-group">
<b>Phone :</b>
<?php echo $result->u_phone; ?>
</div>

<div class="control-group">
<b>Address :</b>
<?php echo $result->u_address; ?>
</div>

<div class="control-group">
<b>Payment Method :</b>
<?php echo $result->p_method; ?>
</div>

<div class="control-group">
<b>Quentaty :</b>
<?php echo $result->quantaty; ?>
</div>

<div class="control-group">
<b>Total Taka :</b>
<?php echo $result->total_price; ?>
</div>

<h2>product Details</h2>

<div class="control-group">
<b>Product Name :</b>
<a target="blank" href="<?php echo baseurl; ?><?php echo $result->p_url; ?>">
<?php echo $result->p_name; ?>
</a>
</div>
<div class="control-group">
<b>price :</b>
<?php echo $result->prc_price; ?>
</div>

</div>
