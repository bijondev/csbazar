<?php
require_once('config.php');
$id=_rainsenitizedata(isset($_GET['pid'])?$_GET['pid']:NULL);
?>
<link href="assets/css/twitter-bootstrap/bootstrap.css" rel="stylesheet">
<div class="modal-header">
  <a class="close" data-dismiss="modal">&times;</a>
  <h3>Edit Product size</h3>
</div>
<div class="modal-body">
<form action="allphpaction.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="pid" value="<?php echo $id; ?>">
<table>
	<tr>
		<td>Size</td>
		<td>:</td>
		<td><input name="logo" type="file" 
		 placeholder="Select Logo Image" class="input-xlarge">
		 </td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td> 
		<span class="label label-warning">Picture size: height-112px & width-150px</span>
		<input class="btn btn-small btn-success" type="submit" 
		name="Changemarcentlogo" value="Change" > </td>
	</tr>
</table>
</form>
</div>
