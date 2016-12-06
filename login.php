<div class="product_title fix">
<h5>Registration Please</h5> 
</div>
<div class="box">            
<div class="row box_down">
<div class="span9">
<form method="post" action="<?php echo baseurl; ?>phpaction.php" class="form-horizontal">
<br />
<span style="color:red;">
  <?php
  $msg=isset($_SESSION['msg'])?$_SESSION['msg']:NULL;
  if(!empty($msg))
  {
  echo $msg;
}
  ?>
</span>
  <div class="control-group">
    <label class="control-label">Email</label>
    <div class="controls">
      <input type="email" required  name="email"  placeholder="Enter E-mail Address" data-validation-email-message="Please Enter Valid Email Address">
      <p class="help-block"></p>
    </div>
  </div>

    <div class="control-group">
    <label class="control-label">password</label>
    <div class="controls">
      <input type="password" required  name="password"  placeholder="Enter Strong password" data-validation-email-message="Please Enter Password">
      <p class="help-block"></p>
    </div>
  </div>


    <div class="control-group">
    <div class="controls">
      <button type="submit" name="login" value="login" class="btn btn-success">Buy Now</button>
    </div>
  </div>
</form>

</div>
</div>
</div> 