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
		<td>Select Picture</td>
		<td>:</td>
		<td><input id="firstname" name="file" type="file" placeholder="Your First Name" class="input-xlarge"></td>
	</tr>
	<tr>
		<td colspan="3"><span class="label label-important">Picture size: width-1000px and Height-1250px</span></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td> <input class="btn btn-small btn-success" type="submit" name="save-picture" value="Save" > </td>
	</tr>
</table>
</form>
</div>
