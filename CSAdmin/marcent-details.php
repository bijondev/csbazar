<style type="text/css">
	h3{
		background-color: #545454;
		color: #fff;
	}
</style>
<div id="main">
<div class="container-fluid">
<div class="row-fluid">
<div class="span12">
<h3 class="page-title">
Product Details
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
 <?php
 	if(isset($_GET['mid'])?$_GET['mid']:NULL!=""){
 		$_SESSION['active_marcent']=isset($_GET['mid'])?$_GET['mid']:NULL;
 	}

        $pid =$_SESSION['active_marcent'];
        $sql = "SELECT * FROM `es_marcents` where mr_id=?";
        $q = $conn->prepare($sql);
        $q->execute(array($pid)) or die(print_r($q->errorInfo()));

        $result = $q->fetch(PDO::FETCH_OBJ);
        //print_r($result);
        ?>
        <div class="bb-alert alert alert-info" style="display:none;">
        <span>The examples populate this alert with dummy content</span>
    </div>
<h4>Add New Marcent<a class="btn btn-small btn-success" href="ajax-edit-marcent.php?pid=<?php echo $pid; ?>" data-toggle="modal">Edit</a></h4>
</div>
<div class="body">

<fieldset>

<table>
	<tr>
		<td>Company Name</td>
		<td>:</td>
		<td><?php echo $result->mr_company_name; ?></td>
	</tr>
	<tr>
		<td>City</td>
		<td>:</td>
		<td><?php echo $result->mr_city; ?></td>
	</tr>
	<tr>
		<td>Address</td>
		<td>:</td>
		<td><?php echo $result->mr_address; ?></td>
	</tr>
	<tr>
		<td>Description</td>
		<td>:</td>
		<td><?php echo $result->mr_description; ?></td>
	</tr>
		<tr>
		<td>Location</td>
		<td>:</td>
		<td><?php echo $result->mr_location; ?></td>
	</tr>
	<tr>
		<td>Website</td>
		<td>:</td>
		<td><?php echo $result->mr_website; ?></td>
	</tr>
	<tr>
		<td>Contact Person</td>
		<td>:</td>
		<td><?php echo $result->mr_contact_person; ?></td>
	</tr>
	<tr>
		<td>Contact Number</td>
		<td>:</td>
		<td><?php echo $result->mr_contact_number; ?></td>
	</tr>
	<tr>
		<td>E-mail</td>
		<td>:</td>
		<td><?php echo $result->mr_email; ?></td>
	</tr>
	<tr>
		<td>Logo</td>
		<td>:</td>
		<td><img src="../uploads/<?php echo $result->mr_logo; ?>">
		<a class="btn btn-small btn-success" href="ajax-change-logo.php?pid=<?php echo $pid; ?>" data-toggle="modal">Change Logo</a>
		</td>
	</tr>

</table>


				<h3>Marcent banner</h3>
<table class="table table-striped">
	<tr>
		<th>Picture path</th>
		<th>Picture</th>
		<th><a class="btn btn-small btn-success" href="ajax-add-marcent-banner.php?pid=<?php echo $pid; ?>" data-toggle="modal">Add New</a></th>
		</tr>
<?php
        $sql = "SELECT mb_id, mb_picture, status
				FROM  `es_marcent_banners`
				where `m_id`=?";
        $q = $conn->prepare($sql);
        $q->execute(array($pid));
        while($result = $q->fetch(PDO::FETCH_OBJ))
        {
        ?>
		<tr>
			<td><img  width="200" src="../uploads/<?php echo $result->mb_picture; ?>"></td>
			<td>
				
			</td>
			<td>
			<button data-action="deletebannerpicture" value="<?php echo $result->mb_id; ?>" class="btn btn-small btn-warning">Delete</button></td>
		</tr>
		<?php } ?>
		</table>
</fieldset>

</div>
</div>
</div>
</div>
</div>
 