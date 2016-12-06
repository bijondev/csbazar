<div id="main">
<div class="container-fluid">
<div class="row-fluid">
<div class="span12">
<h3 class="page-title">
Dynamic Tables
</h3>
<ul class="breadcrumb">
<li>
<i class="icon-home"></i>
<a href="../dashboard.html">Dashboard</a>
<span class="icon-angle-right"></span>
</li>
<li><a href="#">Tables</a>
<span class="icon-angle-right"></span>
</li>
<li><a href="dynamic.html">Dynamic</a>
</li>
</ul> </div>
</div>
<div class="row-fluid">
<div class="span12">
<div class="social-box">
<div class="header">
<div class="btn-group hidden-phone">
<!--<a class="btn btn-primary" id="add-row" href="#"><i class="icon-pencil"></i> Add</a>
<a class="btn btn-danger disabled" href="#" id="delete-row"><i class="icon-trash"></i> Delete</a>-->
</div>
<div class="tools">
<button class="btn btn-success" data-toggle="collapse" data-target="#advanced-search"><i class="icon-filter"></i> Advanced Search</button>
<div class="btn-group">
<button class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i></button>

</div>
</div>
</div>
<div class="body">
<div id="advanced-search" class="collapse">
<table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-condensed well">
<thead>
<tr>
<th>Product Name</th>
<th>marcent</th>
<th>Catagory</th>
<th>Price</th>
</tr>
</thead>
<tbody>
<tr id="filter_global">
<td align="center">Global search</td>
<td align="center"><input type="text" name="global_filter" id="global_filter"></td>
<td align="center"><input type="checkbox" name="global_regex" id="global_regex"></td>
<td align="center"><input type="checkbox" name="global_smart" id="global_smart" checked></td>
</tr>
<tr id="filter_col1">
<td align="center">Rendering engine</td>
<td align="center"><input type="text" name="col1_filter" id="col1_filter"></td>
<td align="center"><input type="checkbox" name="col1_regex" id="col1_regex"></td>
<td align="center"><input type="checkbox" name="col1_smart" id="col1_smart" checked></td>
</tr>
<tr id="filter_col2">
<td align="center">Browser</td>
<td align="center"><input type="text" name="col2_filter" id="col2_filter"></td>
<td align="center"><input type="checkbox" name="col2_regex" id="col2_regex"></td>
<td align="center"><input type="checkbox" name="col2_smart" id="col2_smart" checked></td>
</tr>
</tbody>
</table>
</div>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
<thead>
<tr>
<th><input type="checkbox" id="toggle-checkboxes" value="option2"></th>
<th>Transection ID</th>
<th>Product</th>
<th>Price</th>
<th>payment Method</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<?php
        $sql = "SELECT t.`transection_no`, p.`p_name`, pp.`prc_price`, t.`p_method`, t.`p_status`, t.t_status, t.`t_id`
FROM
    `es_transections` AS `t`
    LEFT JOIN `es_products` AS `p` 
        ON (`t`.`product_id` = `p`.`p_id`)
    LEFT JOIN `es_users` AS `u`
        ON (`t`.`u_id` = `u`.`u_id`)
    LEFT JOIN `es_product_prices` AS `pp`
        ON (`t`.`price_id` = `pp`.`prc_id`)
    LEFT JOIN `es_marcents` AS `m`
        ON (`p`.`marchent_id` = `m`.`mr_id`) AND (`pp`.`p_id` = `p`.`p_id`)";
        $q = $conn->prepare($sql);
        $q->execute();
        while($result = $q->fetch(PDO::FETCH_OBJ))
        {
        ?>
<tr class="odd gradeX">
<td><input type="checkbox" id="inlineCheckbox2" value="option2"></td>
<td>
<a  data-toggle="modal" href="ajax-view-transection.php?tid=<?php echo $result->t_id; ?>">
<?php echo $result->transection_no; ?></a></td>
<td><?php echo $result->p_name; ?></td>
<td><?php echo $result->prc_price; ?></td>
<td class="center">
<span class="label label-warning">PM:
 <?php echo $result->p_method; ?>
</span>
<span class="label">
PS:
    <?php echo $result->p_status; ?>
</span>
<span class="label label-info">
DS:
    <?php echo $result->t_status; ?>
</span>


</td>
<td class="center">
	<button data-action="paymentconfirm" value="<?php echo $result->t_id; ?>" class="btn btn-small btn-primary">Paymend Confirm</button>
    <button data-action="deveveryconfirm" value="<?php echo $result->t_id; ?>" class="btn btn-small btn btn-info">Delevery Confirm</button>
    <button data-action="PaymentRejected" value="<?php echo $result->t_id; ?>" class="btn btn-small btn btn-danger">Rejected</button>

</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div> </div>
</div>
</div>