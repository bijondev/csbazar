<?php include 'header.php'; ?> 

  <div class="container container-main"> <!--container middle part-->
   	<div class="row"> <!--row-->
    <div class="span12 search-bar">
    <div class="span3" style="margin-left:3px;">
    <a href="">
      <h3 class="all-catagory">All Products</h3></a>
    </div>
            <div class="span5 leftside"> <!--leftside--> 
            <form action="<?php echo baseurl; ?>search" style="margin-top:5px;" method="post" class="navbar-form pull-left">
            <div class="btn-group">
  <a class="btn dropdown-toggle default" data-toggle="dropdown" href="#">
    Catagory
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
                    <?php
        $sql = "SELECT *
FROM `es_product_category` order by pc_name asc";
        $q = $conn->prepare($sql);
        $q->execute();
        while($result = $q->fetch(PDO::FETCH_OBJ))
        {
        ?>
                    <li><a href="<?php echo baseurl; ?>catagory/<?php echo slug($result->pc_name); ?>/<?php echo slug($result->pc_id); ?>"><?php echo $result->pc_name; ?></a></li>
                    <?php } ?>
  </ul>
    <input type="text" class="span3" name="s"  id="search-textbox"   placeholder="Search Product" />
  <button type="submit" class="btn default">GO</button>
</div>


</form>
            </div>
            <div class="span3">
              <p class="hotline">Hotline : +88 01716 301000 <br />9 AM to 8 PM (Everyday)</p>
            </div>

    </div>

<?php 
$q=_rainsenitizedata(isset($_GET['q'])?$_GET['q']:NULL);
if($q!="login" && $q!="SignUp" && $q!="bkash" && $q!="pickup" 
&& $q!="cash-on-delevery" &&  $q!="featureyourbusiness" && $q!="about" && $q!="press" && $q!="careere" && $q!="terms-of-us" &&
$q!="Privacy-Policy" ) {
include 'left.php';
}
 ?>    
       <div class="span9"> <!--span9-->
       <?php
       $q=_rainsenitizedata(isset($_GET['q'])?$_GET['q']:NULL);
       if($q==""){
        include 'banner.php';
        include 'feture-shop.php';
        //include 'feture-catagory.php';
        include 'homeproduct.php';
       }
       else if ($q=="catagory") {
         include 'catagory-product.php';
       }
       elseif ($q=="buy") {
         include 'buy-product.php';
       }
       elseif($q=="search"){
        include 'search-product.php';
       }
       elseif ($q=="e-shop") {
         include 'e-shop.php';
       }
       elseif ($q=="deals-view") {
         include 'deals-view.php';
       }
        elseif ($q=="deals") {
         include 'deals.php';
       }
       elseif ($q=="eshop") {
         include 'feture-shop.php';
       }
       elseif ($q=="all-deals") {
         include 'all-deals.php';
       }
       elseif ($q=="all-products") {
         include 'all-products.php';
       }
       elseif ($q=="featureyourbusiness") {
         include 'geatureyourbusiness.php';
       }
      
       elseif ($q=="cash-on-delevery") {
         include 'cash-on-delevery.php';
       }
       elseif ($q=="pickup") {
         include 'pickup.php';
       }
       elseif ($q=="bkash") {
         include 'bKash.php';
       }
       elseif ($q=="SignUp") {
         include 'SignUp.php';
       }
       elseif ($q=="login") {
         include 'login.php';
       }

       elseif ($q=="userexist") {
         include 'userexist.php';
       }

       elseif ($q=="registerdconfirm") {
         include 'registerdconfirm.php';
       }

       elseif($q=="about"){
        include 'about.php';
       }
       elseif($q=="press"){
        include 'press.php';
       }
       elseif($q=="careere"){
        include 'careere.php';
       }
       elseif($q=="terms-of-us"){
        include 'terms-of-us.php';
       }
       elseif($q=="Privacy-Policy"){
        include 'Privacy-Policy.php';
       }
       elseif($q==""){
        include '.php';
       }
       else{
        include 'product-details.php';
       }

       ?>
       </div> <!--//span9-->
       	
  	</div>	<!--row--> 
  </div> <!--container middle part-->			
 <?php include 'footer.php'; ?> 