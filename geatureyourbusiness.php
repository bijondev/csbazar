             <div class="product_title fix">
               <h5>Feature Your Business</h5> 
             </div>
             <div class="box">            
                <div class="row box_down">
                <div class="span5">

    <form method="post" action="phpaction.php" class="form-horizontal">
    <?php
    $msg=isset($_SESSION['msg_fetb'])?$_SESSION['msg_fetb']:NULL;
    if($msg!=""){
        ?>
        <div class="alert alert-success">
<?php echo $_SESSION['msg_fetb']; ?>
</div>
        <?php  }
        unset($_SESSION['msg_fetb']);
         ?>
    <h3>Business details</h3>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Name of the Company *</label>
    <div class="controls">
      <input type="text" required name="companyname"  name="some_field"  placeholder="Enter Company Name">
      <p class="help-block"></p>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label">Type of Business *</label>
    <div class="controls">
      <input type="text" required  name="businesstype"  name="some_field"  placeholder="Type of Business" data-validation-email-message="Please Enter Valid Email Address">
      <p class="help-block"></p>
    </div>
  </div>

    <div class="control-group">
    <label class="control-label">Location *</label>
    <div class="controls">
      <input type="text" required name="location"  name="some_field"  placeholder="Enter location">
      <p class="help-block"></p>
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" >Website</label>
    <div class="controls">
      <input type="text" required name="website"  name="some_field"  placeholder="Enter website">
      <p class="help-block"></p>
    </div>
  </div>
<h3>Contact information</h3>

    <div class="control-group">
    <label class="control-label">Contact Person *</label>
    <div class="controls">
      <input type="text" required name="contactperson"  name="some_field"  placeholder="Enter Contact Person">
      <p class="help-block"></p>
    </div>
  </div>

      <div class="control-group">
    <label class="control-label">Contact Number *</label>
    <div class="controls">
      <input type="text" required name="contactnumber"  name="some_field"  placeholder="Enter Contact Number">
      <p class="help-block"></p>
    </div>
  </div>

      <div class="control-group">
    <label class="control-label">Email Address *</label>
    <div class="controls">
      <input type="email" required name="emailaddress"  name="some_field"  placeholder="Enter Email Address">
      <p class="help-block"></p>
    </div>
  </div>

      <div class="control-group">
    <label class="control-label">Any Other Information</label>
    <div class="controls">
      <textarea required placeholder="Enter Address Details"  name="othrrsinfo"  rows="3"></textarea>
      <p class="help-block"></p>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" value="feturebusiness" name="feturebusiness" class="btn">Submit</button>
    </div>
  </div>
</form>
</div>

<div class="span4">
<h3>CONTACT INFORMATION</h3>

<label>Phone: </label>
<label>+88 01716 301000/ 88 01676 098884 </label>

<label>Email:</label>
<label>support@csbazar.com</label>
</div>
                </div>
             </div> 