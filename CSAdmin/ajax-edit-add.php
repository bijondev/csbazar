
<div class="modal-header">
  <a class="close" data-dismiss="modal">&times;</a>
  <h3>Edit Add</h3>
</div>
<div class="modal-body">
  <form method="post" action="allphpaction.php"  class="form-horizontal" enctype="multipart/form-data">
  <input type="hidden" name="pid" value="<?php echo $id; ?>">
<div class="control-group">
<label class="control-label">Title</label>
<div class="controls">
<input id="firstname" value="<?php echo $result->title; ?>" name="title" type="text" placeholder="Enter Add Title" class="input-xlarge">
</div>
</div>

<div class="control-group">
<label class="control-label">URL</label>
<div class="controls">
<input id="firstname"  value="<?php echo $result->link; ?>" name="link" type="text" placeholder="Enter Target Url link" class="input-xlarge">
</div>
</div>


<div class="control-group">
<label class="control-label">From Date</label>
<div class="controls">
<div id="datetimepicker4" class="input-append date">
<input required id="input-datetimepicker2"  value="<?php echo $result->from_date; ?>" name="fromdate" data-format="yyyy-MM-dd" type="text" class="input-block-level">
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
<input required id="input-datetimepicker2"  value="<?php echo $result->to_date; ?>" name="todate" data-format="yyyy-MM-dd" type="text" class="input-block-level">
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
</div>
