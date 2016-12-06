<?php
require_once('config.php');
$id=_rainsenitizedata(isset($_GET['pid'])?$_GET['pid']:NULL);
?>
<link href="assets/css/twitter-bootstrap/bootstrap.css" rel="stylesheet">

<link href="assets/js/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css" rel="stylesheet">
<link href="assets/js/bootstrap-fileupload/bootstrap-fileupload.min.css" rel="stylesheet">
<link href="assets/js/datatables/media/DT_bootstrap.css" rel="stylesheet">

<div class="modal-header">
  <a class="close" data-dismiss="modal">&times;</a>
  <h3>Edit Product</h3>
</div>
<div class="modal-body">
<?php
        $sql = "SELECT p.p_id, p.p_name, p.p_conditions, p.p_deals, p.p_sold_out, p.p_descriptions, DATE_FORMAT(p.p_published_from_date, '%Y-%m-%d') as fromdate, 
DATE_FORMAT(p.p_published_to_date,'%Y-%m-%d') as todate, p.marchent_id, p.category_id, p.p_original_price, p.p_hot,
m.mr_company_name, c.pc_name
FROM `es_products` p, `es_marcents` m, `es_product_category` c
                WHERE p.`category_id`=c.`pc_id` AND p.`marchent_id`=m.`mr_id`
                AND p.`p_id`=?";
        $q = $conn->prepare($sql);
        $q->execute(array($id)) or die(print_r($q->errorInfo()));

        $result = $q->fetch(PDO::FETCH_OBJ);
        //print_r($result);
?>
<form method="post" action="allphpaction.php" id="register-form" class="form-horizontal">
<fieldset>
<input type="hidden" name="pid" value="<?php echo $id; ?>" />
<div class="control-group">
<label class="control-label">Product Name</label>
<div class="controls">
<input name="productname" value="<?php echo $result->p_name; ?>" type="text" placeholder="Enter Product Title" class="input-xlarge" 
data-validation-required-message="Must enter product title" required>
<p class="help-block"></p>
</div>
</div>
 
<div class="control-group">
<label class="control-label">Conditions</label>
<div class="controls">
<textarea id="wysiwyg1" name="conditions" placeholder="Enter text ..." class="span9" style="height: 150px"><?php echo $result->p_conditions; ?></textarea>
</div>
</div>
 
<div class="control-group">
<label class="control-label">Description</label>
<div class="controls">
<textarea id="description" name="description" placeholder="Enter text ..." class="span9" style="height: 150px"><?php echo $result->p_descriptions; ?></textarea>
</div>
</div>
 
<div class="control-group">
<label class="control-label">From date</label>
<div class="controls">
<div id="datetimepicker2" class="input-append date">
<input required id="input-datetimepicker2" 
value="<?php echo $result->fromdate; ?>" name="fromdate" data-format="yyyy-MM-dd" type="text" class="input-block-level">
<span class="add-on">
<i data-time-icon="icon-time" data-date-icon="icon-calendar">
</i>
</span>
</div>
<p class="help-block"></p>
</div>
</div>


<div class="control-group">
<label class="control-label">To date</label>
<div class="controls">
<div id="datetimepicker4" class="input-append date">
<input required id="input-datetimepicker2" 
value="<?php echo $result->todate; ?>" name="todate" data-format="yyyy-MM-dd" type="text" class="input-block-level">
<span class="add-on">
<i data-time-icon="icon-time" data-date-icon="icon-calendar">
</i>
</span>
</div>
<p class="help-block"></p>
</div>
</div>
 
<div class="control-group">
<label class="control-label">Marcent</label>
<div class="controls">
<select  required name="marcent" class="input-xlarge chzn-select">
<option>Choose a Marcent</option>
<?php
$sql = "SELECT `mr_id`, `mr_company_name` from es_marcents";
$q = $conn->prepare($sql);
$q->execute();
while($rm = $q->fetch(PDO::FETCH_OBJ))
{
?>
<option <?php if($result->marchent_id==$rm->mr_id) { echo "selected"; } ?> value="<?php echo $rm->mr_id; ?>"><?php echo $rm->mr_company_name; ?></option>
<?php } ?>
</select>
<p class="help-block"></p>
</div>
</div>

<div class="control-group">
<label class="control-label">Catagory</label>
<div class="controls">
<select required name="catagory" class="input-xlarge chzn-select">
<option>Choose a catagory</option>
<?php
$sql = "SELECT * from es_product_category";
$q = $conn->prepare($sql);
$q->execute();
while($rc = $q->fetch(PDO::FETCH_OBJ))
{
?>
<option <?php if($result->category_id==$rc->pc_id) { echo "selected"; } ?> 
value="<?php echo $rc->pc_id; ?>"><?php echo $rc->pc_name; ?></option>
<?php } ?>
</select>
<p class="help-block"></p>
</div>
</div>
 
<div class="control-group">
<label class="control-label">Original Price</label>
<div class="controls">
<div class="input-prepend input-append">
<span class="add-on">Tk.</span>
<input required value="<?php echo $result->p_original_price; ?>" name="originalprice" type="text"/><span class="add-on">.00</span>
</div>
<p class="help-block"></p>
</div>
</div>
 
<div class="control-group">
<label class="control-label">Hot</label>
<div class="controls">
<div class="switch" data-on="info" data-off="success">
<input type="checkbox" <?php if($result->p_hot=="hot"){ echo "checked"; } ?> name="hot" value="hot" />
</div>
</div>
</div>
 

<div class="control-group">
<label class="control-label">Deal</label>
<div class="controls sexy">
<label class="radio">
<input type="radio" name="deals" value="deals" <?php if($result->p_deals=="deals"){ echo "checked"; } ?>>
Deal
</label>
<label class="radio">
<input type="radio" name="deals" value="products" <?php if($result->p_deals=="products"){ echo "checked"; } ?>>
Products
</label>
</div>
</div>


<div class="control-group">
<label class="control-label">Sold Out</label>
<div class="controls">
<div class="switch" data-on="info" data-off="success">
<input type="checkbox" <?php if($result->p_sold_out=="soldout"){ echo "checked"; } ?> name="soldout" value="soldout" />
</div>
</div>
</div>

<div class="form-actions">
<input id="submit-button" type="submit" name="edit-product" data-loading-text="sending info..." class="btn btn-primary" value="Update">
<button id="cancel-button" type="button" class="btn btn-danger">Cancel</button>
</div>

</fieldset>
</form>
</div>
<script src="assets/js/wysihtml5/dist/wysihtml5-0.3.0.min.js"></script>
<script src="assets/js/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
<script src="assets/js/jquery-uniform/jquery.uniform.min.js"></script>
<script src="assets/js/form-stuff.elements.js"></script>
<script src="assets/js/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
	$(function() {
		$('#colorpicker-p').colorpicker();
	});

  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );

        $(function() {
            $('#wysiwyg1').wysihtml5({
                "stylesheets": ["/templates/social/assets/js/bootstrap-wysihtml5/lib/css/wysiwyg-color.css"]
            });
            $('#description').wysihtml5({
                "stylesheets": ["/templates/social/assets/js/bootstrap-wysihtml5/lib/css/wysiwyg-color.css"]
            });
        });
        /*]]>*/



</script>