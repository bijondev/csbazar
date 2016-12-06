<div class="product_title fix">
<h5>Registration Please</h5> 
</div>
<div class="box">            
<div class="row box_down">
<div class="span9">
<form method="post" action="<?php echo baseurl; ?>phpaction.php" class="form-horizontal">
<br />
<div class="control-group">
    <label class="control-label" for="inputEmail">Full Name</label>
    <div class="controls">
      <input type="text" required name="fullname" placeholder="Enter Full Name">
      <p class="help-block"></p>
    </div>
  </div>
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
    <label class="control-label">Phone Number</label>
    <div class="controls">
      <input type="text" required name="phone" placeholder="Enter Phone Number">
      <p class="help-block"></p>
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" >Address</label>
    <div class="controls">
      <textarea required placeholder="Enter Address Details"  name="address"  rows="3"></textarea>
      <p class="help-block"></p>
    </div>
  </div>

    <div class="control-group">
    <div class="controls">
      <button type="submit" name="signup" value="signup" class="btn btn-success">Buy Now</button>
    </div>
  </div>
</form>

</div>
</div>
</div> 