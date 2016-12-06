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

<fieldset>
  <form method="post" action="allphpaction.php"  class="form-horizontal" enctype="multipart/form-data">
<div class="control-group">
<label class="control-label">Company Name</label>
<div class="controls">
<input id="firstname" name="companyname" type="text" placeholder="Enter Company Name" class="input-xlarge">
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
while($result = $q->fetch(PDO::FETCH_OBJ))
{
?>
<option value="<?php echo $result->ct_name; ?>"><?php echo $result->ct_name; ?></option>
<?php } ?>
</select>
</div>
</div>
 
<div class="control-group">
<label class="control-label">Description</label>
<div class="controls">
<textarea id="description" name="description" placeholder="Enter Description text ..." class="span9" style="height: 150px"> </textarea>
</div>
</div>
 
 <div class="control-group">
<label class="control-label">Address</label>
<div class="controls">
<textarea name="address" placeholder="Enter Address text ..." class="span9" style="height: 150px"> </textarea>
</div>
</div>

<div class="control-group">
<label class="control-label">Location</label>
<div class="controls">
<div class="input-append date">
<input  name="location" type="text" placeholder="enter gps location" class="input-xlarge">
</div>

</div>
</div>
 
<div class="control-group">
<label class="control-label">Web Site</label>
<div class="controls">

<input  id="url" name="website" placeholder="enter website url" type="text" class="input-block-level">

</div>
</div>
 
<div class="control-group">
<label class="control-label">Contact Person</label>
<div class="controls">
<input name="contactperson" type="text" placeholder="Your Contact Person" class="input-xlarge">
</div>
</div>

<div class="control-group">
<label class="control-label">Contact Number</label>
<div class="controls">
<input name="contactnumber" placeholder="Enter contact number" type="text" class="input-xlarge">
</div>
</div>
 
<div class="control-group">
<label class="control-label">E-mail</label>
<div class="controls">
<div class="input-prepend input-append">
<input name="email" placeholder="Enter email address" type="text" class="input-xlarge">
</div>
</div>
</div>
 
 <div class="control-group">
<label class="control-label">Password</label>
<div class="controls">
<input id="url" name="password" type="password" placeholder="Enter strong password" class="input-xlarge">
</div>
</div>

 <div class="control-group">
<label class="control-label">Logo</label>
<div class="controls">
<div class="fileupload fileupload-new" data-provides="fileupload">
<div class="input-append">
<div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div>
<span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span>
<input type="file" name="logo" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
</div>
</div>
</div>
</div>

<div class="control-group">
<label class="control-label"></label>
<div class="controls">
<span class="label label-warning">Picture size: height-112px & width-150px</span>
</div>
</div>

<div class="form-actions">
<input type="submit" name="new-marcent" class="btn btn-primary" value="Save">
<button id="cancel-button" type="button" class="btn btn-danger">Cancel</button>
</div>
</form>
</fieldset>

</div>
</div>
</div>
</div>
</div>
 