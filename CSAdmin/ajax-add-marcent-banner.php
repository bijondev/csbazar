<?php
require_once('config.php');
$id=_rainsenitizedata(isset($_GET['pid'])?$_GET['pid']:NULL);
?>
<link href="assets/css/twitter-bootstrap/bootstrap.css" rel="stylesheet">
<div class="modal-header">
  <a class="close" data-dismiss="modal">&times;</a>
  <h3>Add Banner</h3>
</div>
<div class="modal-body">
<form action="allphpaction.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="pid" value="<?php echo $id; ?>">
<table>
	<tr>
		<td>Size</td>
		<td>:</td>
		<td><input name="banner" type="file" 
		 placeholder="Select banner Image" class="input-xlarge"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td> 
		<span class="label label-warning">Picture size: height-300px & width-700px</span>
		<input class="btn btn-small btn-success" type="submit" 
		name="add-marcent-banner" value="Add" > </td>
	</tr>
</table>
</form>
</div>
