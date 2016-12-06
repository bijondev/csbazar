<?php
require_once('config.php');
$id=_rainsenitizedata(isset($_GET['pid'])?$_GET['pid']:NULL);
?>
<link href="assets/css/twitter-bootstrap/bootstrap.css" rel="stylesheet">
<div class="modal-header">
  <a class="close" data-dismiss="modal">&times;</a>
  <h3>Add Product price</h3>
</div>
<div class="modal-body">
<form action="allphpaction.php" method="post">
<input type="hidden" name="pid" value="<?php echo $id; ?>">


<input type="hidden" name="pid" value="<?php echo $id; ?>">

<div class="control-group">
<label class="control-label">Colorname</label>
<div class="controls">
<input name="colorname" type="text" placeholder="Enter color name" class="input-xlarge">
</div>
</div>

<div class="control-group">
<label class="control-label">Select Color</label>
<div class="controls">
<input id="colorpicker-p" name="colorhash" type="text" value="#8fff00">
<p class="help-block"></p>
</div>
</div>

<div class="control-group">
<div class="controls">
<input class="btn btn-small btn-success" type="submit" name="select-color" value="Save" >
<p class="help-block"></p>
</div>
</div>
</form>
</div>
<script type="text/javascript">
	$(function() {
		$('#colorpicker-p').colorpicker();
	});
</script>