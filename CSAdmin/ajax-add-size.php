<?php
require_once('config.php');
$id=_rainsenitizedata(isset($_GET['pid'])?$_GET['pid']:NULL);
?>
<link href="assets/css/twitter-bootstrap/bootstrap.css" rel="stylesheet">
<div class="modal-header">
  <a class="close" data-dismiss="modal">&times;</a>
  <h3>Add Product size</h3>
</div>
<div class="modal-body">
<form action="allphpaction.php" method="post">
<input type="hidden" name="pid" value="<?php echo $id; ?>">
<table>
	<tr>
		<td>Size</td>
		<td>:</td>
		<td><input name="sizename" type="text" placeholder="please Enter Product size" class="input-xlarge"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td> <input class="btn btn-small btn-success" type="submit" name="save-size" value="Save" > </td>
	</tr>
</table>
</form>
</div>
