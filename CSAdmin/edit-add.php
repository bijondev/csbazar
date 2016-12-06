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
<?php
$id=_rainsenitizedata(isset($_GET['pid'])?$_GET['pid']:NULL);
$sql = "SELECT id, title, 
DATE_FORMAT(from_date,'%Y-%m-%d') as from_date, 
DATE_FORMAT(to_date,'%Y-%m-%d') as to_date, 
link
        from es_ad where id=?";
        $q = $conn->prepare($sql);
        $q->execute(array($id)) or die(print_r($q->errorInfo()));

        $result = $q->fetch(PDO::FETCH_OBJ);

?>
  <form method="post" action="allphpaction.php"  class="form-horizontal" enctype="multipart/form-data">
  <input type="hidden" name="pid" value="<?php echo $id; ?>">
<div class="control-group">
<label class="control-label">Title</label>
<div class="controls">
<input id="firstname"  value="<?php echo $result->title; ?>"  name="title" type="text" placeholder="Enter Add Title" class="input-xlarge">
</div>
</div>

<div class="control-group">
<label class="control-label">URL</label>
<div class="controls">
<input id="firstname" name="link" value="<?php echo $result->link; ?>" type="text" placeholder="Enter Target Url link" class="input-xlarge">
</div>
</div>


<div class="control-group">
<label class="control-label">From Date</label>
<div class="controls">
<div id="datetimepicker4" class="input-append date">
<input required id="input-datetimepicker2"  value="<?php echo $result->from_date; ?>"  name="fromdate" data-format="yyyy-MM-dd" type="text" class="input-block-level">
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
<input required id="input-datetimepicker2" value="<?php echo $result->to_date; ?>" name="todate" data-format="yyyy-MM-dd" type="text" class="input-block-level">
<span class="add-on">
<i data-time-icon="icon-time" data-date-icon="icon-calendar">
</i>
</span>
</div>
<p class="help-block"></p>
</div>
</div>

<div class="form-actions">
<input type="submit" name="edit-add" class="btn btn-primary" value="Save">
<button id="cancel-button" type="button" class="btn btn-danger">Cancel</button>
</div>
</form>
</fieldset>

</div>
</div>
</div>
</div>
</div>
 