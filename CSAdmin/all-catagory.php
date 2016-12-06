<div id="main">
<div class="container-fluid">
<div class="row-fluid">
<div class="span12">
<h3 class="page-title">
All catagory
</h3>
<ul class="breadcrumb">
<li>
<i class="icon-home"></i>
<a href="../dashboard.html">Dashboard</a>
<span class="icon-angle-right"></span>
</li>
<li><a href="#">Tables</a>
<span class="icon-angle-right"></span>
</li>
<li><a href="dynamic.html">Dynamic</a>
</li>
</ul> </div>
</div>
<div class="row-fluid">
<div class="span7">
<div class="social-box">
<div class="header">
<div class="btn-group hidden-phone">
<!--<a class="btn btn-primary" id="add-row" href="#"><i class="icon-pencil"></i> Add</a>
<a class="btn btn-danger disabled" href="#" id="delete-row"><i class="icon-trash"></i> Delete</a>-->
</div>
<div class="tools">
<button class="btn btn-success" data-toggle="collapse" data-target="#advanced-search"><i class="icon-filter"></i> Advanced Search</button>
<div class="btn-group">
<button class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i></button>

</div>
</div>
</div>
<div class="body">
<div id="advanced-search" class="collapse">
<table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-condensed well">
<thead>
<tr>
<th>Product Name</th>
<th>marcent</th>
<th>Catagory</th>
<th>Price</th>
</tr>
</thead>
<tbody>
<tr id="filter_global">
<td align="center">Global search</td>
<td align="center"><input type="text" name="global_filter" id="global_filter"></td>
<td align="center"><input type="checkbox" name="global_regex" id="global_regex"></td>
<td align="center"><input type="checkbox" name="global_smart" id="global_smart" checked></td>
</tr>
<tr id="filter_col1">
<td align="center">Rendering engine</td>
<td align="center"><input type="text" name="col1_filter" id="col1_filter"></td>
<td align="center"><input type="checkbox" name="col1_regex" id="col1_regex"></td>
<td align="center"><input type="checkbox" name="col1_smart" id="col1_smart" checked></td>
</tr>
<tr id="filter_col2">
<td align="center">Browser</td>
<td align="center"><input type="text" name="col2_filter" id="col2_filter"></td>
<td align="center"><input type="checkbox" name="col2_regex" id="col2_regex"></td>
<td align="center"><input type="checkbox" name="col2_smart" id="col2_smart" checked></td>
</tr>
</tbody>
</table>
</div>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
<thead>
<tr>
<th><input type="checkbox" id="toggle-checkboxes" value="option2"></th>
<th>Company</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<?php
        $sql = "SELECT pc_id, pc_name
        from es_product_category";
        $q = $conn->prepare($sql);
        $q->execute();
        while($result = $q->fetch(PDO::FETCH_OBJ))
        {
        ?>
<tr class="odd gradeX">
<td><input type="checkbox" id="inlineCheckbox2" value="option2"></td>
<td><?php echo $result->pc_name; ?></td>
<td class="center">
	<a class="btn btn-small btn-success"  href="ajax-edit-catagory.php?pid=<?php echo $result->pc_id; ?>"  data-toggle="modal" >Edit</a>
	<?php
	if($_SESSION['usertype']!="C")
	{
	?>
	<button data-action="deletecatagory" value="<?php echo $result->pc_id; ?>" class="btn btn-small btn-warning">Delete</button></td>
	<?php } ?>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div> </div>
</div>
</div>