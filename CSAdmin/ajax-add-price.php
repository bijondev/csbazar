<?php
require_once('config.php');
$id=_rainsenitizedata(isset($_GET['pid'])?$_GET['pid']:NULL);
?>
<div class="modal-header">
  <a class="close" data-dismiss="modal">&times;</a>
  <h3>Add Product price</h3>
</div>
<div class="modal-body">
<form action="allphpaction.php" method="post">
<input type="hidden" name="pid" value="<?php echo $id; ?>">
<table>
	<tr>
		<td>Title</td>
		<td>:</td>
		<td><input id="firstname" name="title" type="text" placeholder="Your First Name" class="input-xlarge"></td>
	</tr>
	<tr>
		<td>Price</td>
		<td>:</td>
		<td><input id="firstname" name="price" type="text" placeholder="Your First Name" class="input-xlarge"></td>
	</tr>
	<tr>
		<td>Description</td>
		<td>:</td>
		<td><input id="firstname" name="description" type="text" placeholder="Your First Name" class="input-xlarge"></td>
	</tr>
	<tr>
		<td>In Stock</td>
		<td>:</td>
		<td><input id="firstname" name="instock" type="text" placeholder="Your First Name" class="input-xlarge"></td>
	</tr>
	<tr>
		<td>Min Perches qty</td>
		<td>:</td>
		<td><input id="firstname" name="minq" type="text" placeholder="Your First Name" class="input-xlarge"></td>
	</tr>
	<tr>
		<td>Max Perches qty</td>
		<td>:</td>
		<td><input id="firstname" name="maxq" type="text" placeholder="Your First Name" class="input-xlarge"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td> <input class="btn btn-large btn-success" type="submit" name="pricesave" value="Save" > </td>
	</tr>
</table>
</form>
</div>
