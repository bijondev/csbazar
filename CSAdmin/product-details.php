<style type="text/css">
	h3{
		background-color: #545454;
		color: #fff;
	}
</style>
<div id="main">
<div class="container-fluid">
<div class="row-fluid">
<div class="span12">
<h3 class="page-title">
Product Details
</h3>
<ul class="breadcrumb">
<li>
<i class="icon-home"></i>
<a href="#">Dashboard</a>
<span class="icon-angle-right"></span>
</li>
<li><a href="#">Add new product</a>

</li>
</ul> </div>
</div>
<div class="row-fluid">
<div class="span12">
<div class="social-box">
<div class="header">
 <?php
 	if(isset($_GET['pid'])?$_GET['pid']:NULL!=""){
 		$_SESSION['active_product']=isset($_GET['pid'])?$_GET['pid']:NULL;
 	}

        $pid =$_SESSION['active_product'];
        $sql = "SELECT * FROM `es_products` p, `es_marcents` m, `es_product_category` c
				WHERE p.`category_id`=c.`pc_id` AND p.`marchent_id`=m.`mr_id`
				AND p.`p_id`=?";
        $q = $conn->prepare($sql);
        $q->execute(array($pid)) or die(print_r($q->errorInfo()));

        $result = $q->fetch(PDO::FETCH_OBJ);
        //print_r($result);
        ?>
        <div class="bb-alert alert alert-info" style="display:none;">
        <span>The examples populate this alert with dummy content</span>
    </div>
<h4>Add New Product <a class="btn btn-small btn-success" href="ajax-edit-product.php?pid=<?php echo $pid; ?>" data-toggle="modal">Edit</a></h4>
</div>
<div class="body">

<fieldset>

<table>
	<tr>
		<td>Product Name</td>
		<td>:</td>
		<td><?php echo $result->p_name; ?></td>
	</tr>
	<tr>
		<td>Conditions</td>
		<td>:</td>
		<td><?php echo $result->p_conditions; ?></td>
	</tr>
	<tr>
		<td>Description</td>
		<td>:</td>
		<td><?php echo $result->p_descriptions; ?></td>
	</tr>
	<tr>
		<td>From date</td>
		<td>:</td>
		<td><?php echo $result->p_published_from_date; ?></td>
	</tr>
	<tr>
		<td>To date</td>
		<td>:</td>
		<td><?php echo $result->p_published_to_date; ?></td>
	</tr>
	<tr>
		<td>Marcent</td>
		<td>:</td>
		<td><?php echo $result->mr_company_name; ?></td>
	</tr>
	<tr>
		<td>Catagory</td>
		<td>:</td>
		<td><?php echo $result->pc_name; ?></td>
	</tr>
	<tr>
		<td>Original Price</td>
		<td>:</td>
		<td><?php echo $result->p_original_price; ?></td>
	</tr>
	<tr>
		<td> Hot</td>
		<td>:</td>
		<td><?php echo $result->p_hot; ?></td>
	</tr>
		<tr>
		<td> Products/Deals</td>
		<td>:</td>
		<td><?php echo $result->p_deals; ?></td>
	</tr>
		<tr>
		<td> SoldOut</td>
		<td>:</td>
		<td><?php echo $result->p_sold_out; ?></td>
	</tr>

