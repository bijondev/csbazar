<div id="main">
<div class="container-fluid">
<div class="row-fluid">
<div class="span12">
<h3 class="page-title">
Add New Product
</h3>
<ul class="breadcrumb">
<li>
<i class="icon-home"></i>
<a href="#">Dashboard</a>
<span class="icon-angle-right"></span>
</li>
<li><a href="#">Add new product</a>
</li>
</ul> </div>
</div>
<div class="row-fluid">
<div class="span12">
<div class="social-box">
<div class="header">
<h4>Add New Product</h4>
</div>
<div class="body">
<form method="post" action="allphpaction.php" id="register-form" class="form-horizontal">
<fieldset>

<div class="control-group">
<label class="control-label">Product Name</label>
<div class="controls">
<input name="productname" type="text" placeholder="Your First Name" class="input-xlarge" 
data-validation-required-message="Must enter product title" required>
<p class="help-block"></p>
</div>
</div>
 
<div class="control-group">
<label class="control-label">Conditions</label>
<div class="controls">
<textarea id="wysiwyg1" name="conditions" placeholder="Enter text ..." class="span9" style="height: 150px"> </textarea>
</div>
</div>
 
<div class="control-group">
<label class="control-label">Description</label>
<div class="controls">
<textarea id="description" name="description" placeholder="Enter text ..." class="span9" style="height: 150px"> </textarea>
</div>
</div>
 
<div class="control-group">
<label class="control-label">From date</label>
<div class="controls">
<div id="datetimepicker2" class="input-append date">
<input required id="input-datetimepicker2" name="fromdate" data-format="yyyy-MM-dd" type="text" class="input-block-level">
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
<input required id="input-datetimepicker2" name="todate" data-format="yyyy-MM-dd" type="text" class="input-block-level">
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
<select required name="marcent" class="input-xlarge chzn-select">
<option>Choose a Marcent</option>
<?php
$sql = "SELECT `mr_id`, `mr_company_name` from es_marcents";
$q = $conn->prepare($sql);
$q->execute();
while($result = $q->fetch(PDO::FETCH_OBJ))
{
?>
<option value="<?php echo $result->mr_id; ?>"><?php echo $result->mr_company_name; ?></option>
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
while($result = $q->fetch(PDO::FETCH_OBJ))
{
?>
<option value="<?php echo $result->pc_id; ?>"><?php echo $result->pc_name; ?></option>
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
<input required name="originalprice" type="text"/><span class="add-on">.00</span>
</div>
<p class="help-block"></p>
</div>
</div>
 
<div class="control-group">
<label class="control-label">Hot</label>
<div class="controls">
<div class="switch" data-on="info" data-off="success">
<input type="checkbox" name="hot" value="hot" />
</div>
</div>
</div>
 
<div class="control-group">
<label class="control-label">Deal</label>
<div class="controls sexy">
<label class="radio">
<input type="radio" name="deals" value="deals">
Deal
</label>
<label class="radio">
<input type="radio" name="deals" value="products" checked="">
Products
</label>
</div>
</div>

<div class="control-group">
<label class="control-label">Sold Out</label>
<div class="controls">
<div class="switch" data-on="info" data-off="success">
<input type="checkbox" name="soldout" value="soldout" />
</div>
</div>
</div>


<div class="form-actions">
<input id="submit-button" type="submit" name="newproduct" data-loading-text="sending info..." class="btn btn-primary" value="Next">
<button id="cancel-button" type="button" class="btn btn-danger">Cancel</button>
</div>

</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>
 