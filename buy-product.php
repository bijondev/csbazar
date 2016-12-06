       <div class="row">
       <div class="box">
<?php
$gq=_rainsenitizedata(isset($_GET['v1'])?$_GET['v1']:NULL);
$wh="";
if($q!=""){
  $wh=" and p.p_url='".$gq."'";
}
        $sql = "SELECT p.p_id, p.p_name, p.p_url, m.mr_company_name, c.pc_name, 
        p.p_descriptions, p.p_conditions,
p.p_original_price, pct.pp_path, prc.prc_price, prc.prc_id,
ROUND(((p.p_original_price-prc.prc_price)/p.p_original_price)*100) AS Descountpercent,
(p.p_original_price-prc.prc_price) AS descountprice,
TIMEDIFF(p.p_published_to_date, NOW()) AS Dayleft,
DATE_FORMAT(p.p_published_to_date,'%d %b %y') as lastdate
FROM
    `es_products` AS `p`
    LEFT JOIN `es_product_category` AS `c` 
        ON (`p`.`category_id` = `c`.`pc_id`)
    LEFT JOIN `es_marcents` AS `m`
        ON (`p`.`marchent_id` = `m`.`mr_id`)
    LEFT JOIN `es_product_pictures` AS `pct`
        ON (`p`.`p_id` = `pct`.`p_id`)
        LEFT JOIN `es_product_prices` AS `prc`
        ON (`p`.`p_id` = `prc`.`p_id`)
        WHERE p.p_published_from_date<=NOW()
        AND p.p_published_to_date>=NOW()
        $wh
        GROUP BY p.p_id
        LIMIT 0,10";
        $q = $conn->prepare($sql);
        $q->execute() or die(print_r($q->errorInfo()));
        $result = $q->fetch(PDO::FETCH_OBJ);
        
        ?>
              <div class="span9"> <!--span9-->  
            <div class="subproduct_title"> 
              <h3 style="padding-left: 2%;">Buy Product</h3>
            </div>               
             
             <div class="box"> <!--box-->            


<div class="span5">
	<form method="post" action="<?php echo baseurl; ?>phpaction.php" class="form-horizontal">
	       <table  class="table">
       	<tr>
       		<td><img src="<?php echo baseurl; ?>/uploads/thumb/<?php echo $result->pp_path; ?>"></td>
       		<td><label><?php echo $result->p_name; ?></label></td>
       		<td><label><?php echo $result->prc_price; ?>TK.
       		<input type="hidden" name="productid" id="productid" value="<?php echo $result->p_id; ?>">
          <input type="hidden" name="priceid" id="priceid" value="<?php echo $result->prc_id; ?>">
          <input type="hidden" name="hideprice" id="hideprice" value="<?php echo $result->prc_price; ?>">
       		</label></td>
       		<td><label>Quentaty: 
       		<select id="quentaty" name="quentaty" class="form-control qty">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
</label>
       		
</td>
       		<td>
       			<span id="totalprice"><?php echo $result->prc_price; ?></span>TK.
       		</td>
       	</tr>
       </table>

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
    <label class="control-label" >Payment Method</label>
    <div class="controls">
      <label class="radio">
  <input type="radio" name="pm" value="cod" checked>
  Cash On Delevery
</label>
<label class="radio">
  <input type="radio" name="pm" value="pickup" >
  Pick From Office
</label>
<label class="radio">
  <input type="radio" name="pm" value="bkash" >
  bKash
</label>


      <p class="help-block"></p>
    </div>
  </div>


  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox"> Terms & Conditions
      </label>
      <button type="submit" name="buynow" value="buynow" class="btn">Buy Now</button>
    </div>
  </div>
</form>
</div>

</div>
</div>
       </div> <!--//span9-->
       </div>