</table>
<h3>Price Info</h3>
<table class="table table-striped">
	<tr>
		<th>Title</th>
		<th>Price</th>
		<th>description</th>
		<th>in stock</th>
		<th>Min Perches qty</th>
		<th>Max Perches qty</th>
		<th><a class="btn btn-small btn-success" href="ajax-add-price.php?pid=<?php echo $pid; ?>" data-toggle="modal">Add New</a></th>
	</tr>
	 <?php
        $sql = "SELECT * 
				FROM  `es_product_prices`
				where `p_id`=?";
        $q = $conn->prepare($sql);
        $q->execute(array($pid));
        while($result = $q->fetch(PDO::FETCH_OBJ))
        {
        ?>
	<tr>
		<td><?php echo $result->prc_title; ?></td>
		<td><?php echo $result->prc_price; ?></td>
		<td><?php echo $result->prc_description; ?></td>
		<td><?php echo $result->prc_instock; ?></td>
		<td><?php echo $result->prc_min_perches_qty; ?></td>
		<td><?php echo $result->prc_max_perches_qty; ?></td>
		<td><a class="btn btn-small btn-info" href="ajax-edit-price.php?pid=<?php echo $result->prc_id; ?>" data-toggle="modal">Edit</a>
		</td>
	</tr>
	<?php } ?>
</table>
<h3>Product Size</h3>
<table class="table table-striped">
	<tr>
		<th>Size</th>
		<th><a class="btn btn-small btn-success" href="ajax-add-size.php?pid=<?php echo $pid; ?>" data-toggle="modal">Add New</a></th>
		</tr>
<?php
        $sql = "SELECT * 
				FROM  `es_product_sizes`
				where `p_id`=?";
        $q = $conn->prepare($sql);
        $q->execute(array($pid));
        while($result = $q->fetch(PDO::FETCH_OBJ))
        {
        ?>
		<tr>
			<td><?php echo $result->ps_size; ?></td>
			<td><a class="btn btn-small btn-info" href="ajax-edit-size.php?pid=<?php echo $result->ps_id; ?>" data-toggle="modal">Edit</a>
			<button data-action="deleteproductsize" value="<?php echo $result->ps_id; ?>" class="btn btn-small btn-warning">Delete</button></td>
		</tr>
		<?php } ?>
		</table>

		<h3>Product Color</h3>
<table class="table table-striped">
	<tr>
		<th>Color Name</th>
		<th>Color</th>
		<th><a class="btn btn-small btn-success" href="ajax-add-color.php?pid=<?php echo $pid; ?>" data-toggle="modal">Add New</a></th>
		</tr>
<?php
        $sql = "SELECT * 
				FROM  `es_product_colors`
				where `p_id`=?";
        $q = $conn->prepare($sql);
        $q->execute(array($pid));
        while($result = $q->fetch(PDO::FETCH_OBJ))
        {
        ?>
		<tr>
			<td><?php echo $result->clr_name; ?></td>
			<td>
				<div style="height:16px; width:16px; border:1px solid #000; display:block; background:<?php echo $result->clr_code; ?>;"></div>
			</td>
			<td><a class="btn btn-small btn-info" href="ajax-edit-color.php?pid=<?php echo $result->clr_id; ?>" data-toggle="modal">Edit</a>
			<button data-action="deleteproductcolor" value="<?php echo $result->clr_id; ?>" class="btn btn-small btn-warning">Delete</button></td>
		</tr>
		<?php } ?>
		</table>

				<h3>Product Picture</h3>
<table class="table table-striped">
	<tr>
		<th>Picture path</th>
		<th>Picture</th>
		<th><a class="btn btn-small btn-success" href="ajax-add-picture.php?pid=<?php echo $pid; ?>" data-toggle="modal">Add New</a></th>
		</tr>
<?php
        $sql = "SELECT * 
				FROM  `es_product_pictures`
				where `p_id`=?";
        $q = $conn->prepare($sql);
        $q->execute(array($pid));
        while($result = $q->fetch(PDO::FETCH_OBJ))
        {
        ?>
		<tr>
			<td><?php echo $result->pp_path; ?></td>
			<td>
				<img src="../uploads/thumb/<?php echo $result->pp_path; ?>">
			</td>
			<td>
			<button data-action="deleteproductpicture" value="<?php echo $result->pp_id; ?>" class="btn btn-small btn-warning">Delete</button></td>
		</tr>
		<?php } ?>
		</table>
</fieldset>

</div>
</div>
</div>
</div>
</div>
 