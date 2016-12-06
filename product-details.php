<div class="row">
<?php
$gq=_rainsenitizedata(isset($_GET['q'])?$_GET['q']:NULL);
$wh="";
if($q!=""){
  $wh=" p.p_url='".$gq."'";
}
        $sql = "SELECT p.p_id, p.p_name, p.p_url, m.mr_company_name, c.pc_name, p.p_descriptions, p.p_conditions,
p.p_original_price, pct.pp_path, prc.prc_price, 
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
        WHERE 
        $wh
        GROUP BY p.p_id
        LIMIT 0,1";
        $q = $conn->prepare($sql);
        $q->execute() or die(print_r($q->errorInfo()));
        $result = $q->fetch(PDO::FETCH_OBJ);
        
        ?>
       <div class="span9"> <!--span9-->  
            <div class="subproduct_title"> 
              <h3 style="padding-left: 2%;"><?php echo $result->p_name ?></h3>
            </div>               
             
             <div class="box"> <!--box-->            
                <div class="row box_down">  <!--row-->                   
                   <div class="span5"> <!--span7--> 

                      <div class="clearfix" id="content" >
    <div class="clearfix">
        
            <?php
       $pid=$result->p_id;
        $sql = "SELECT *
FROM `es_product_pictures` WHERE p_id=$pid";
        $q = $conn->prepare($sql);
        $q->execute();
        $pr = $q->fetch(PDO::FETCH_OBJ);
        ?>
        <a href="<?php echo baseurl; ?>uploads/<?php echo $pr->pp_path; ?>" class="jqzoom" rel='gal1'  title="<?php echo $result->p_name ?>" >
            <img src="<?php echo baseurl; ?>uploads/small/<?php echo $pr->pp_path; ?>"  title="<?php echo $result->p_name ?>"  style="border: 1px solid #666;">

        </a>
    </div>
  <br/>
        <div class="clearfix" >
  <ul id="thumblist" class="clearfix" >
    <?php
    $pid=$result->p_id;
        $sql = "SELECT *
FROM `es_product_pictures` WHERE p_id=$pid";
        $q = $conn->prepare($sql);
        $q->execute();
        while($pr = $q->fetch(PDO::FETCH_OBJ))
        {
        ?>
    <li><a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo baseurl; ?>uploads/small/<?php echo $pr->pp_path; ?>',largeimage: '<?php echo baseurl; ?>uploads/<?php echo $pr->pp_path; ?>'}">
    <img src='<?php echo baseurl; ?>uploads/thumb/<?php echo $pr->pp_path; ?>' width="120" ></a></li>
    <?php } ?>
  </ul>
  </div>
</div>

                   </div> <!--//span7-->
                    
                   <div class="span3"> <!--span3-->
                    <p><?php echo $result->p_name ?></p> <br />
                    <div style="float:left; width:100%;">
                    <span style="float:left;">Color: </span>
                    <?php
        $sql = "SELECT * 
        FROM  `es_product_colors`
        where `p_id`=?";
        $q = $conn->prepare($sql);
        $q->execute(array($pid));
        while($procolor = $q->fetch(PDO::FETCH_OBJ))
        {
        ?>
        <span style=" float:left; margin-left:3px;height:16px; width:16px; border:1px solid #000; display:block; background:<?php echo $procolor->clr_code; ?>;"></span>
    <?php } ?>
</div>
      Size:                   
      <?php
      $pid=$result->p_id;
      $sql = "SELECT *
      FROM `es_product_sizes` WHERE p_id=$pid";
      $q = $conn->prepare($sql);
      $q->execute() or die(print_r($q->errorInfo()));
      while($psize = $q->fetch(PDO::FETCH_OBJ))
      {
        ?>
                    <a class="btn btn-mini" href="#"><?php echo $psize->ps_size ?></a>
                    <?php } ?>

                                        
                        <div class="row">
                          <div class="span3" style="margin-top: 20px;">
                            <div class="cutline subproduct_tk_font"> <?php echo $result->prc_price; ?> Tk.</div>
                            <div class="subproduct_tk_font2"> <?php echo $result->descountprice; ?> taka </div>
                          </div>
                        </div>
                   </div>  <!--//span3--> 
                   
              <div class="span4"> <!--span12--> 
                   <div class="span4" style="margin: 2%;"> <!--span9-->
                     <button class="btn btn-large btn-primary" type="button"><?php echo $result->Descountpercent; ?>% SAVINGS</button>
                     <a class="btn btn-large btn-primary" href="<?php echo baseurl; ?>buy/<?php echo $gq; ?>" type="button">Buy Now</a>                      
                   </div>  <!--//span6-->  
             
              </div> <!--//span12-->
              
              <div class="span9" style="margin-top:20px;"> <!--span12--> 
              <div class="row">
              <div class="span9"> <!--span3-->
              <ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#home">Product Highlights</a></li>
  <li><a href="#profile">Product Conditions</a></li>
  <li><a href="#messages">Product Reveiw</a></li>
</ul>
 
<div class="tab-content">
  <div class="tab-pane active" id="home"><?php echo html_entity_decode($result->p_descriptions); ?>   </div>
  <div class="tab-pane" id="profile"><?php echo html_entity_decode($result->p_conditions); ?>  </div>
  <div class="tab-pane" id="messages"><div class="fb-comments" data-href="<?php echo baseurl.$q; ?>" data-numposts="15"></div></div>
</div>
 </div>
<script>
  $(function () {
    $('#myTab a:first').tab('show');
  })
</script>

                   </div>  <!--//span6-->  
             </div>
              </div> <!--//span12-->
                                                
                    
                </div>  <!--//row-->
                
             </div> <!--//box--> 
             
       </div> <!--//span9-->
       </div>