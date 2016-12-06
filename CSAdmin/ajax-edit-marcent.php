<?php
require_once('config.php');
$pid=_rainsenitizedata(isset($_GET['pid'])?$_GET['pid']:NULL);
        $sql = "SELECT * FROM `es_marcents` where mr_id=?";
        $q = $conn->prepare($sql);
        $q->execute(array($pid)) or die(print_r($q->errorInfo()));

        $result = $q->fetch(PDO::FETCH_OBJ);
?>

<link href="assets/css/twitter-bootstrap/bootstrap.css" rel="stylesheet">
<div class="modal-header">
  <a class="close" data-dismiss="modal">&times;</a>
  <h3>Edit Marcent</h3>
</div>
<div class="modal-body">

  <form method="post" action="allphpaction.php"  class="form-horizontal" enctype="multipart/form-data">
  <input type="hidden" name="pid" value="<?php echo $pid; ?>">
<div class="control-group">
<label class="control-label">Company Name</label>
<div class="controls">
<input id="firstname" name="companyname" value="<?php echo $result->mr_company_name; ?>" type="text" placeholder="Enter Company Name" class="input-xlarge">
</div>
</div>
 
<div class="control-group">
<label class="control-label">City</label>
<div class="controls">
<select name="city" class="input-xlarge chzn-select">
<option value="">Choose a city</option>
<?php
$sql = "SELECT ct_name from es_city";
$q = $conn->prepare($sql);
$q->execute();
while($rct = $q->fetch(PDO::FETCH_OBJ))
{
?>
<option <?php if($result->mr_city==$rct->ct_name){ echo "selected"; } ?> 
value="<?php echo $rct->ct_name; ?>"><?php echo $rct->ct_name; ?></option>
<?php } ?>
</select>
</div>
</div>
 
<div class="control-group">
<label class="control-label">Address</label>
<div class="controls">
<textarea name="address" placeholder="Enter Description text ..." class="span9" style="height: 150px"><?php echo $result->mr_address; ?></textarea>
</div>
</div>
 
 <div class="control-group">
<label class="control-label">Description</label>
<div class="controls">
<div class="input-append date">
<textarea name="description" placeholder="Enter Description text ..." class="span9" style="height: 150px"><?php echo $result->mr_description; ?></textarea>
</div>

</div>
</div>

<div class="control-group">
<label class="control-label">Location</label>
<div class="controls">
<div class="input-append date">
<input  name="location" type="text" value="<?php echo $result->mr_location; ?>"  placeholder="enter gps location" class="input-xlarge">
</div>

</div>
</div>
 
<div class="control-group">
<label class="control-label">Web Site</label>
<div class="controls">

<input  id="url" name="website" placeholder="enter website url" value="<?php echo $result->mr_website; ?>" type="text" class="input-block-level">

</div>
</div>
 
<div class="control-group">
<label class="control-label">Contact Person</label>
<div class="controls">
<input name="contactperson" type="text" value="<?php echo $result->mr_contact_person; ?>" placeholder="Your Contact Person" class="input-xlarge">
</div>
</div>

<div class="control-group">
<label class="control-label">Contact Number</label>
<div class="controls">
<input name="contactnumber" value="<?php echo $result->mr_contact_number; ?>" placeholder="Enter contact number" type="text" class="input-xlarge">
</div>
</div>
 
<div class="form-actions">
<input type="submit" name="edit-marcent" class="btn btn-primary" value="Save">
<button id="cancel-button" type="button" class="btn btn-danger">Cancel</button>
</div>
</form>
</div>
<script type="text/javascript">
	$(function() {
		$('#colorpicker-p').colorpicker();
	});
</script>