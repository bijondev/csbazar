<div id="main">
<div class="container-fluid">
<div class="row-fluid">
<div class="span12">
<h3 class="page-title">
Add New Add
</h3>
<ul class="breadcrumb">
<li>
<i class="icon-home"></i>
<a href="#">Dashboard</a>
<span class="icon-angle-right"></span>
</li>
<li><a href="#">Add New Add</a>
</li>
</ul> </div>
</div>
<div class="row-fluid">
<div class="span12">
<div class="social-box">
<div class="header">
<h4>Add New add</h4>
</div>
<div class="body">

<fieldset>
  <form method="post" action="allphpaction.php"  class="form-horizontal" enctype="multipart/form-data">
<div class="control-group">
<label class="control-label">Title</label>
<div class="controls">
<input id="firstname" name="title" type="text" placeholder="Enter Add Title" class="input-xlarge">
</div>
</div>

<div class="control-group">
<label class="control-label">URL</label>
<div class="controls">
<input id="firstname" name="link" type="text" placeholder="Enter Target Url link" class="input-xlarge">
</div>
</div>


<div class="control-group">
<label class="control-label">From Date</label>
<div class="controls">
<div id="datetimepicker4" class="input-append date">
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
<label class="control-label">TO Date</label>
<div class="controls">
<div id="datetimepicker2" class="input-append date">
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
<label class="control-label">Picture</label>
<div class="controls">
<input id="firstname" name="file" type="file" placeholder="Your First Name" class="input-xlarge">
</div>
</div>
<div class="control-group">
<label class="control-label"></label>
<div class="controls">
<span class="label label-warning">Picture size: height-147px & width-203px</span>
<span class="label label-success">Picture must be gif formet</span>
</div>
</div>

<div class="form-actions">
<input type="submit" name="new-add" class="btn btn-primary" value="Save">
<button id="cancel-button" type="button" class="btn btn-danger">Cancel</button>
</div>
</form>
</fieldset>

</div>
</div>
</div>
</div>
</div>
 