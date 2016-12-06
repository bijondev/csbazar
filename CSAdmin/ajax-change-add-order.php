<?php
require_once('config.php');
$id=_rainsenitizedata(isset($_GET['pid'])?$_GET['pid']:NULL);
?>
<link href="assets/css/twitter-bootstrap/bootstrap.css" rel="stylesheet">
<div class="modal-header">
  <a class="close" data-dismiss="modal">&times;</a>
  <h3>Add Product Picture</h3>
</div>
<div class="modal-body">
<form action="allphpaction.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="pid" value="<?php echo $id; ?>">
<table>
	<tr>
		<td>Enter order Number</td>
		<td>:</td>
		<td><input id="firstname" name="orderno" type="text" placeholder="Enter only order number" class="input-xlarge"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td> <input class="btn btn-small btn-success" type="submit" name="change-order" value="Change Order" > </td>
	</tr>
</table>
</form>
</div>
