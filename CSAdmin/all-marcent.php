<div id="main">
<div class="container-fluid">
<div class="row-fluid">
<div class="span12">
<h3 class="page-title">
Dynamic Tables
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
<div class="span12">
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
<th>city</th>
<th>Contact Person</th>
<th>Contact Number</th>
<th>Status</th>
<th></th>
</tr>
</thead>
<tbody>
<?php
        $sql = "SELECT `mr_id`, `mr_company_name`, `mr_city`, `mr_contact_person`, `mr_contact_number`, `mr_logo`, u.u_status, u.u_id
        from es_marcents m, es_users u
        where m.u_id=u.u_id";
        $q = $conn->prepare($sql);
        $q->execute();
        while($result = $q->fetch(PDO::FETCH_OBJ))
        {
        ?>
<tr class="odd gradeX">
<td><input type="checkbox" id="inlineCheckbox2" value="option2"></td>
<td><?php echo $result->mr_company_name; ?></td>
<td><?php echo $result->mr_city; ?></td>
<td><?php echo $result->mr_contact_person; ?></td>
<td class="center"> <?php echo $result->mr_contact_number; ?></td>
<td class="center">
<?php
if($result->u_status=="E")
{
?>
	<button class="btn btn-small btn-info" data-action="MarcentDiesable" value="<?php echo $result->u_id; ?>" >Diesable</button>
        <?php
}
else{


        ?>
	<button class="btn btn-small btn-warning" data-action="MarcentEnable" value="<?php echo $result->u_id; ?>" >Enable</button>
        <?php } ?>
</td>
<td class="center">
	<a class="btn btn-small btn-success" href="?q=marcent-details&mid=<?php echo $result->mr_id; ?>" >View/Edit</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div> </div>
</div>
</div>