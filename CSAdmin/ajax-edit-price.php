<?php
require_once('config.php');
$id=_rainsenitizedata(isset($_GET['pid'])?$_GET['pid']:NULL);

$sql = "Select prc_title, prc_price, prc_description, prc_instock,  	prc_min_perches_qty, prc_max_perches_qty from es_product_prices where prc_id=?";
        $q = $conn->prepare($sql);
        $q->execute(array($id)) or die(print_r($q->errorInfo()));

        $result = $q->fetch(PDO::FETCH_OBJ);
?>
<div class="modal-header">
  <a class="close" data-dismiss="modal">&times;</a>
  <h3>Edit Product price</h3>
</div>
<div class="modal-body">
<form action="allphpaction.php" method="post">
<input type="hidden" name="pid" value="<?php echo $id; ?>">
<table>
	<tr>
		<td>Title</td>
		<td>:</td>
		<td><input name="title" 
		value="<?php echo $result->prc_title; ?>" type="text" placeholder="price title" class="input-xlarge"></td>
	</tr>
	<tr>
		<td>Price</td>
		<td>:</td>
		<td><input name="price" 
		value="<?php echo $result->prc_price; ?>" type="text" placeholder="Enter Price" class="input-xlarge"></td>
	</tr>
	<tr>
		<td>Description</td>
		<td>:</td>
		<td>
		<textarea name="description" placeholder="Enter Description"><?php echo $result->prc_description; ?></textarea>
		</td>
	</tr>
	<tr>
		<td>In Stock</td>
		<td>:</td>
		<td><input name="instock"  
		value="<?php echo $result->prc_instock; ?>" type="text" placeholder="Stock Quentaty" class="input-xlarge"></td>
	</tr>
	<tr>
		<td>Min Perches qty</td>
		<td>:</td>
		<td><input name="minq"  
		value="<?php echo $result->prc_min_perches_qty; ?>" type="text" placeholder="Max Purces Quantity" class="input-xlarge"></td>
	</tr>
	<tr>
		<td>Max Purces Quantity</td>
		<td>:</td>
		<td><input name="maxq"  
		value="<?php echo $result->prc_max_perches_qty; ?>" type="text" placeholder="Your First Name" class="input-xlarge"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td> <input class="btn btn-small btn-success" type="submit" 
		name="price-edit" value="Save" > </td>
	</tr>
</table>
</form>
</div>
