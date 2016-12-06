
<?php
require_once('config.php');
$id=_rainsenitizedata(isset($_GET['pid'])?$_GET['pid']:NULL);

$sql = "SELECT pc_id, pc_name
        from es_product_category where pc_id=?";
        $q = $conn->prepare($sql);
        $q->execute(array($id)) or die(print_r($q->errorInfo()));

        $result = $q->fetch(PDO::FETCH_OBJ);
?>
<link href="assets/css/twitter-bootstrap/bootstrap.css" rel="stylesheet">
<div class="modal-header">
  <a class="close" data-dismiss="modal">&times;</a>
  <h3>Edit Catagory</h3>
</div>
<div class="modal-body">
<form action="allphpaction.php" method="post">
<input type="hidden" name="pid" value="<?php echo $id; ?>">

<div class="control-group">
<label class="control-label">Catagory Name</label>
<div class="controls">
<input name="catagoryname" type="text" value="<?php echo $result->pc_name; ?>" placeholder="Enter color name" class="input-xlarge">
</div>
</div>

<div class="control-group">
<div class="controls">
<input class="btn btn-small btn-success" type="submit" name="edit-catagory" value="Save" >
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